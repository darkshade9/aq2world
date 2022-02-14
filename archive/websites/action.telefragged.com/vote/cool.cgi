#!/usr/bin/perl


require 'load.cgi';
&parse_query;

if($QUERY{'action'} eq "") {

    print "Content-Type: text/html\n\n";
    print "<HTML>\n";
    print "<TITLE>Voting Center Admin</TITLE>\n";
    print "<BODY BGCOLOR=\"$bgcolor\" BACKGROUND=\"$background\" TEXT=\"$text_color\" LINK=\"$link_color\"
ALINK=\"$link_color\" VLINK=\"$vlink_color\">\n";
    print "<CENTER><H1>Voting Center Admin</H1><P><BR>\n";
    print "<FONT SIZE=4 FACE=\"ARIAL\"><B>Current Topics</B></FONT>\n";
    print "<TABLE BORDER=$table_border CELLSPACING=$cellspacing CELLPADDING=$cellpadding BGCOLOR=\"$table_color\">\n";
    print "<TR><TD><B>Key:</B></TD><TD><B>Question:</B></TD><TD>Expires:</TD><TD><B>Actions:</B></TR></TD>\n";

    opendir(VOTE, "$base_dir") || die "Can't open $base_dir\n";
    while($file = readdir(VOTE)) {
        if($file =~ /.*\.$file_ext/) {

            open(FILE, "$base_dir/$file") || die "Can't open $file\n";
            $data =<FILE>;
            close(FILE);
            $topic = $file;
            $topic =~ s/\..*//g;

            $data =~ s/\n//g;
            @pairs = split(/&/, $data);
            foreach $pair (@pairs) {
                ($name, $value) = split(/=/, $pair);
                if($name eq "question") {
                    $question = $value;
                }
                elsif($name eq "exp") {
                    $exp = $value;
                }
                else {
                    $VOTE{$name} = $value;
                }
            }

            if(!($exp =~ /expired/i || $exp =~ /never/i)) {
                $exp -= &get_days;
                $exp = "$exp days";
            }

            print "<TR><TD><A
HREF=\"$script_url?action=results&topic=$topic\">$topic</A></TD><TD>$question</TD><TD>$exp</TD><TD>\n";
                        print "<A HREF=\"$admin_url?action=delete&topic=$topic\">Delete</A>\n";
                        print "</TR></TD>\n";
        }
    }
    closedir(VOTE);
    print "</TABLE><P><BR>\n";
    print "<TABLE WIDTH=500 BORDER=0>\n";
    print "<TR><TD>\n";
    print "<FONT FACE=\"ARIAL\" SIZE=4><B>Add Topic Form</B></FONT><P>\n";
    print "<FONT FACE=\"Arial\" SIZE=2>\n";
    print "<FORM ACTION=\"$admin_url?action=add\" METHOD=\"POST\">\n";
    print "<INPUT TYPE=\"TEXT\" SIZE=15 NAME=\"password\"> Password<P>\n";
    print "Reference key is used as a reference.  The topic data \n";
    print "file name will be the same as the reference key.<P>\n";
    print "<INPUT TYPE=\"TEXT\" SIZE=15 NAME=\"key\"> Reference Key<BR>\n";
    print "<INPUT TYPE=\"TEXT\" SIZE=40 NAME=\"question\"> Question<P>\n";
    print "Days until expiration is the amount of days until the topic expires.\n";
    print "When a topic expires users can no longer vote in that topic, but they may\n";
    print "still view the results.  If you do not wish to have an expiration date enter\n";
    print "never instead of a number.<P>\n";
    print "<INPUT TYPE=\"TEXT\" SIZE=10 NAME=\"exp\">Days until Expiration.<P>\n";
    print "The answer boxes are the answers the users can choose.  Example: If the question you asked was a yes, no question
you would write Yes in answer box 1 and No in answer box 2.\n";
    print "Please leave the field blank if you do not wish to use all 8.<P>\n";
    print "<INPUT TYPE=\"TEXT\" SIZE=15 NAME=\"a1\"> Answer 1<BR>\n";
    print "<INPUT TYPE=\"TEXT\" SIZE=15 NAME=\"a2\"> Answer 2<BR>\n";
    print "<INPUT TYPE=\"TEXT\" SIZE=15 NAME=\"a3\"> Answer 3<BR>\n";
    print "<INPUT TYPE=\"TEXT\" SIZE=15 NAME=\"a4\"> Answer 4<BR>\n";
    print "<INPUT TYPE=\"TEXT\" SIZE=15 NAME=\"a5\"> Answer 5<BR>\n";
    print "<INPUT TYPE=\"TEXT\" SIZE=15 NAME=\"a6\"> Answer 6<BR>\n";
    print "<INPUT TYPE=\"TEXT\" SIZE=15 NAME=\"a7\"> Answer 7<BR>\n";
    print "<INPUT TYPE=\"TEXT\" SIZE=15 NAME=\"a8\"> Answer 8<P>\n";
    print "<CENTER><INPUT TYPE=\"SUBMIT\" VALUE=\"Add Topic\">\n";
    print "<INPUT TYPE=\"RESET\" VALUE=\"Clear\"></CENTER>\n";
    print "</FONT></TR></TD></FORM></TABLE>\n";
    print "</CENTER></BODY></HTML>\n";
}

