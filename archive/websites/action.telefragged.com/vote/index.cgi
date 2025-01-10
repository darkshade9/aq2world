#! /usr/bin/perl


require 'load.cgi';
&check_exp;
&parse_query;


#=============================================
#   M A I N   P R O G R A M

if($QUERY{'action'} eq "") {

    print "Content-Type: text/html\n\n";
    print "<HTML>\n";
    print "<TITLE>$title</TITLE>\n";
    print "<BODY BGCOLOR=\"$bgcolor\" BACKGROUND=\"$background\" TEXT=\"$text_color\" LINK=\"$link_color\"
ALINK=\"$link_color\" VLINK=\"$vlink_color\">\n";
    print "<CENTER>\n";
    if($heading =~ /.*\.(gif|jpg)/i) {
        print "<IMG SRC=\"$heading\" BORDER=0 ALT=\"$title\"><br><br>\n";
    }
    else {
        print "<H1>$heading</H1>\n";
    }
    print "<BR><BR>\n";
    print "<TABLE BORDER=$table_border CELLSPACING=$cellspacing CELLPADDING=$cellpadding
BGCOLOR=\"$table_color\">\n";
    print "<TR><TD><B><FONT SIZE=2 FACE=\"verdana\">List of current topics:</B> (Click on a topic to view the
results and to vote)</FONT></TR></TD>\n";

    opendir(VOTE, "$base_dir") || die "Can't open directory $base_dir\n";
    while($file = readdir(VOTE)) {
        if($file =~ /.*\.$file_ext/ && $file !~ /\.old/) {
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
                    push(@ANSWERS, "$name");
                    $VOTE{$name} = $value;
                }
            }

            if(!($exp =~ /never/i)) {
                $exp -= &get_days;
                $exp = "$exp days";
            }

            print "<TR><TD><FONT SIZE=2 FACE=\"verdana\"><A
HREF=\"$script_url?action=results&topic=$topic\">$question</A> &nbsp\;&nbsp\;-&nbsp\;&nbsp\; Expires:
$exp</FONT></TR></TD>\n";
        }

    }

    closedir(VOTE);
    print "<TR><TD></TR></TD>\n";
    print "<TR><TD><B><FONT SIZE=2 FACE=\"verdana\">Previous Topics:</B> (Click on a topic to view the
results)</FONT></TR></TD>\n";

    opendir(VOTE, "$base_dir") || die "Can't open $base_dir\n";
    while($file = readdir(VOTE)) {

        if($file =~ /.*\.$file_ext\.old/) {
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
                    push(@ANSWERS, "$name");
                    $VOTE{$name} = $value;
                }
            }
            print "<TR><TD><FONT SIZE=2 FACE=\"verdana\"><A
HREF=\"$script_url?action=results&topic=$topic\">$question</A></FONT></TR></TD>\n";
        }
    }
    closedir(VOTE);


    print "</TABLE>\n";

}

elsif($QUERY{'action'} eq "vote") {

    &parse_form;
    $topic = "$FORM{'topic'}";
    &error("Form Incomplete") unless $FORM{'vote'};
    &check('0');
    if($voted) {
        &error("You may only vote once!  You have already voted on this topic before.  If you feel this is a
mistake please contact the webmaster of the web site.");
    }
    $database = "$base_dir/$topic\.$file_ext";

    open(FILE, "$database") || die "Can't open $data\n";
    $data =<FILE>;
    close(FILE);

    $data =~ s/\n//g;

    @pairs = split(/&/, $data);
    foreach $pair (@pairs) {
        ($name, $value) = split(/=/, $pair);
        push(@ANSWERS, "$name");
        $VOTE{$name} = $value;
    }

    $casted_vote = $FORM{'vote'};

    if((! $VOTE{$casted_vote}) && ($VOTE{$casted_vote} ne '0')) {
        &error("Vote field not found!");
    }

    $VOTE{$casted_vote}++;

    $flag = 0;

    foreach $vote (@ANSWERS) {
        if(! $flag) {
            $string = "$vote=$VOTE{$vote}";
            $flag = 1;
        }

        else {
            $string = "$string&$vote=$VOTE{$vote}";
        }
    }

    $string =~ s/\n//g;
    open(FILE, ">$database") || die "Can't open $database\n";
    print FILE "$string\n";
    close(FILE);
    &header("Your vote has been submited!  The vote <A
HREF=\"$script_url?action=results\&topic=$topic\">results</A> have already been updated.");

}

elsif($QUERY{'action'} eq "results") {

    $topic = $QUERY{'topic'};
    &check('1');
    $database = "$base_dir/$QUERY{'topic'}.$file_ext";

    if(! -e $database) {
        $database = "$database.old";
        $voted = 5;
        if(! -e $database) {
            &error("Topic Not Found");
        }
    }

    open(FILE, "$database") || die "Can't open $database\n";
    $data =<FILE>;
    close(FILE);

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
            push(@ANSWERS,"$name");
            $VOTE{$name} = $value;
        }
    }

    foreach $a (@ANSWERS) {
        $total += $VOTE{$a};
    }

    print "Content-Type: text/html\n\n";
    print "<TITLE>$title</TITLE>\n";
    print "<BODY BGCOLOR=\"$bgcolor\" BACKGROUND=\"$background\" TEXT=\"$text_color\" LINK=\"$link_color\"
