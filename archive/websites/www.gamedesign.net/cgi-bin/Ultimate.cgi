
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Rust Editing Discussion Board</title>
<LINK rel="Start" title="Main r u s t Page" type="text/html" href="http://www.gamedesign.net">
<LINK REV=made href="mailto:fishman@gamedesign.net">
<META NAME="keywords" CONTENT="quake2, unreal, tutorials, game design, level design, maps, bsp, quake editing, unreal editing, game editing, unreal tutorials, quake2 tutorials, design tutorials, interviews, discussion, id interviews, level making, quake, quake2, unreal, sin, sin editing, halflife, halflife editing, level making, map making, quake 2, quake 2 level making, game editing, quake2 editing, computer game editing, duke3d, level editing, map making, quake editing, quake2 editing, half-life editing, halflife editing, halflife, half-life, sin, sin editing, id, quake3, quake2, unreal, tutorials, game design, level design, maps, bsp, quake editing, unreal editing, game editing, unreal tutorials, quake2 tutorials, design tutorials, interviews, discussion, id interviews, level making, quake, quake2, unreal, sin, sin editing, halflife, halflife editing, level making, map making, quake 2, quake 2 level making, game editing, quake2 editing, computer game editing, duke3d, level editing, map making, quake editing, quake2 editing, half-life editing, halflife editing, halflife, half-life, sin, sin editing, id, quake3, quake3 arena">
<META NAME="description" CONTENT="game editing and design. Specifically quake2, unreal, half-life, sin. tutorials, interviews, discussion forums. 100's of quake, quake2, unreal tutorials, covering all aspects of quake, quake2, unreal, half-life, and sin editing. As well as other 3d games. quake quake2 sin halflife half-life unreal">
<META NAME="ROBOTS" CONTENT="ALL">
<META NAME="DC.Creator" CONTENT="Shane Sherman(fishman)">
<META NAME="DC.Subject" CONTENT="game editing and design">
<META NAME="DC.Description" CONTENT="game editing and design. Specifically quake2, unreal, half-life, sin. tutorials, interviews, discussion">

<link rel=stylesheet href="http://www.gamedesign.net/stylesheets/main.css">

<SCRIPT LANGUAGE="JavaScript">
<!-- HIDE
var noNewLogin = "false";
var dc = document.cookie;
var sessionLogin = escape("");
var sessionLoginDT = escape("");

if (document.cookie) {
var DaysPrune = getCookie("DaysPrune");
	if (DaysPrune == null) {
		var DaysPrune = "5";
	}
} else {
var DaysPrune = "5";
}

expireDate = new Date;

if (expireDate.getYear() < 100) {
	expireDate.setYear (expireDate.getYear() + 1900 + 1);
} else {
        expireDate.setYear(expireDate.getYear()+1);
}

if (noNewLogin != "true") {

var CookieLogin = escape("2451297.1927");
var CookieLoginDT = escape("04-28-99 07:27 PM");

	  document.cookie = "lastLogin=" + CookieLogin + ";expires=" + expireDate.toGMTString() + ";";
  document.cookie = "LastLoginDT=" + CookieLoginDT + ";expires=" + expireDate.toGMTString() + ";";
	  document.cookie = "sessionLogin=" + sessionLogin + ";";
document.cookie = "sessionLoginDT=" + sessionLoginDT + ";";
}

function getCookie(name){
var cname = name + "=";               
var dc = document.cookie;
if (dc.length > 0) {              
    begin = dc.indexOf(cname);
	 if (begin != -1) {           
        begin += cname.length;
		end = dc.indexOf(";", begin);
            if (end == -1) end = dc.length;
            return unescape(dc.substring(begin, end));        }
}
return null;
}
// STOP HIDING FROM OTHER BROWSERS -->
</SCRIPT>

</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0" valign="TOP">
<tr>
	<td colspan="2" valign="TOP" width="85%"><a href="http://www.faustgfx.com"><img src="http://www.gamedesign.net/images/newlogo.GIF" width=400 height=101 border=0 alt="rust - logo by faust|GFX! (www.faustgfx.com)"></a>

