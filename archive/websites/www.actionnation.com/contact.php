<script>
var eTopM = "";	

if (document.all)		
document.onmouseover = mouseOver;

function mouseOver() {
	var eSource = window.event.srcElement;
	
	if (eSource.name == "topMenu") {
		var eMenu = document.all[eSource.id.replace("div", "")]
		var intWidth = eSource.offsetWidth
	
		if (eTopM && eTopM != eMenu) hideTopMenu(eTopM);
			 
		if (eMenu) showTopMenu(eMenu, intWidth)
	} else if (eTopM && !eTopM.contains(eSource) && !menuRow.contains(eSource))
		hideTopMenu(eTopM);
}

function showTopMenu(eSource, intMinWidth) {	
	x  = window.event.srcElement.offsetLeft + window.event.srcElement.offsetParent.offsetLeft;
	y  = menuRow.offsetHeight - 2;
	
	if (intMinWidth < 150) intMinWidth = 150		
	if (eSource.style.width < intMinWidth) eSource.style.width = intMinWidth;
	var intTemp = parseInt(eSource.style.width);		
	intTemp = Number(x) + intTemp;
	var intDocWidth = document.body.clientWidth;
	
	if(intTemp > intDocWidth) {
		var intDiff = intTemp - intDocWidth
		x = x - intDiff - 3; 
	}
	var ban = document.getElementById("bwbanner");
	if (ban != null) ban.style.visibility='hidden';
	eSource.style.left = x;
	eSource.style.top = y;
	eSource.style.visibility = "visible";
	eSource.style.filter = "alpha(opacity=90)";
	eTopM = eSource;
}