elsif($QUERY{'action'} eq "delete") {

    &error("Are you sure you want to delete the topic $QUERY{'topic'}?<P>
    <FONT SIZE=2 FACE=\"ARIAL\">
    <FORM ACTION=\"$admin_url?action=unlink\&topic=$QUERY{'topic'}\" METHOD=\"POST\">
    <INPUT SIZE=15 NAME=\"password\"> Please enter your password<P>
    <INPUT TYPE=\"SUBMIT\" VALUE=\"Yes I want to delete it\"></FORM></FONT>");

}

elsif($QUERY{'action'} eq "unlink") {

    &parse_form;
    if(!($FORM{'password'} eq "$password")) {
        &error("You entered an incorrect password.  Please check your password and try again!");
    }

    $dat_file = "$base_dir/$QUERY{'topic'}\.$file_ext";
    if(! -e $dat_file) {
        $dat_file = "$dat_file\.old";
        if(! -e $dat_file) {
            &error("Data file for the topic, $QUERY{'topic'}, was not found.");
        }
    }

    $ip = "$base_dir/$QUERY{'topic'}\.ip";
    unlink("$dat_file");
    unlink("$ip");
    &error("The topic, $QUERY{'topic'}, has been successfully removed.");

}


elsif($QUERY{'action'} eq "add") {

    &parse_form;

    &error("Form Incomplete") unless $FORM{'password'};
    &error("Form Incomplete") unless $FORM{'question'};
    &error("Form Incomplete") unless $FORM{'key'};
    &error("Form Incomplete") unless $FORM{'exp'};

    if($FORM{'exp'} !~ /([0-9])*/ && $FORM{'exp'} !~ /never/i) {
        &error("Please enter the amount of days until the topic expires.  If you do not want it to expire enter \"never\" as
the expiration date.\n");
    }

    if($FORM{'key'} =~ /\W/) {
        &error("You may only enter normal characters \(a-zA-z0-9\) in the reference key field");
    }

    if(!($password eq "$FORM{'password'}")) {
        &error("You have entered an incorrect password.  Please check your password and try again.");
    }

    $flag = 0;

    for($i=1;$i<=8;$i++) {
        $key = "a$i";
        if($FORM{$key}) {
            if(! $flag) {
                $string = "$FORM{$key}=0";
                $flag = 1;
            }
            else {
                $string = "$string&$FORM{$key}=0";
            }
            $incomplete = 0;
        }
    }

    if($incomplete) {
        &error("Form Incomplete!");
    }

    if($FORM{'exp'} !~ /never/i) {
        $FORM{'exp'} += &get_days;
    }
    $string = "$string&question=$FORM{'question'}&exp=$FORM{'exp'}";

    open(FILE, ">$base_dir/$FORM{'key'}\.$file_ext") || die "Can't open $base_dir/$FORM{'key'}\.$file_ext\n";
    print FILE "$string\n";
    close(FILE);

    open(FILE, ">$base_dir/$FORM{'key'}\.ip") || die "Can't open $base_dir/$FORM{'key'}\.ip\n";
    print FILE "[IP TRACKING FILE]\n";
    close(FILE);

    &error("The new topic has been added!");

}


else {
    &error("The function you entered in the query string was not found!");
}