<h2>Rust Quake 2 Editing Discussion</h2>
<div class="text">


<Script Language = "JavaScript">
function rand(n)
{
seed = (0x015a4e35 * seed)/1000000;
return(seed);
}
var now = new Date()
var seed = now.getTime()

var random_num = (rand(123));
document.write("<A HREF='http://www.telefragged.com/banner/redirect.cgi?http://www.ugo.net/RealMedia/ads/click_nx.cgi/www.telefragged.com/action/" + random_num +  "/@Top' border='0'>");
document.write("<IMG SRC='http://www.ugo.net/RealMedia/ads/adstream_nx.cgi/www.telefragged.com/action/" + random_num + "/@Top' BORDER='0' WIDTH='468' HEIGHT='60' alt='I drive a Festiva. Click here.'></A><br>");
</Script>

<center>
<table border=0 width=95% valign="top">
<tr>
<TD>
<div class="text">
<A HREF="http://www.gamedesign.net/cgi-bin/ubbmisc.cgi?action=editbio&Browser=&DaysPrune=5&LastLogin=">profile</A> | <A HREF="http://www.gamedesign.net/cgi-bin/Ultimate.cgi?action=agree">register</A> | <A HREF="http://www.gamedesign.net/cgi-bin/ubbmisc.cgi?action=setprefs">prefs</A> | <A HREF="http://www.gamedesign.net/discussions/faq.html" target=_top>faq</A> | <A HREF="http://www.gamedesign.net/cgi-bin/search.cgi?action=intro">search</A>
</div>
</td></TR>
</table>

<table border=0 width=95%>
<TR>
<td colspan=3 valign=bottom align=left><div class="text"></div></td>
<td colspan=2 valign=bottom align=right><div class="text"></div></td>
</tr>