ALINK=\"$link_color\" VLINK=\"$vlink_color\">\n";
    print "<CENTER>\n";
    if($heading =~ /.*\.(gif|jpg)/i) {
        print "<IMG SRC=\"$heading\" BORDER=0 ALT=\"$title\">\n";
    }
    else {
        print "<H1>$heading</H1>\n";
    }
    print "<TABLE BGCOLOR=\"$table_color\" BORDER=$table_border CELLSPACING=$cellspacing
CELLPADDING=$cellpadding>\n";
    if(!$voted) {
        print "<FORM ACTION=\"$script_url?action=vote\" METHOD=\"POST\">\n";
        print "<INPUT TYPE=\"HIDDEN\" NAME=\"topic\" VALUE=\"$QUERY{'topic'}\">\n";
    }

    print "<TR><TD COLSPAN=2><B><CENTER><FONT SIZE=2 FACE=\"verdana\"><A HREF=\"$site_url\">Back to
$sitename</A>\&nbsp\;\&nbsp\; | \&nbsp\;\&nbsp\;</FONT>\n";
    print "<FONT SIZE=2 FACE=\"verdana\"><A HREF=\"$script_url\">Back to topic
listing</A></FONT></B></CENTER></TR>\n";
    print "<TR><TD COLSPAN=2><B><FONT SIZE=3 FACE=\"verdana\">$question &nbsp\;\[$total votes
total\]</FONT></B></TR></TD>\n";
    foreach $key (@ANSWERS) {
        if($total eq '0') {
            $percent = 0;
        }
        else {
            $percent = int($VOTE{$key} / $total * 100);
        }
        $width = $percent * $length;
        print "<TR><TD><B>\n";
        if(! $voted) {
            print "<INPUT TYPE=\"RADIO\" NAME=\"vote\" VALUE=\"$key\">\n";
        }
        print " $key</B></TD>\n";
        print "<TD ALIGN=\"left\"><IMG SRC=\"$image_file\" BORDER=0 WIDTH=$width HEIGHT=$height> <FONT
SIZE=2 FACE=\"verdana\">$VOTE{$key}\($percent\%\)</FONT></TR></TD>\n";
    }
    print "<TR><TD><B>Status:</B></TD><TD>\n";
    if(! $voted) {
        print "<B><FONT FACE=\"verdana\" SIZE=2>You have not voted for this topic. </B></FONT><INPUT
TYPE=\"SUBMIT\" VALUE=\"Submit Vote\"></CENTER>\n";
    }
    elsif($voted eq '5') {
        print "<B><FONT FACE=\"verdana\" SIZE=2>This topic has already expired</B></FONT>\n";
    }
    else {
        print "<B><FONT FACE=\"verdana\" SIZE=2>You have already voted for this topic.</FONT></B>\n";
    }
    print "</TR></TD></FORM></TABLE>\n";
}


else {
    &error("The specified command entered into the query string was not found.
    This may be caused by a script misconifguration or a bug in the CGI script.
    This may also be caused because by the user.");
}



#===========================================
#  S U B   R O U T I N E S

sub check {

    local($flag) = @_;
    if($check >= 1 && $check ne '2') {
        $hostname = $ENV{'REMOTE_HOST'};
        if ($ENV{'REMOTE_HOST'} && ($ENV{'REMOTE_HOST'} !~ /^[0-9]+\.[0-9]+\.[0-9]+\.[0-9]+$/)) {
            $hostname = $ENV{'REMOTE_HOST'};
        }
        else {
            &address_to_name ($ENV{'REMOTE_ADDR'});
        }

        $ip_file = "$base_dir/$topic\.ip";
        open(FILE, "$ip_file") || die "Can't open $ip_file\n";
        @lines =<FILE>;
        close(FILE);

        $vote = 0;
        foreach $line (@lines) {
            $line =~ s/\n//g;
            if($line =~ /$hostname/i) {
                $voted = 1;
            }
        }

        if((! $voted) && (! $flag)) {
            open(FILE, ">>$ip_file") || die "Can't open $ip_file\n";
            print FILE "$hostname\n";
            close(FILE);
        }
    }
}


sub address_to_name {
    local ($address) = shift(@_);
    local (@octets);
    local ($name, $aliases, $type, $len, $addr);
    local ($ip_number);
    @octets = split ('\.', $address);
    $ip_number = pack ("CCCC", @octets[0..3]);
    ($name, $aliases, $type, $len, $addr) = gethostbyaddr ($ip_number, 2);
    if ($name) {
        $hostname = $name;
    }
    else {
        $hostname = $ENV{'REMOTE_ADDR'};
    }
}


#  E N D   O F   S U B   R O U T I N E S
#===========================================



