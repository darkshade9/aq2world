

<html>
<head>


<meta name="description" content="Clan Pucker Factor's Web Site">
<meta name="keywords" content="Pucker factor, quake, quake2, action quake">


<title>Clan Pucker Factor - Member Login</title>
</head>



<body bgcolor="#0F0F3C" text="#FFFFFF" background="images/table_background.gif" link="#FFFF00" vlink="#00A5A5" alink="#00FFFF">

<font face="arial">




<table width="600" border="0">
	<tr>
		<td width="160" valign="top">
			<script language="Javascript">

<!--


var browser = navigator.appName.substring(0,8);
var version = parseInt(navigator.appVersion); 
var javasupport = ((browser == "Netscape") && (version >= 3)) ||
                  ((browser == "Microsof") && (version >= 4));

if (javasupport) {
   
	var jump = 12
	if (version == 3) jump = 65

	if (version == 3)  var size = 1;
	if (version == 4)  var size = 2;

    var hiLite = new makeArray(10);
    var normal = new makeArray(10);
    
    hiLite[1].src = "images/buttons/home_animated.gif"
    hiLite[2].src = "images/buttons/news_animated.gif"
    hiLite[3].src = "images/buttons/members_animated.gif"
    hiLite[4].src = "images/buttons/files_animated.gif"
    hiLite[5].src = "images/buttons/screenshots_animated.gif"
    hiLite[6].src = "images/buttons/matches_animated.gif"
    hiLite[7].src = "images/buttons/hitlist_animated.gif"
    hiLite[8].src = "images/buttons/contact_animated.gif"
    hiLite[9].src = "images/buttons/login_animated.gif"
    hiLite[10].src = "images/buttons/admin_animated.gif"
    
    normal[1].src = "images/buttons/home.gif"
    normal[2].src = "images/buttons/news.gif"
    normal[3].src = "images/buttons/members.gif"
    normal[4].src = "images/buttons/files.gif"
    normal[5].src = "images/buttons/screenshots.gif"
    normal[6].src = "images/buttons/matches.gif"
    normal[7].src = "images/buttons/hitlist.gif"
    normal[8].src = "images/buttons/contact.gif"
    normal[9].src = "images/buttons/login.gif"
    normal[10].src = "images/buttons/admin.gif"
}

    function makeArray(n)
    {
	if (javasupport) {
            this.length = n
            for (var i = 1; i<=n; i++) {
               this[i] = new Image()
            }
            return this
		}
    }

function hiliteImg(num) 
{
	if (javasupport) {
		document.images[num].src = hiLite[num].src;
	}
}

function normalImg(num) 
{
	if (javasupport) {
		document.images[num].src = normal[num].src;
	}

}
//-->

</SCRIPT>

<img  src="images/small_cpf.gif" height="40" width="127" border="0">

<hr width="130" align="left">
<p>

<a href="default.asp"><img src="images/buttons/home.gif" onMouseOver="hiliteImg (1)" onMouseOut="normalImg (1)" border="0" width="67" height="25" alt="[Home]"></a>
<p>

<a href="news.asp"><img src="images/buttons/news.gif" onMouseOver="hiliteImg (2)" onMouseOut="normalImg (2)" border="0" width="67" height="27" alt="[News]"></a>
<p>

<a href="members.asp"><img src="images/buttons/members.gif" onMouseOver="hiliteImg (3)" onMouseOut="normalImg (3)" border="0" width="103" height="26" alt="[Members]"></a>
<p>

<a href="files.asp"><img src="images/buttons/files.gif" onMouseOver="hiliteImg (4)" onMouseOut="normalImg (4)" border="0" width="62" height="25" alt="[Files]"></a>
<p>

<a href="screenshots.asp"><img src="images/buttons/screenshots.gif" onMouseOver="hiliteImg (5)" onMouseOut="normalImg (5)" border="0" width="90" height="54" alt="[Screen Shots]"></a>
<p>

<a href="matches.asp"><img src="images/buttons/matches.gif" onMouseOver="hiliteImg (6)" onMouseOut="normalImg (6)" border="0" width="105" height="26" alt="[Matches]"></a>
<p>

<a href="hitlist.asp"><img src="images/buttons/hitlist.gif" onMouseOver="hiliteImg (7)" onMouseOut="normalImg (7)" border="0" width="93" height="25" alt="[Hitlist]"></a>
<p>

<a href="contact.asp"><img src="images/buttons/contact.gif" onMouseOver="hiliteImg (8)" onMouseOut="normalImg (8)" border="0" width="111" height="26" alt="[Contact]"></a>
<p>

<a href="login.asp"><img src="images/buttons/login.gif" onMouseOver="hiliteImg (9)" onMouseOut="normalImg (9)" border="0" width="72" height="26" alt="[Login]"></a>
<p>



<hr width="130" align="left">

<a href="http://action.telefragged.com"><img src="images/actnbut.gif" border="0" width="88" height="31"></a><p>
<a href="http://www.mapdepot.net"><img src="images/aqmd_gif1.gif" border="0" width="90" height="30"></a>









		</td>



	<td valign="top" width="440">
			<center>
			<font face="arial" size="3">
				<!--
				<font size="6">
				<b><i>Welcome to</i></b><br>
				</font> -->
			<img src="images/titles/member_login.gif" border="0" width="397" height="61" alt="[Login]"><br>
			</center>
			<hr>
			<p>

			

			If you are a member of our clan, you may log in with your handle and password to change your user
			information.  If you're not a member and would like to join, please contact *CPF* Weasel at <a href="mailto:weasel@ecis.com">weasel@ecis.com</a>.
			<br>


	
			
			<form name="login" method="post" action="xt_login.asp">
			<table>
				<tr>
					<td valign="top" align="right"><font face="arial" size="3">Handle:</font></td>
					<td valign="top" align="left"><input type="text" name="handle" size="20" maxlength="30"></td>
				</tr>
				<tr>
					<td valign="top" align="right"><font face="arial" size="3">Password:</font></td>
					<td valign="top" align="left"><input type="password" name="password" size="20" maxlength="20"></td>
				</tr>
				<tr>
					<td></td>
					<td valign="top" align="left"><input type="submit" value="  Login  "></td>
				</tr>
			</table>

			</form>

			</font>
			</center>

		</td>


	</tr>
</table>



</body>

</html>