<tr bgcolor="#000080">
<TD>&nbsp;</TD>
<td valign=bottom><font face="Arial Black" size="-1" color="#FFFFFF">Forum</FONT></td>
<td NOWRAP valign=bottom align=center><font face="Arial Black" size="-1" color="#FFFFFF">Topics</FONT></td>
<td NOWRAP valign=bottom align=center><font face="Arial Black" size="-1" color="#FFFFFF">Posts</FONT></td>
<td NOWRAP valign=bottom align=center><font face="Arial Black" size="-1" color="#FFFFFF">Last Post</FONT></td>
<td valign=bottom><font face="Arial Black" size="-1" color="#FFFFFF">Moderator</FONT></td>
</tr>
<TR><TD valign=top></td>
<TD bgcolor="#FFFFFF" valign=top><div class="text"><B><A HREF="http://www.gamedesign.net/cgi-bin/forumdisplay.cgi?action=topics&forum=Quake+2+Editing&number=1&DaysPrune=5&LastLogin=">Quake 2 Editing</A></B><BR>
Discussion of Quake 2 Editing</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">390</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">2299</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">03-10-99  06:47 AM</div></td>
<td bgcolor="#FFFFFF" valign=top><div class="text">weasl</div></td></tr>
<TR><TD valign=top></td>
<TD bgcolor="#FFFFFF" valign=top><div class="text"><B><A HREF="http://www.gamedesign.net/cgi-bin/forumdisplay.cgi?action=topics&forum=Half-Life+Editing&number=2&DaysPrune=5&LastLogin=">Half-Life Editing</A></B><BR>
Discussion of Half-Life Editing</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">666</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">2086</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">03-10-99  06:38 AM</div></td>
<td bgcolor="#FFFFFF" valign=top><div class="text">autolycus</div></td></tr>
<TR><TD valign=top></td>
<TD bgcolor="#FFFFFF" valign=top><div class="text"><B><A HREF="http://www.gamedesign.net/cgi-bin/forumdisplay.cgi?action=topics&forum=Heretic+2+Editing&number=3&DaysPrune=5&LastLogin=">Heretic 2 Editing</A></B><BR>
Discussion of Heretic2 Editing</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">5</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">9</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">02-11-99  11:05 AM</div></td>
<td bgcolor="#FFFFFF" valign=top><div class="text">weasl</div></td></tr>
<TR><TD valign=top></td>
<TD bgcolor="#FFFFFF" valign=top><div class="text"><B><A HREF="http://www.gamedesign.net/cgi-bin/forumdisplay.cgi?action=topics&forum=Sin+Editing&number=4&DaysPrune=5&LastLogin=">Sin Editing</A></B><BR>
Discussion of Sin Editing</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">46</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">215</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">03-10-99  01:59 AM</div></td>
<td bgcolor="#FFFFFF" valign=top><div class="text">weasl</div></td></tr>
<TR><TD valign=top></td>
<TD bgcolor="#FFFFFF" valign=top><div class="text"><B><A HREF="http://www.gamedesign.net/cgi-bin/forumdisplay.cgi?action=topics&forum=Unreal+Editing&number=5&DaysPrune=5&LastLogin=">Unreal Editing</A></B><BR>
Discussion of Unreal Editing</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">49</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">173</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">03-10-99  12:47 AM</div></td>
<td bgcolor="#FFFFFF" valign=top><div class="text">weasl</div></td></tr>
<TR><TD valign=top></td>
<TD bgcolor="#FFFFFF" valign=top><div class="text"><B><A HREF="http://www.gamedesign.net/cgi-bin/forumdisplay.cgi?action=topics&forum=Quake3:Arena+Editing&number=6&DaysPrune=5&LastLogin=">Quake3:Arena Editing</A></B><BR>
Discussion of Quake3:Arena Editing</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">23</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">239</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">03-10-99  07:27 AM</div></td>
<td bgcolor="#FFFFFF" valign=top><div class="text">weasl</div></td></tr>
<TR><TD valign=top></td>
<TD bgcolor="#FFFFFF" valign=top><div class="text"><B><A HREF="http://www.gamedesign.net/cgi-bin/forumdisplay.cgi?action=topics&forum=Misc.&number=7&DaysPrune=5&LastLogin=">Misc.</A></B><BR>
Discussion of other games without a full forum devoted to them, and other Misc Stuff.</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">29</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">240</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">03-09-99  08:19 PM</div></td>
<td bgcolor="#FFFFFF" valign=top><div class="text">weasl</div></td></tr>
<TR><TD valign=top></td>
<TD bgcolor="#FFFFFF" valign=top><div class="text"><B><A HREF="http://www.gamedesign.net/cgi-bin/forumdisplay.cgi?action=topics&forum=Help+Wanted/Help+Offered&number=8&DaysPrune=5&LastLogin=">Help Wanted/Help Offered</A></B><BR>
Help Wanted/Help Offered for TCs/PCs/ETC</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">10</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">19</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">03-08-99  12:03 PM</div></td>
<td bgcolor="#FFFFFF" valign=top><div class="text">weasl</div></td></tr>
<TR><TD valign=top></td>
<TD bgcolor="#FFFFFF" valign=top><div class="text"><B><A HREF="http://www.gamedesign.net/cgi-bin/forumdisplay.cgi?action=topics&forum=Quake+1+Editing&number=9&DaysPrune=5&LastLogin=">Quake 1 Editing</A></B><BR>
Discussion of Old School Quake1 Editing.</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">9</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">20</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">03-08-99  09:38 PM</div></td>
<td bgcolor="#FFFFFF" valign=top><div class="text">weasl</div></td></tr>
<TR><TD valign=top></td>
<TD bgcolor="#FFFFFF" valign=top><div class="text"><B><A HREF="http://www.gamedesign.net/cgi-bin/forumdisplay.cgi?action=topics&forum=Kingpin+Editing&number=10&DaysPrune=5&LastLogin=">Kingpin Editing</A></B><BR>
Discuss all aspects of editing Xatrix's Kingpin.</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">4</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">6</div></td>
<td align="CENTER" valign="TOP" nowrap bgcolor="#FFFFFF"><div class="text">02-21-99  10:24 AM</div></td>
<td bgcolor="#FFFFFF" valign=top><div class="text">weasl</div></td></tr>
</table>
</center>
<Br><Br>
<small>All times are CT (US).  All dates are in MM-DD-YY format.</small>
<Br><Br>