function hideTopMenu(eSource){
	eSource.style.filter = "none";
	eSource.style.visibility = "hidden";
	var ban = document.getElementById("bwbanner");
	if (ban != null) ban.style.visibility='visible';
}
</script>
<style>
BODY{margin:0;}
.bTB{background-color:#006600;color:#FFFFFF;font-size:12px;font-family:Arial;border-bottom:2px solid #000000;}
A.bT:Link,A.bT:Visited,A.bT:Active{color:#FFFFFF;font-size:12px;font-family:Arial;text-decoration:none;font-weight:bold;}
A.bT:Hover{color:#FFFF99;font-size:12px;font-family:Arial;text-decoration:none;font-weight:bold;}
.bSB{background-color:#006600;color:#FFFFFF;padding:2px;font-size:12px;font-family:Arial;border:2px solid #000000;border-top:2px solid #005500;visibility:hidden;position:absolute;z-index:10;left:0;}
A.bS:Link,A.bS:Visited,A.bS:Active{width:100%;padding:2px;background-color:#006600;color:#A8FFA8;font-family:Arial;text-decoration:none;}
A.bS:Hover{width:100%;padding:2px;background-color:#228822;color:#FFFF99;font-family:Arial;text-decoration:none;}
B.sh{color:#FFFFFF;}
</style>
<div class=bTB>
<table cellpadding=0 cellspacing=0 border=0 width="100%" background="http://images.barrysworld.com/hmenu/lback.gif" id=menuRow><tr>
<td class=bwHeader width=19><a href="http://www.barrysworld.com/"><img src="http://images.barrysworld.com/hmenu/lsmile.gif" width="19" height="24" alt="BarrysWorld" border="0"></a>&nbsp;</td>
<td class=bwHeader>&nbsp;&nbsp;
<a class=bT href="http://www.barrysworld.com" id=divb name=topMenu>BarrysWorld</a>&nbsp;&nbsp;
<a class=bT href="http://www.barrysworld.com/games/gameservers.asp" id=divg name=topMenu>Game Servers</a>&nbsp;&nbsp;
<a class=bT href="http://www.barrysworld.com/membership/" id=divm name=topMenu>Membership</a>&nbsp;&nbsp;
<a class=bT href="http://www.barrysworld.com" id=divn name=topMenu>Nation</a>&nbsp;&nbsp;
<a class=bT href="http://leagues.barrysworld.net/" id=divl name=topMenu>Leagues</a>&nbsp;&nbsp;	
</td><td align=right><a class=bT href="http://www.barrysworld.com"><img src="http://images.barrysworld.com/hmenu/llogo.gif" width="121" height="24" alt="BarrysWorld" border="0"></a>&nbsp;</td>
</tr></table>
</div><div class=bSB id=b>
<a class=bS href="http://www.barrysworld.com/news/">News</a><br>
<a class=bS href="http://www.barrysworld.com/Hosting/">Web Hosting</a><br>
<a class=bS href="http://forums.barrysworld.com/">Forums</a><br>
<a class=bS href="http://guides.barrysworld.com/">Guides</a><br>
</div><div class=bSB id=g>
<a class=bS href="http://www.barrysworld.com/games/gameservers.asp">Public Servers</a><br>
<a class=bS href="http://www.barrysworld.com/games/bookings/">Bookables</a><br>
<a class=bS href="http://www.barrysworld.com/barryservers/">BarryServers</a><br>
<a class=bS href="http://www.barrysworld.com/games/gameservermasters.asp">Master Servers</a><br>
</div><div class=bSB id=m>
<a class=bS href="http://www.barrysworld.com/Membership/Players/PlayerSearch.asp">Players</a><br>
<a class=bS href="http://www.barrysworld.com/Membership/Teams/TeamList.asp">Teams</a><br>
<a class=bS href="http://www.barrysworld.com/Membership/Players/RecruitmentList.asp">Player Recruitment</a><br>
<a class=bS href="http://www.barrysworld.com/Membership/Teams/RecruitmentList.asp">Team Recruitment</a><br>
<a class=bS href="http://www.barrysworld.com/barrybank/">BarryBank</a><br>
</div><div class=bSB id=n>
<a class=bS href="http://www.quakenation.com/">QuakeNation</a><br>
<a class=bS href="http://www.tribesnation.co.uk/">TribesNation</a><br>
<a class=bS href="http://www.fortressnation.com/">FortressNation</a><br>
<a class=bS href="http://www.actionnation.com/">ActionNation</a><br>
<a class=bS href="http://www.tecnation.co.uk/">TechNation</a><br>
<a class=bS href="http://www.lanpartynation.com/">LanPartyNation</a><br>
<a class=bS href="http://www.rtcwnation.com/">RTCWNation</a><br>
<b>Other Network Sites</b><br>
<a class=bS href="http://www.xsreality.com/">XSReality</a><br>
<a class=bS href="http://www.cscentral.com/">CSCentral</a><br>
<a class=bS href="http://www.unrealfortress.com/">UnrealFortress</a><br>
<a class=bS href="http://www.avpnetwork.com/">AvP Network</a><br>
</div><div class=bSB id=l>
<b class=sh>Quake 3</b><br>	
<a class=bS href="http://leagues.barrysworld.net/bwq3dml/">BWQ3DML</a><br>
<a class=bS href="http://leagues.barrysworld.net/bwq3ctfl/">BWQ3CTFL</a><br>
<a class=bS href="http://leagues.barrysworld.net/bwra3l/">BWRA3L</a><br>
<a class=bS href="http://leagues.barrysworld.net/bwq3utl/">BWQ3UTL</a><br>
<a class=bS href="http://leagues.barrysworld.net/bwcpml/">BWCPML </a><br>
<a class=bS href="http://leagues.barrysworld.net/bwq3ftl/">BWQ3FTL</a><br>
<a class=bS href="http://leagues.barrysworld.net/bwcpmral/">BWCPMRAL</a><br>
<a class=bS href="http://leagues.barrysworld.net/bwq3pbl/">BWQ3PBL</a><br>
<b class=sh>Half-Life</b><br>	
<a class=bS href="http://leagues.barrysworld.net/bwcsl">BWCSL</a><br>
<a class=bS href="http://www.bwtfcl.com/">BWTFCL</a><br>
<a class=bS href="http://www.hlccl.com">HLCCL</a><br>
<b class=sh>Other</b><br>	
<a class=bS href="http://leagues.barrysworld.net/bwjk2l">Jedi Knight II: Jedi Outcast</a><br>
<a class=bS href="http://leagues.barrysworld.net/bwmohl">Medal of Honor</a><br>
<a class=bS href="http://leagues.barrysworld.net/bwrtcwl">Return to Castle Wolfenstein</a><br>
<a class=bS href="http://leagues.barrysworld.net/bwefl/">Star Trek Voyager: Elite Force</a><br>
</div>


<!-- Magic Quotes - 0-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>ActionNation.com  - For all your Action needs</title>
	<link rel="STYLESHEET" type="text/css" href="style/default.css">
</head>

<body bgcolor="#FFFFFF" text="#FFFFFF" leftmargin=0 topmargin=0 marginwidth=0 marginheight=0>

<table bgcolor="#9B7A21" width="100%" cellpadding=0 cellspacing=0 border=0>
<tr>
	<td><img src="images/main_logo.jpg" width="454" height="54" alt="" border="0"><br></td>
	<td>&nbsp;</td>
	<td align=right><img src="images/main_right.jpg" width="312" height="54" alt="" border="0"></td>
</tr>
</table>
<table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0>
<tr>
	<td>
	<table bgcolor="#CECECE" width="100%" cellpadding=2 cellspacing=0 border=0>
	<tr>
		<td>&nbsp;&nbsp;<span class="btext"><a class="blink" href="http://www.quakenation.com/">QuakeNation</a> | <a class="blink" href="http://www.tribesnation.co.uk">TribesNation</a> | <a class="blink" href="http://www.actionnation.com/">ActionNation</a> | <a class="blink" href="http://www.lanpartynation.com">LanPartyNation</a> | <a class="blink" href="http://www.rtcwnation.com">RTCWNation</a></span></td>
		<td align=right></td>
	</tr>
	</table>
	</td>
</tr>
</table>

<table width="100%" cellpadding=0 cellspacing=0>
<tr>
	<td width=150 valign=top>
	<!-- Left Menu -->
	<img src="images/spacer.gif" width="150" height="5" alt="" border="0">
<table bgcolor="#000000" width="100%" cellpadding=0 cellspacing=0 border=0>
<tr>
<td>
<table width="100%" cellpadding=2 cellspacing=1 border=0>
<tr>
<td bgcolor="#CECECE"><span class=btext>Main</span></td>
</tr>
<tr>
<td bgcolor="#9B7A21" class=wtext>
<b><a class=wlink href=default.php>News</a></b><br>
<a href="default.php?section=1" class="wlink">General News</a><br><a href="default.php?section=2" class="wlink">Counter-Strike</a><br><a href="default.php?section=3" class="wlink">Action Quake 2</a><br><a href="default.php?section=4" class="wlink">Halflife</a><br><a href="default.php?section=5" class="wlink">Urban Terror</a><br><a href="default.php?section=6" class="wlink">Unreal Tourney</a><br><a href="default.php?section=7" class="wlink">Quake</a><br><a href="default.php?section=27" class="wlink">Leagues</a><br>
<a class=wlink href=mailto:deathwatch@barrysworld.com>Submit News</a>
<p>
<b>Leagues</b><br>
<a href="league.php?section=14" class="wlink">BWAQSL</a><br><a href="league.php?section=15" class="wlink">BWCSL</a><br>
<p>
<b>Columns</b><br>
<table width="100%" cellpadding=0 cellspacing=0 border=0>
<tr><td width=60%><a href="column.php?section=29&index=594" class="wlink">Noz</a></td><td width=40%><span class=wtext>(07/07/02)</span></td></tr><tr><td width=60%><a href="column.php?section=29&index=587" class="wlink">Noz</a></td><td width=40%><span class=wtext>(20/05/02)</span></td></tr><tr><td width=60%><a href="column.php?section=30&index=584" class="wlink">Excession</a></td><td width=40%><span class=wtext>(02/05/02)</span></td></tr><tr><td width=60%><a href="column.php?section=30&index=560" class="wlink">Excession</a></td><td width=40%><span class=wtext>(19/02/02)</span></td></tr><tr><td width=60%><a href="column.php?section=29&index=550" class="wlink">Noz</a></td><td width=40%><span class=wtext>(30/01/02)</span></td></tr>
</table>
</td>
</tr>
<tr>
<td bgcolor="#CECECE"><img src="images/spacer.gif" width="1" height="2" alt="" border="0"></td>
</tr>
</table>
</td>
</tr>
</table>	<img src="images/spacer.gif" width="150" height="5" alt="" border="0">
<table bgcolor="#000000" width="100%" cellpadding=0 cellspacing=0 border=0>
<tr>
<td>
<table width="100%" cellpadding=2 cellspacing=1 border=0>
<tr>
<td bgcolor="#CECECE"><span class=btext>Content</span></td>
</tr>
<tr>
<td bgcolor="#9B7A21" class=wtext>
<b>Features</b><br>
<a href="feature.php?section=9" class="wlink">Features</a><br><a href="interview.php?section=10" class="wlink">Interviews</a><br><a href="review.php?section=11" class="wlink">Reviews</a><br>
<p>
<b><a class=wlink href=http://forums.barrysworld.com/forumdisplay.php?forumid=28>Forum</a></b><br>
<b><a class=wlink href=files.php>Files</a></b><br>
<b><a class=wlink href=links.php>Links</a></b><br>
<b><a class=wlink href=contact.php>Contact</a></b><br>
</td>
</tr>
<tr>
<td bgcolor="#CECECE"><img src="images/spacer.gif" width="1" height="2" alt="" border="0"></td>
</tr>
</table>
</td>
</tr>
</table>	<img src="images/spacer.gif" width="150" height="5" alt="" border="0">
<table bgcolor="#000000" width="100%" cellpadding=0 cellspacing=0 border=0>
<tr>
<td>
<table width="100%" cellpadding=2 cellspacing=1 border=0>
<tr>
<td bgcolor="#CECECE">  <span class=btext>BarrysWorld Lists</span></td>
</tr>
<tr>
<td bgcolor="#9B7A21" class=wtext>
	<b><a href='http://www.barrysworld.com/Membership/Teams/TeamList.asp' class='wlink'>Team Lists</a></b><br>
	<a href='http://www.barrysworld.com/Membership/Teams/TeamList.asp?g=210' class='wlink' target=new>Counter-Strike</a><br>
	<a href='http://www.barrysworld.com/Membership/Teams/TeamList.asp?g=13' class='wlink' target=new>Action Quake 2</a><br>
	<a href='http://www.barrysworld.com/Membership/Teams/TeamList.asp?g=215' class='wlink' target=new>Action Halflife</a><br>
	<a href='http://www.barrysworld.com/Membership/Teams/TeamList.asp?g=25' class='wlink' target=new>Urban Terror</a><br>
	<a href='http://www.barrysworld.com/Membership/Teams/TeamList.asp?g=216' class='wlink' target=new>Front Line Force</a><br>
	<a href='http://www.barrysworld.com/Membership/Teams/TeamList.asp?g=217' class='wlink' target=new>Firearms</a><br>
	<p>
	<b><a href='http://www.barrysworld.com/Hosting/Lists/SiteList.asp' class='wlink'>Hosted Sites</a></b><br>
	<a href='http://www.barrysworld.com/Hosting/Lists/SiteList.asp?g=210' class='wlink' target=new>Counter-Strike</a><br>
	<a href='http://www.barrysworld.com/Hosting/Lists/SiteList.asp?g=13' class='wlink' target=new>Action Quake 2</a><br>
	<a href='http://www.barrysworld.com/Hosting/Lists/SiteList.asp?g=215' class='wlink' target=new>Action Halflife</a><br>
	<a href='http://www.barrysworld.com/Hosting/Lists/SiteList.asp?g=25' class='wlink' target=new>Urban Terror</a><br>
	<a href='http://www.barrysworld.com/Hosting/Lists/SiteList.asp?g=216' class='wlink' target=new>Front Line Force</a><br>
	<a href='http://www.barrysworld.com/Hosting/Lists/SiteList.asp?g=217' class='wlink' target=new>Firearms</a><br>
	</td>
</tr>
<tr>
<td bgcolor="#CECECE"><img src="images/spacer.gif" width="1" height="2" alt="" border="0"></td>
</tr>
</table>
</td>
</tr>
</table>	<img src="images/spacer.gif" width="150" height="5" alt="" border="0">
<table bgcolor="#000000" width="100%" cellpadding=0 cellspacing=0 border=0>
<tr>
<td>
<table width="100%" cellpadding=2 cellspacing=1 border=0>
<tr>
<td bgcolor="#CECECE">  <span class=btext>Nation Network</span></td>
</tr>
<tr>
<td bgcolor="#9B7A21" class=wtext>
	<a href='http://www.actionnation.com/' class='wlink'>ActionNation</a><br>
	<a href='http://www.fortressnation.com/' class='wlink'>FortressNation</a><br>
	<a href='http://www.quakenation.com/' class='wlink'>QuakeNation</a><br>
	<a href='http://www.tribesnation.co.uk/' class='wlink'>TribesNation</a><br></td>
</tr>
<tr>
<td bgcolor="#CECECE"><img src="images/spacer.gif" width="1" height="2" alt="" border="0"></td>
</tr>
</table>
</td>
</tr>
</table>	<img src="images/spacer.gif" width="150" height="5" alt="" border="0">
<table bgcolor="#000000" width="100%" cellpadding=0 cellspacing=0 border=0>
<tr>
<td>
<table width="100%" cellpadding=2 cellspacing=1 border=0>
<tr>
<td bgcolor="#CECECE">  <span class=btext>Powered by..</span></td>
</tr>
<tr>
<td bgcolor="#9B7A21" class=wtext>
	<a href='http://www.barrysworld.com/' class='wlink'>BarrysWorld</a><br>
	<a href='http://hosted.barrysworld.net/neville' class='wlink'>Neville</a><br></td>
</tr>
<tr>
<td bgcolor="#CECECE"><img src="images/spacer.gif" width="1" height="2" alt="" border="0"></td>
</tr>
</table>
</td>
</tr>
</table>	</td>
	<td width="100%" valign=top>
	<!-- Content -->
	<img src="images/spacer.gif" width="2" height="5" alt="" border="0">
	<table width="100%" cellpadding=0 cellspacing=0>
	<tr>
		<td><img src="images/spacer.gif" width="5" height="1" alt="" border="0"></td>
		<td width="100%">
		<div align="center"></div>
		<p>
<table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr>
<td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%">The ActionNation Team</td>
</tr>
<tr>
<td bgcolor="#EEEEEE">

<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr> 
   <td class="btext"><b>Name</b></td>
   <td class="btext"><b>Function</b></td>
</tr>
<tr> 
   <td>
      <a href=mailto:bigfoot@barrysworld.com>Bigfoot</a>
   </td>
   <td>
      BarrysWorld Bloke
   </td>
</tr><tr> 
   <td>
      <a href=mailto:davross@clara.co.uk>Davross</a>
   </td>
   <td>
      Reporter and Columnist
   </td>
</tr><tr> 
   <td>
      <a href=mailto:deathwatch@barrysworld.com>Deathwatch</a>
   </td>
   <td>
      Webmaster
   </td>
</tr><tr> 
   <td>
      <a href=mailto:cc-excession@barrysworld.com>Excession</a>
   </td>
   <td>
      Urban Terror News & Column
   </td>
</tr><tr> 
   <td>
      <a href=mailto:executor2k@barrysworld.com>executor2k</a>
   </td>
   <td>
      Strike Force Reporter
   </td>
</tr><tr> 
   <td>
      <a href=mailto:Richard.Harborne@btinternet.com>Hotteh</a>
   </td>
   <td>
      Reporter and Columnist
   </td>
</tr><tr> 
   <td>
      <a href=mailto:ice.m@btinternet.com>ICE.M</a>
   </td>
   <td>
      Reporter and Columnist
   </td>
</tr><tr> 
   <td>
      <a href=mailto:aronnax@barrysworld.com>Kobra</a>
   </td>
   <td>
      News Reporter
   </td>
</tr><tr> 
   <td>
      <a href=mailto:Mr_Silburn@hotmail.com>M@trix</a>
   </td>
   <td>
      News & Column
   </td>
</tr><tr> 
   <td>
      <a href=mailto:thoult@barrysworld.com>n4</a>
   </td>
   <td>
      News Reporter and Columnist
   </td>
</tr><tr> 
   <td>
      <a href=mailto:nozzer@barrysworld.com>Noz</a>
   </td>
   <td>
      News & Column
   </td>
</tr><tr> 
   <td>
      <a href=mailto:rogue2@barrysworld.com>Rogue1</a>
   </td>
   <td>
      BWCSL Reporter
   </td>
</tr><tr> 
   <td>
      <a href=mailto:splidge@barrysworld.com>splidge</a>
   </td>
   <td>
      Counter-Strike Reporter and Columnist
   </td>
</tr><tr> 
   <td>
      <a href=mailto:StealthBuda@barrysworld.com>StealthBuda</a>
   </td>
   <td>
      News Reporter
   </td>
</tr><tr> 
   <td>
      <a href=mailto:trebz@barrysworld.com>Trebz</a>
   </td>
   <td>
      Neville Guru
   </td>
</tr>
</table>

</td>
</tr>
</table>
</td>
</tr>
</table>
		</td>
		<td><img src="images/spacer.gif" width="5" height="1" alt="" border="0"></td>
	</tr>
	</table>
	
	</td>
	<td width=150 valign=top>
	<!-- Right Menu -->
	<img src="images/spacer.gif" width="150" height="5" alt="" border="0">
<table bgcolor="#000000" width="100%" cellpadding=0 cellspacing=0 border=0>
<tr>
<td>
<table width="100%" cellpadding=2 cellspacing=1 border=0>
<tr>
<td bgcolor="#CECECE">  <span class=btext>Latest Headlines</span></td>
</tr>
<tr>
<td bgcolor="#9B7A21" class=wtext><a href="default.php?section=5&index=600" class="wlink"> - Urban Terror Beta 2.6 Released</a><br><a href="default.php?section=1&index=586" class="wlink"> - Operation Red Falcon Update</a><br><a href="default.php?section=1&index=567" class="wlink"> - NS-CO Released</a><br><a href="default.php?section=6&index=566" class="wlink"> - UT - Strike Force 1.75 Released</a><br><a href="default.php?section=3&index=563" class="wlink"> - TNG 2.6 released</a><br><a href="default.php?section=5&index=561" class="wlink"> - Beta Release and League News.</a><br><a href="default.php?section=5&index=559" class="wlink"> - Urban Terror Bug Fix</a><br><a href="default.php?section=5&index=558" class="wlink"> - Urban Terror Beta 2.4 is here!!</a><br><a href="default.php?section=4&index=557" class="wlink"> - DoD Beta 2 Win32 Client</a><br><a href="default.php?section=4&index=556" class="wlink"> - Day of Defeat Beta 2 Server Files</a><br></td>
</tr>
<tr>
<td bgcolor="#CECECE"><img src="images/spacer.gif" width="1" height="2" alt="" border="0"></td>
</tr>
</table>
</td>
</tr>
</table>	<img src="images/spacer.gif" width="150" height="5" alt="" border="0">
<table bgcolor="#000000" width="100%" cellpadding=0 cellspacing=0 border=0>
<tr>
<td>
<table width="100%" cellpadding=2 cellspacing=1 border=0>
<tr>
<td bgcolor="#CECECE">  <span class=btext>Latest Features</span></td>
</tr>
<tr>
<td bgcolor="#9B7A21" class=wtext><a href="interview.php?section=10&index=349" class="wlink"> - Action Half-Life Interview</a><br><a href="interview.php?section=10&index=336" class="wlink"> - Opera Interview</a><br><a href="interview.php?section=10&index=328" class="wlink"> - Annihilation Interview</a><br><a href="interview.php?section=10&index=324" class="wlink"> - Navy Seals Covert Operations Interview</a><br><a href="interview.php?section=10&index=312" class="wlink"> - The Specialists Interview</a><br></td>
</tr>
<tr>
<td bgcolor="#CECECE"><img src="images/spacer.gif" width="1" height="2" alt="" border="0"></td>
</tr>
</table>
</td>
</tr>
</table>	<img src="images/spacer.gif" width="150" height="5" alt="" border="0">
<table bgcolor="#000000" width="100%" cellpadding=0 cellspacing=0 border=0>
<tr>
<td>
<table width="100%" cellpadding=2 cellspacing=1 border=0>
<tr>
<td bgcolor="#CECECE">  <span class=btext>BarrysWorld Headlines</span></td>
</tr>
<tr>
<td bgcolor="#9B7A21" class=wtext><a href="
http://www.barrysworld.com/news/default.asp?Item=27596&Category=1" class="wlink"> - 

DoD goes retail !</a><br><a href="
http://www.barrysworld.com/news/default.asp?Item=27595&Category=2" class="wlink"> - 

BattleField 1942 Bookable Servers Launched woohoo!</a><br><a href="
http://www.barrysworld.com/news/default.asp?Item=27590&Category=2" class="wlink"> - 

RTCW Changes</a><br><a href="
http://www.barrysworld.com/news/default.asp?Item=27588&Category=2" class="wlink"> - 

GAME.NET Launches</a><br><a href="
http://www.barrysworld.com/news/default.asp?Item=27586&Category=1" class="wlink"> - 

Splinter Cell Demo</a><br><a href="
http://www.barrysworld.com/news/default.asp?Item=27585&Category=2" class="wlink"> - 

A Trio of Bookables</a><br><a href="
http://www.barrysworld.com/news/default.asp?Item=27584&Category=1" class="wlink"> - 

Age of Mythology Patch</a><br><a href="
http://www.barrysworld.com/news/default.asp?Item=27583&Category=1" class="wlink"> - 

Impossible Creatures Multiplayer Test</a><br><a href="
http://www.barrysworld.com/news/default.asp?Item=27582&Category=1" class="wlink"> - 

Microsoft to Publish Steel Battalion</a><br><a href="
http://www.barrysworld.com/news/default.asp?Item=27581&Category=1" class="wlink"> - 

Art and Level Design</a><br></td>
</tr>
<tr>
<td bgcolor="#CECECE"><img src="images/spacer.gif" width="1" height="2" alt="" border="0"></td>
</tr>
</table>
</td>
</tr>
</table>	<img src="images/spacer.gif" width="150" height="5" alt="" border="0">
<table bgcolor="#000000" width="100%" cellpadding=0 cellspacing=0 border=0>
<tr>
<td>
<table width="100%" cellpadding=2 cellspacing=1 border=0>
<tr>
<td bgcolor="#CECECE">  <span class=btext>BarrysWorld Services</span></td>
</tr>
<tr>
<td bgcolor="#9B7A21" class=wtext>
	<a href='http://www.barrysworld.com/hosting/' class='wlink'>Get your site hosted</a><br>
	<a href='http://www.barrysworld.com/games/liaisons.asp' class='wlink'>Server Liaisons/Admins</a><br>
	<p>
	<b><a href='http://www.barrysworld.com/games/gameservers.asp' class='wlink'>Public Servers</a></b><br>
	<a href='http://www.barrysworld.com/games/counterstrike/CounterStrikeServers.asp' class='wlink' target=new>Counter-Strike</a><br>
	<a href='http://www.barrysworld.com/games/halflife/HalfLifeServers.asp' class='wlink' target=new>Half-Life</a><br>
	<a href='http://www.barrysworld.com/games/quake2/quake2servers.asp' class='wlink' target=new>Quake 2</a><br>
	<a href='http://www.barrysworld.com/games/quake3/quake3servers.asp' class='wlink' target=new>Quake 3 Arena</a><br>
	<a href='http://www.barrysworld.com/games/unrealtournament/UnrealTournamentServers.asp' class='wlink' target=new>Unreal Tournament</a><br>
	<p>
	<b><a href='http://www.barrysworld.com/games/bookings/' class='wlink'>Bookable Servers</a></b><br>
	<a href='http://www.barrysworld.com/games/bookings/bookableServersList.asp?game=Half%2DLife' class='wlink' target=new>Half-Life</a><br>
	<a href='http://www.barrysworld.com/games/bookings/bookableServersList.asp?game=Quake+2' class='wlink' target=new>Quake 2</a><br>
	<a href='http://www.barrysworld.com/games/bookings/bookableServersList.asp?game=Quake+3+Arena' class='wlink' target=new>Quake 3 Arena</a><br>
	<a href='http://www.barrysworld.com/games/bookings/bookableServersList.asp?game=Unreal+Tournament' class='wlink' target=new>Unreal Tournament</a><br>
	<p>
	<b><a href='http://leagues.barrysworld.com/' class='wlink'>Leagues</a></b><br>
	<a href='http://leagues.barrysworld.net/bwcsl/' class='wlink' target=new>BWCSL</a><br>
	<a href='http://leagues.barrysworld.net/bwaqsl/' class='wlink' target=new>BWAQSL</a><br>
	</td>
</tr>
<tr>
<td bgcolor="#CECECE"><img src="images/spacer.gif" width="1" height="2" alt="" border="0"></td>
</tr>
</table>
</td>
</tr>
</table>	<p>
	<div align="center">Visitors since 03/05/01<br>
	<img src="http://linweb02.barrysworld.com/cgi-bin/Count.cgi?trgb=ffffff&dd=E&reload=F" alt="Count">
	</div>
	<p>
	<div align="center">
	<a href="http://www.barrysworld.com" target="_blank"><img src="http://images.barrysworld.com/button_bw.gif" border=0 alt="Hosted by Barrysworld with Barry Power!"></a><br><img src="img/spacer.gif" width="5" height="4" alt="" border="0"><br><a href="http://www.rtcwnation.com/"><img src="http://images.barrysworld.com/nation/button_rtcwn.gif" border=0></a><br><img src="img/spacer.gif" width="5" height="4" alt="" border="0"><br><a href="http://www.tribesnation.co.uk/"><img src="http://images.barrysworld.com/nation/button_tnation.gif" border=0></a><br><img src="img/spacer.gif" width="5" height="4" alt="" border="0"><br><a href="http://www.quakenation.com/"><img src="http://images.barrysworld.com/nation/button_qnation.gif" border=0></a><br>	</div>
	</td>
</tr>
</table>

<table width="100%" cellpadding=0 cellspacing=0 border=0 background="images/main_footfill.gif">
<tr>
	<td><img src="images/spacer.gif" width="1" height="39" alt="" border="0"></td>
	<td align=right><a href="http://www.actionnation.com/neville/"><img src="images/main_footer.gif" width="143" height="39" alt="" border="0"></a></td>
</tr>
</table>
<table width="100%" cellpadding=0 cellspacing=0 border=0 bgcolor="#CECECE">
<tr>
	<td colspan=2>
	<div align="right" class=bsmall>
	ActionNation is part of the <a href="http://www.barrysworld.com/" class="blink">BarrysWorld</a> Nation Network<br>
	Copyright &copy; 2001 <a href="http://www.barrysworld.com/" class="blink">BarrysWorld</a></div><br>
	</td>
</tr>
</table>

</body>
</html>