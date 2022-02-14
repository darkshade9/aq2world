

#========================================
#   V A R I A B L E S   T O   E D I T

    #- Script Configurations

        #- The directory where all the data files will be stored
        #- This directory must be chmoded to read/write(644).
    $base_dir = "/home/ateam/htdocs/vote/data";

        #- The file extension of the data files.
    $file_ext = "vote";

        #- URL to the image file for the bar graphs
    $image_file = "http://action.telefragged.com/vote/images/sdot.gif";

        #- URL to vote.cgi
    $script_url = "http://action.telefragged.com/vote/index.cgi";

        #- URL to admin.cgi
    $admin_url = "http://action.telefragged.com/vote/cool.cgi";

        #- Length of the bar graphs. Just leave it at four unless
        #- you really want to make the graphs longer or shorter.
    $length = "4";

        #- Height of the bar graph image file. If you are using
        #- the graphic that came with the scripts leave it at 10.
    $height = "10";

        #- Set this to 1 if you wish to IP track, 0 if you don't
        #- want to.
    $check = 1;

        #- Password of the adminstration script.
    $password = "ateam";

        #- The website's name that is using this script
    $sitename = "Action Quake 2";

        #- URL to your web site that is using this script
    $site_url = "http://action.telefragged.com/";


    #- HTML Preferences

        #- The Title of the voting center pages
    $title = "Action Quake 2 Voting Center";

        #- The text or image that will be at the top of every voting
        #- center page.  Enter a URL to an image to display an image
        #- instead of some text.
    $heading = "http://action.telefragged.com/mainlogo.jpg";

        #- HTML Color preferences.
    $background = "";
    $bgcolor = "000000";
    $text_color = "FFFFFF";
    $link_color = "808080";
    $vlink_color = "808080";

        #- Table preferences
    $table_color = "BF0000";
    $table_border = 0;
    $cellpadding = 4;
    $cellspacing = 2;


#  S T O P   E D I T I N G   H E R E
#=======================================



sub parse_form {

    read(STDIN, $buffer, $ENV{'CONTENT_LENGTH'});

    @pairs = split(/&/, $buffer);
    foreach $pair (@pairs) {
        ($name, $value) = split(/=/, $pair);

        $value =~ tr/+/ /;
        $value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
        $name =~ tr/+/ /;
        $name =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
        $value =~ s/<!--(.|\n)*-->//g;
        $value =~ s/<([^>]|\n)*>//g;
        $FORM{$name} = $value;
    }

}

sub parse_query {
    @pairs = split(/&/, $ENV{'QUERY_STRING'});
    foreach $pair (@pairs) {
        ($name, $value) = split(/=/, $pair);
        $QUERY{$name} = $value;
    }
}

sub error {
    local($msg) = @_;
    print "Content-Type: text/html\n\n";
    print "<HTML>\n";
    print "<TITLE>$title</TITLE>\n";
    print "<BODY BGCOLOR=\"$bgcolor\" BACKGROUND=\"$background\" TEXT=\"$text_color\" LINK=\"$link_color\"
ALINK=\"$link_color\" VLINK=\"$vlink_color\">\n";
    if($heading =~ /.*\.(gif|jpg)/i) {
        print "<CENTER><IMG SRC=\"$heading\" BORDER=0 ALT=\"$title\"></CENTER>\n";
    }
    else {
        print "<CENTER><H1>$heading</H1></CENTER>\n";
    }
    print "<UL>$msg</UL>\n";
    die;
}

sub header {
    local($msg) = @_;
    print "Content-Type: text/html\n\n";
    print "<HTML>\n";
    print "<TITLE>$title</TITLE>\n";
    print "<BODY BGCOLOR=\"$bgcolor\" BACKGROUND=\"$background\" TEXT=\"$text_color\" LINK=\"$link_color\"
ALINK=\"$link_color\" VLINK=\"$vlink_color\">\n";
    if($heading =~ /.*\.(gif|jpg)/i) {
        print "<CENTER><IMG SRC=\"$heading\" BORDER=0 ALT=\"$title\"></CENTER>\n";
    }
    else {
        print "<CENTER><H1>$heading</H1></CENTER>\n";
    }
    print "<UL>$msg</UL>\n";
}


sub get_days {

    ($second,$minute,$hour,$day,$month,$year,$wday,$yday,$isdst) = localtime(time);
    $days = ($year * 12 + $month) * 30 + $day;

    return $days;

}

sub check_exp {

    opendir(VOTE, "$base_dir") || die "Can't open $base_dir\n";
    while($file = readdir(VOTE)) {
        if(($file =~ /.*\.$file_ext/) && ($file !~ /\.old/)) {
            @FIELDS = ("");
            $database = "$base_dir/$file";
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
                    push(@FIELDS, "$name");
                    $VOTE{$name} = $value;
                }
            }

            if($exp !~ /never/i) {
                $exp -= &get_days;
            }
            if(($exp <= 0) && ($exp !~ /never/i)) {
                rename("$database", "$database\.old");

                $database = "$database\.old";
                $exp = "Expired";
                $flag = 0;
                foreach $vote (@FIELDS) {
                    if(! $flag && $vote ne "") {
                        $string = "$vote=$VOTE{$vote}";
                        $flag = 1;
                    }

                    elsif($flag && $vote ne "") {
                        $string = "$string&$vote=$VOTE{$vote}";
                    }
                }
                open(FILE, ">$database") || die "Can't open $database\n";
                print FILE "$string&exp=$exp&question=$question\n";
                close(FILE);
            }
        }
    }
    closedir(VOTE);
}

1;