<Br><Br>

<br><Br>
<FONT COLOR="#dedfdf" size="1" FACE="Verdana, Arial">
<br><br>
<div align="center">Powered by: 
Ultimate Bulletin Board, Version 5.18<BR>&copy; Madrona Park, Inc., 1998.</div>
<br><br>
</FONT>
</div>
<br><br><br><br>
</td>


	<td width="15%" rowspan="2" align="RIGHT" valign="TOP">
	
	<TABLE width="100%" border="0" cellspacing="0" cellpadding="0" valign="TOP" bgcolor="Silver">
         <TR>
                 <TD bgcolor="navy" colspan="5"><FONT face="arial black" size="-1" color="white"><center>General</center></FONT></TD>
         </TR>
 		<tr><td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 		<td width="1" bgcolor="#dddddd">&nbsp;</td>
 		<td align="RIGHT" bgcolor="#dddddd">
 
 
 <font face="Helvetica, Courier New" size="-2"><b>
 <A href="http://www.gamedesign.net/" target="_top">News</A>  <BR><br>
 <A href="http://www.gamedesign.net/tutorials/" target="_top">General Tutorials</A>  <BR><br>
 <A href="http://www.gamedesign.net/archived_news.shtml" target="_top">Old News</A>  <BR><br>
 <A href="http://forums.gamedesign.net/" target="_top">Editing Forums</A>  <BR><br>
 <A href="http://www.gamedesign.net/cgi-bin/Ultimate.cgi" target="_top">Old Discussions</A>  <BR><br>
 <A href="http://www.gamedesign.net/cgi-bin/ftp.pl" target="_top">File Server</A> <br><br>
 <A href="http://www.gamedesign.net/style.shtml" target="_top">Style Guide</A>  <BR><br>
 <A href="http://www.gamedesign.net/interview.shtml" target="_top">Interviews</A>  <BR><br>
 <A href="http://www.gamedesign.net/links.shtml" target="_top">Links</A>  <BR><br>
 <A href="http://www.gamedesign.net/aboutus.shtml" target="_top">About Us</A>  <BR><br>
 <A href="http://www.gamedesign.net/email.shtml" target="_top">Email Us</A>  <BR><br>
 <A href="http://www.gamedesign.net/hosting.shtml" target="_top">Hosting</A>  <BR><br>
 <A href="http://www.gamedesign.net/oldpoll.shtml" target="_top">Old Polls</A>  <BR><br>
 </td>
 <td width="1" bgcolor="#dddddd">&nbsp;</td>
 <td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 </tr>
 <tr><td colspan="5" bgcolor="navy" height="1" width="100%"><font face="Arial Narrow" size="-3">&nbsp;</font></td></tr>
 
 
  </TABLE>
  <br><Br>
  
   <!-- ##################### Community ---------------------------------------------->
 <TABLE width="100%" border="0" cellspacing="0" cellpadding="0" valign="TOP" bgcolor="#dddddd">
         <TR>
                 <TD bgcolor="navy" colspan="5"><FONT face="arial black" size="-1" color="white"><center>Community</center></FONT></TD>
         </TR>
 		<tr><td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 		<td width="1" bgcolor="#dddddd">&nbsp;</td>
 		<td align="RIGHT" bgcolor="#dddddd">
 <font face="Helvetica, Courier New" size="-2"><b>
 <A href="http://www.gamedesign.net/community_profile.shtml" target="_top">Community Profile</A><BR><br>
 <A href="http://www.gamedesign.net/map_of_month/" target="_top">Map of the Month</A><BR><br>
 </td>
 <td width="1" bgcolor="#dddddd">&nbsp;</td>
 <td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 </tr>
 <tr><td colspan="5" bgcolor="navy" height="1" width="100%"><font face="Arial Narrow" size="-3">&nbsp;</font></td></tr>
  </TABLE>
  <br><Br> 
  <!-- ##################### Community MENU ENDS HERE ---------------------------------------------->
  
     <!-- ##################### hosted sites MENU STARTS HERE ---------------------------------------------->
   <TABLE width="100%" border="0" cellspacing="0" cellpadding="0" valign="TOP" bgcolor="#dddddd">
         <TR>
                 <TD bgcolor="navy" colspan="5"><FONT face="arial black" size="-1" color="white"><center>Hosted Sites</center></FONT></TD>
         </TR>
 		<tr><td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 		<td width="1" bgcolor="#dddddd">&nbsp;</td>
 		<td align="RIGHT" bgcolor="#dddddd">
 <font face="Helvetica, Courier New" size="-2"><b>
         <A href="http://3dmr.gamedesign.net" target="_top">3DMR</A>  <BR><BR>
         <A href="http://buzzsaw.gamedesign.net" target="_top">buzzsaw</A>  <BR><BR>
         <A href="http://halflife.gamedesign.net" target="_top">Half-Life ERC</A>  <BR><BR>
         <A href="http://hlprefabs.gamedesign.net" target="_top">Half-Life Prefabs</A>  <BR><BR>
         <A href="http://qoole.gamedesign.net" target="_top">Pursuit of Perfection</A>  <BR><BR>
         <A href="http://mappack.gamedesign.net" target="_top">Mappack</A>  <BR><BR>
         <A href="http://heretic2.gamedesign.net" target="_top">Mappers Shrine(Heretic 2)</A>  <BR><BR>
         <A href="http://sounds.gamedesign.net" target="_top">The Sound Studio</A>  <BR><BR>
         <A href="http://txtgen.gamedesign.net" target="_top">.txtGen</A>  <BR><BR>
         <A href="http://texturecentral.gamedesign.net" target="_top">Texture Central</A>  <BR><BR>
 	<A href="http://unreal.gamedesign.net" target="_top">Wolf's Unreal</A>  <BR><BR>
 </b></font>
 
 </td>
 <td width="1" bgcolor="#dddddd">&nbsp;</td>
 <td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 </tr>
 <tr><td colspan="5" bgcolor="navy" height="1" width="100%"><font face="Arial Narrow" size="-3">&nbsp;</font></td></tr>
  </TABLE>
  <br><Br> 
  <!-- ##################### hosted sites MENU ENDS HERE ---------------------------------------------->
  
  
 <TABLE width="100%" border="0" cellspacing="0" cellpadding="0" valign="TOP" bgcolor="#dddddd">
         <TR>
                 <TD bgcolor="navy" colspan="5"><FONT face="arial black" size="-1" color="white"><center>Quake2</center></FONT></TD>
         </TR>
 		<tr><td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 		<td width="1" bgcolor="#dddddd">&nbsp;</td>
 		<td align="RIGHT" bgcolor="#dddddd">
 <font face="Helvetica, Courier New" size="-2"><b>
 
 <A href="http://www.gamedesign.net/quake2/quake2tutorials.shtml" target="_top">Tutorials</A><BR><br>
 <A href="http://www.gamedesign.net/quake2/quake2techniques.shtml" target="_top">Techniques</A><BR><br>
 <A href="http://forums.gamedesign.net/forums/wwwthreads.pl?action=list&Board=Q2Editing" target="_top">Editing Forum</A><BR><br>
 <A href="http://www.gamedesign.net/quake2/q2faq.shtml" target="_top">FAQ</A><BR><br>
 </td>
 <td width="1" bgcolor="#dddddd">&nbsp;</td>
 <td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 </tr>
 <tr><td colspan="5" bgcolor="navy" height="1" width="100%"><font face="Arial Narrow" size="-3">&nbsp;</font></td></tr>
 
 
  </TABLE>
  <br><Br> 
 <TABLE width="100%" border="0" cellspacing="0" cellpadding="0" valign="TOP" bgcolor="#dddddd">
         <TR>
                 <TD bgcolor="navy" colspan="5"><FONT face="arial black" size="-1" color="white"><center>Quake 3:Arena</center></FONT></TD>
         </TR>
 		<tr><td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 		<td width="1" bgcolor="#dddddd">&nbsp;</td>
 		<td align="RIGHT" bgcolor="#dddddd">
 <font face="Helvetica, Courier New" size="-2"><b>
 <A href="http://forums.gamedesign.net/forums/wwwthreads.pl?action=list&Board=Q3ArenaLE" target="_top">Editing Forum</A>  <BR><BR>
 </td>
 <td width="1" bgcolor="#dddddd">&nbsp;</td>
 <td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 </tr>
 <tr><td colspan="5" bgcolor="navy" height="1" width="100%"><font face="Arial Narrow" size="-3">&nbsp;</font></td></tr>
 
 
  </TABLE>
  <br><Br> 
  
  
  <!-- ##################### UNREAL MENU STARTS HERE ---------------------------------------------->
 <TABLE width="100%" border="0" cellspacing="0" cellpadding="0" valign="TOP" bgcolor="#dddddd">
         <TR>
                 <TD bgcolor="navy" colspan="5"><FONT face="arial black" size="-1" color="white"><center>Unreal</center></FONT></TD>
         </TR>
 		<tr><td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 		<td width="1" bgcolor="#dddddd">&nbsp;</td>
 		<td align="RIGHT" bgcolor="#dddddd">
 <font face="Helvetica, Courier New" size="-2"><b>
 <A href="http://unreal.gamedesign.net" target="_top">Wolf's Unreal</A>  <BR><BR>
 <A href="http://www.gamedesign.net/unreal/unrealtutorials.shtml" target="_top">Tutorials</A>  <BR><br>
 <A href="http://www.gamedesign.net/unreal/unrealtechniques.shtml" target="_top">Techniques</A>  <BR><br>
 <A href="http://forums.gamedesign.net/forums/wwwthreads.pl?action=list&Board=UnrealLE" target="_top">Editing Forum</A>  <BR><BR>
 </td>
 <td width="1" bgcolor="#dddddd">&nbsp;</td>
 <td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 </tr>
 <tr><td colspan="5" bgcolor="navy" height="1" width="100%"><font face="Arial Narrow" size="-3">&nbsp;</font></td></tr>
  </TABLE>
  <br><Br> 
  <!-- ##################### UNREAL MENU ENDS HERE ---------------------------------------------->
  
  
   <!-- ##################### Half-Life MENU STARTS HERE ---------------------------------------------->
   <TABLE width="100%" border="0" cellspacing="0" cellpadding="0" valign="TOP" bgcolor="#dddddd">
         <TR>
                 <TD bgcolor="navy" colspan="5"><FONT face="arial black" size="-1" color="white"><center>Half-Life</center></FONT></TD>
         </TR>
 		<tr><td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 		<td width="1" bgcolor="#dddddd">&nbsp;</td>
 		<td align="RIGHT" bgcolor="#dddddd">
 <font face="Helvetica, Courier New" size="-2"><b>
 <A href="http://halflife.gamedesign.net" target="_top">Half-Life ERC</A>  <BR><BR>
 <A href="http://forums.gamedesign.net/forums/wwwthreads.pl?action=list&Board=HL_LevelEditing" target="_top">Editing Forum</A>  <BR><BR>
 <A href="http://www.gamedesign.net/half-life/half-life_faq.shtml" target="_top">FAQ</A>  <BR><BR>
 </td>
 <td width="1" bgcolor="#dddddd">&nbsp;</td>
 <td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 </tr>
 <tr><td colspan="5" bgcolor="navy" height="1" width="100%"><font face="Arial Narrow" size="-3">&nbsp;</font></td></tr>
  </TABLE>
  <br><Br> 
  <!-- ##################### Half-Life MENU ENDS HERE ---------------------------------------------->
  
  
   <!-- ##################### Heretic 2 MENU STARTS HERE ---------------------------------------------->
   <TABLE width="100%" border="0" cellspacing="0" cellpadding="0" valign="TOP" bgcolor="#dddddd">
         <TR>
                 <TD bgcolor="navy" colspan="5"><FONT face="arial black" size="-1" color="white"><center>Heretic2</center></FONT></TD>
         </TR>
 		<tr><td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 		<td width="1" bgcolor="#dddddd">&nbsp;</td>
 		<td align="RIGHT" bgcolor="#dddddd">
 <font face="Helvetica, Courier New" size="-2"><b>
 <A href="http://heretic2.gamedesign.net" target="_top">The Mappers Shrine</A>  <BR><BR>
 <A href="http://forums.gamedesign.net/forums/wwwthreads.pl?action=list&Board=Heretic2Editing" target="_top">Editing Forum</A>  <BR><BR>
 </td>
 <td width="1" bgcolor="#dddddd">&nbsp;</td>
 <td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 </tr>
 <tr><td colspan="5" bgcolor="navy" height="1" width="100%"><font face="Arial Narrow" size="-3">&nbsp;</font></td></tr>
  </TABLE>
  <br><Br> 
  <!-- ##################### Heretic2 MENU ENDS HERE ---------------------------------------------->
  
    <!-- ##################### Sin MENU STARTS HERE ---------------------------------------------->
   <TABLE width="100%" border="0" cellspacing="0" cellpadding="0" valign="TOP" bgcolor="#dddddd">
         <TR>
                 <TD bgcolor="navy" colspan="5"><FONT face="arial black" size="-1" color="white"><center>Sin</center></FONT></TD>
         </TR>
 		<tr><td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 		<td width="1" bgcolor="#dddddd">&nbsp;</td>
 		<td align="RIGHT" bgcolor="#dddddd">
 <font face="Helvetica, Courier New" size="-2"><b>
 <A href="http://www.gamedesign.net/sin/introduction.shtml" target="_top">Introduction</A>  <BR><BR>
 <A href="http://www.gamedesign.net/sin/sintutorials.shtml" target="_top">Tutorials</A>  <BR><BR>
 <A href="http://forums.gamedesign.net/forums/wwwthreads.pl?action=list&Board=SinEditing" target="_top">Editing Forum</A>  <BR><BR>
 </td>
 <td width="1" bgcolor="#dddddd">&nbsp;</td>
 <td width="1" bgcolor="navy"><font face="Arial Narrow" size="-3">&nbsp;</font></td>
 </tr>
 <tr><td colspan="5" bgcolor="navy" height="1" width="100%"><font face="Arial Narrow" size="-3">&nbsp;</font></td></tr>
  </TABLE>
  <br><Br> 
  <!-- ##################### sin MENU ENDS HERE ---------------------------------------------->
  
 

	</td>
<!--menu ends here-->
</tr>
</table>
<!-- footer starts here -->
 <table width="400" border="0" cellspacing="0" cellpadding="0" valign="TOP" bgcolor="navy" bordercolor="navy" bordercolorlight="navy" bordercolordark="navy">
 <tr><td><strong><font color="White">Copyright Crap</font></strong></td></tr></table>
 <table width="400" border="1" cellspacing="0" cellpadding="0"  bgcolor="#DDDDDD" bordercolor="navy" bordercolorlight="navy" bordercolordark="navy">
 <tr><td class="footer">
 
 HTML Design, original concept of rust by <a href="mailto:fishman@gamedesign.net">Shane 'Fishman' Sherman</a>  rust is &copy; 1998, and 1999 by <a href="mailto:fishman@gamedesign.net">Shane 'Fishman' Sherman</a> and <a href="mailto:granny@gamedesign.net">Martin Ka'ai Cluney</a>(GrrandMaMa). Quake, Quake2, Quake3:Arena are trademarks of <a href="http://www.idsoftware.com" target="_top">id software</a>. Unreal is a trademark of <a href="http://www.unreal.com" target="_top">Epic</a>. Half-Life is a trademark of <a href="http://www.valvesoftware.com" target="_top">Valve Software</a>. Sin is a trademark of <a href="http://www.ritual.com" target="_top">Ritual</a>. All rights reserved. If you have any problems or comments about rust then please <a href="http://www.gamedesign.net/email.shtml">Contant Us</a>.
 
 <br><br>
 
 </td></tr>
 </table>
 <!-- footer ends here -->
</body>
</html>

