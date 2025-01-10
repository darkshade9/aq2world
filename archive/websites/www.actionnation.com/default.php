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
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>Urban Terror Beta 2.6 Released</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:cc-excession@barrysworld.com'>Excession</a> on Sat 09 November 2002 20:54:32 | <a href="comments.php?section=5&index=600" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_ut.gif' alt='Urban Terror' border=0></td><td width="100%" valign=top>Finally, Beta 2.6 for <a href="http://www.urbanterror.net">Urban Terror</a> has been released. Below are a few links for the upgrade and full versions. The upgrade weighs in at 87.6 MB, and the full version weighs in at 239 MB.<br><br>2.6 Upgrade Links<br><br><a href="http://www.fileshack.com/file.x?fid=1581">Fileshack</a><br><a href="http://planetquake3.net/download.php?op=viewdownloaddetails&lid=1238">Planetquake3</a><br><a href="http://www.zdwebhosting.com/beta26">ZD Webhosting</a><br><a href="http://q3.utca.hu/files/beta26_upgrade.zip">q3.utca.hu</a><br><a href="ftp://ftp.midwestmayhem.com/pub/UrbanTerror/beta26_upgrade.zip">Midwest Mayhem</a><br><a href="http://www.dawningdusk.de/files/beta26_upgrade.zip">Clan DD</a><br><a href="http://www.extreme-players.de/showfiles.asp?ID=5118">Extreme-Players.de</a><br><a href="http://ut.smartshells.de/">Smartshells</a><br><a href="http://clanhosted.clix.pt/quake3/downloads/">Data Source</a><br><a href="http://www.thedatasource.net/~gleam/beta26_upgrade.zip">Clanhosted</a></font> <br><a href="ftp://ftp.edome.net/online/clientit/beta26_upgrade.zip">eDome</a></font> <br><a href="http://www.barrysworld.com/games/download.asp?file=ftp://ftp.barrysworld.com/pub/games/quake3/mods/urbanterror/official_patches/beta26_upgrade.zip">Barrysworld</a> <br><a href="http://b26.fsk405.net/">FSK405</a></font> <br><a href="http://www.clanbase.com/miscdl.php?did=614">Clanbase</a><br><br>2.6 Full links<br><br><a href="http://www.fileshack.com/file.x?fid=1582">Fileshack</a> <br><a href="http://planetquake3.net/download.php?op=viewdownloaddetails&lid=1237">Planetquake3</a> <br><a href="http://www.zdwebhosting.com/beta26">ZD Webhosting</a> <br><a href="http://q3.utca.hu/files/beta26_full.zip">q3.utca.hu</a><br><a href="ftp://ftp.midwestmayhem.com/pub/UrbanTerror/beta26_full.zip">Midwest Mayhem</a><br><a href="http://www.dawningdusk.de/files/beta26_full.zip">Clan DD</a> <br><a href="http://www.extreme-players.de/showfiles.asp?ID=5119">Extreme-Players</a> <br><a href="http://ut.smartshells.de/">Smartshells</a><br><a href="http://www.thedatasource.net/~gleam/beta26_full.zip">Data Source</a><br><a href="http://clanhosted.clix.pt/quake3/downloads/">Clanhosted</a> <br><a href="ftp://ftp.edome.net/online/clientit/beta26_full.zip">eDome</a><br><a href="http://www.barrysworld.com/games/download.asp?file=ftp://ftp.barrysworld.com/pub/games/quake3/mods/urbanterror/official_patches/beta26_full.zip">Barrysworld</a><br><a href="http://b26.fsk405.net/">FSK405</a><br><br></td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>Operation Red Falcon Update</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:nozzer@barrysworld.com'>Noz</a> on Mon 20 May 2002 16:27:46 | <a href="comments.php?section=1&index=586" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_general.gif' alt='General News' border=0></td><td width="100%" valign=top>Just received this email update from the <a href="http://orf.actionrealm.com">Operation Red Falcon</a> team:<br><br><i><br>--------------------------------- <br>New Hoster and Weapon Renders <br>--------------------------------- <br>Posted 5.19.2002 by bigmomma: <br>Finally we have uploaded our website onto the server of our new hoster! And it's not only an "internal" change, but also the visual layout changed: no more blinking banners! Hooray! I assume all of you will welcome this! A great thanks to Actionrealm.com who made this possible! Our forum is also online now so don't miss to visit it! <br>And to celebrate our move to our new hoster we have new renders of two weapons which will be featured in the ORF Multiplayer part. It's the H&K MP5A2 and the Colt M4A1. </i><br><br><a href="http://orf.actionrealm.com/screenshots/1_mp500.jpg">H&K MP5A2</a><br><a href="http://orf.actionrealm.com/screenshots/1_m400.jpg">Colt M4A1</a></td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>BWQ3UTL Season 2</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:cc-excession@barrysworld.com'>Excession</a> on Thu 02 May 2002 17:48:53 | <a href="comments.php?section=27&index=583" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_league.gif' alt='Leagues' border=0></td><td width="100%" valign=top>After a lot of hard work carried out by <a href="mailto:crusader@hatstand.cx">Crusader</a>, Season 2 of the <a href="http://leagues.barrysworld.net/bwq3utl/index.php">Barrysworld Quake3 Urban Terror League</a> kicks off tonight, with 24 clans fighting it out over 3 divisions to decide who is the best.<br><br>Apologies to the clans that are left on the pending list, but due to the number of servers we can use, and time constraints, we had to limit the league to 3 divisions, hopefully we will be able to have more next season.<br><br>Any clans taking part, or if you just want to keep an eye on the action, idle in the <a href="irc://irc.barrysworld.com/bwq3utl">League Channel</a> from 6.30 pm (UK time) till around 10.30 pm (UK time).<br><br>All thats left to say really is GL to all the clans involved and HF.</td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>Interview with BWCSL winners D0es N0t C0mpute</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:rogue2@barrysworld.com'>Rogue1</a> on Sun 21 April 2002 11:33:41 | <a href="comments.php?section=27&index=582" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_league.gif' alt='Leagues' border=0></td><td width="100%" valign=top>An interview with .dNC, the winners of season 3 of the BWCSL has been posted. It's an interesting read, as it gives a perspective on some of the major changes about to hit CS in the next few days from a top clan. The interview can be found <a href=league.php?section=15>here</a></td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>BWCSL week 8 roundup and interviews with clans posted</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:rogue2@barrysworld.com'>Rogue1</a> on Fri 19 April 2002 17:28:55 | <a href="comments.php?section=27&index=580" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_league.gif' alt='Leagues' border=0></td><td width="100%" valign=top>The roundup of the final week of the BWCSL has been posted, along with interviews with members from a couple of the competing clans. The article can be found <a href=league.php?section=15>here</a>.</p</td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>BWQ3UTL</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:cc-excession@barrysworld.com'>Excession</a> on Sun 14 April 2002 13:07:09 | <a href="comments.php?section=27&index=578" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_league.gif' alt='Leagues' border=0></td><td width="100%" valign=top>Crusader has updated the webby for the <a href="http://leagues.barrysworld.net/bwq3utl/index.php">Barrysworld Quake3 Urban Terror League</a>.
<br>
Season 2 of the league will kick off on Thursday, May 2nd, 7pm (UK time).
<br>
Check out the <a href="http://leagues.barrysworld.net/bwq3utl/index.php">BWQ3UTL</a> website for more information.
</td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>BWCSL week 7 roundup and week 8 predictions posted</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:rogue2@barrysworld.com'>Rogue1</a> on Fri 12 April 2002 17:54:57 | <a href="comments.php?section=27&index=577" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_league.gif' alt='Leagues' border=0></td><td width="100%" valign=top>The roundup of the week 7 BWCSL games on de_aztec and predictions for week 8 postponed games and playoffs has been posted and can be found <a href=league.php?section=15>here</a>.</p</td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>Week 6 roundup and week 7 predictions posted</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:rogue2@barrysworld.com'>Rogue1</a> on Fri 05 April 2002 14:16:12 | <a href="comments.php?section=27&index=575" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_league.gif' alt='Leagues' border=0></td><td width="100%" valign=top>The roundup of the week 6 BWCSL games on de_dust and predictions for week 7 has been posted and can be found <a href=league.php?section=15>here</a>.</p</td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>BWCSL week 5 roundup and week 6 predictions posted</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:rogue2@barrysworld.com'>Rogue1</a> on Fri 29 March 2002 16:17:58 | <a href="comments.php?section=27&index=573" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_league.gif' alt='Leagues' border=0></td><td width="100%" valign=top>The roundup of the week 5 BWCSL games on de_inferno and predictions for week 6 has been posted and can be found <a href=\league.php?section=15>here</a>.</p></td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>BWCSL week 4 roundup and week 5 predictions posted</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:rogue2@barrysworld.com'>Rogue1</a> on Fri 22 March 2002 14:21:38 | <a href="comments.php?section=27&index=571" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_league.gif' alt='Leagues' border=0></td><td width="100%" valign=top>The current season of BWCSL is now more than half-way done and the latest series of division-by-division roundups and predictions has been posted and can be found <a href=\league.php?section=15>here</a>.</p></td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>BWCSL Week 3 roundup and week 4 predictions posted</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:rogue2@barrysworld.com'>Rogue1</a> on Fri 15 March 2002 15:48:38 | <a href="comments.php?section=27&index=569" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_league.gif' alt='Leagues' border=0></td><td width="100%" valign=top>With BWCSL nearing its halfway point for many clans, the roundup of the latest week's action has been posted, as well as some predictions for the upcoming week. All of this, as well as a couple of match reports can be found <a href="league.php?section=15">here</a>.</p></td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>NS-CO Released</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:cc-excession@barrysworld.com'>Excession</a> on Sun 10 March 2002 10:33:47 | <a href="comments.php?section=1&index=567" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_general.gif' alt='General News' border=0></td><td width="100%" valign=top>Finally, after a long wait, Navy Seals - Covert Operations has been released.
<br>
This is what they have to say on the <a href="http://www.ns-co.net/">NS-CO</a> site.
<br>
<span class=quote>
Yes, it's true. Beta1 is finally released.
<br>
It took us quite some time to get this baby done, but now the first file mirrors are here. About an hour later than planned Navy Seals: Covert Operations is here with it's first beta. We are very pleased with what we created and we hope that you will have as much fun playing as we had making this little baby :)
<br>
If you're new to NS-CO and mods for Quake3 in general then just take a look at the brand new get started guide which will help you download, install and set up NS-CO. It's an easy to understand step-by-step guide.
<br>
If you're familiar with Quake3 mods, then just go right on and download the files. So far only the beta_10.zip ZIP archive for all operating systems is available. The Self-Installing EXE will be added later. If you happen to have a running file mirror not mentioned on this page, then just <a href="mailto:Democritus@ns-co.net">mail us</a>.
<br>
You might also want to check out the brand new online manual as it includes everything you need to know about NS-CO to play.
<br>
The official Team Mirage NS-CO servers are up! Join in!
<br>
213.146.162.140:27960
<br>
213.146.162.140:27961
<br>
213.146.162.140:27962
<br>
213.146.162.140:27963
<br>
Enjoy the game
<br>
<a href="mailto:democritus@ns-co.net">Democritus</a>
</span>
<br>
You can download the mod from the Barrysworld <a href="ftp://ftp.barrysworld.com/pub/games/quake3/mods/navyseals/official_patches/">FTP</a>, or from one of the sites listed in the files section on the <a href="http://www.ns-co.net/">NS-CO</a> site.</td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>UT - Strike Force 1.75 Released</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:executor2k@barrysworld.com'>executor2k</a> on Sat 09 March 2002 05:03:22 | <a href="comments.php?section=6&index=566" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_unreal.gif' alt='Unreal Tourney' border=0></td><td width="100%" valign=top>BOOM! Yes its out there! Rocking the servers at maximum Capacity!!! Its called: Strike Force 1.75!!!<br><br><span class=quote>"Strike Force 1.75 - Full Install <br><br>Strike Force 1.75 has been recoded from the ground up to provide more action and intense squad based combat. We redeaigned Strike Force for more fun, more action and a faster overall game play experience. Bugs were eliminated from our last version and a smaller, faster version was built. This new version is a FULL install and weighs in at only 110MB. It includes 10 maps with a full map pack following in two weeks. If you tried Strike Force before we suggest you try it again. 1.75 is an all new experience. <br><br>Key Features <br>-10 Real World Maps <br>-Location damage <br>-Muzzle flashes and tracer fire <br>-Super fast server browser <br>-Over 22 Weapons <br>-4 Game Types (TeamDM, DM, Escape & Hostage Rescue) <br>-Weight System (Effects Player Speeds Depnding on amount carried) <br>-Stamina System (Effects speed, weapon accuracy and heart rate) <br>-Over 400 different character animations <br>-Fast paced action for fun while keeping the realism feel. <br>-Whistle at your team mates for attention and use a wide variety of communication commands. <br>-Sprint speeds for faster running and quick attacks <br>-Super balanced weapon specs tested by our 50+ team of beta testers <br>-All new weapon sounds that pack a punch <br>-Flashlight and Nightvision for Darkmatch <br>-Inventory stations for quick access to weapons <br>-Blood trails to follow wounded players and finish them off. <br>-Medals for the best overall players during rounds and matches. <br>-Map vote code to allow players to change game types and maps by voting. Also included kick feature to kick Tkers and problem players. <br>-Totally unique aim system which requires players to actually aim their weapons for better accuracy. Making players think more and work as a team. <br><br>1.75 Download Links - Mac and Linux builds will soon follow. You must remove any prior version of Strike Force. "</span><br><br>by Optimizer - Strike Force Producer<br><br>And off course, u can grab the GOODS ( Win based ) on our BarrysWorld FTP server:<br><a href=ftp://ftp.barrysworld.com/pub/games/unrealtournament/mods/strikeforce/official_patches/sf175_win.exe>Click here to download from the Best FTP Server!!!</a><br><br>U can also get more information at:<br><a href=http://www.strikeforcecenter.com/>StrikeForceCenter</a></td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>BWCSL week 2 roundup posted</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:rogue2@barrysworld.com'>Rogue1</a> on Fri 08 March 2002 15:57:08 | <a href="comments.php?section=27&index=565" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_league.gif' alt='Leagues' border=0></td><td width="100%" valign=top><p>My roundup of the second week of the current season of the Barrysworld Counter-Strike league has been posted and can now be found
<a href="league.php?section=15">here</a>.</p>
</td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>TNG 2.6 released</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:deathwatch@barrysworld.com'>Deathwatch</a> on Wed 06 March 2002 14:35:12 | <a href="comments.php?section=3&index=563" class=blink>Comments (1)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_aq2.gif' alt='Action Quake 2' border=0></td><td width="100%" valign=top>Version 2.6 of <a href="http://www.aq2tng.barrysworld.net">TNG</a>, an Action Quake 2 modification, has been released today. This version is mainly a bugfix version of TNG 2.5<br><br>It has the following changes:<br><span class=quote>From 2.5<br>+ 'stats list' shows average accuracy for each player including player ID<br>+ Stats command followed by player ID will display someone else's stats<br>+ auto_join toggle for forced joins to the team players were on last map<br>+ auto_equip toggle for forced weapons from last map on players<br>+ stats_mode user variable which automaticly sends stats to players at round/map end<br>+ Updated Stats Code<br>+ Showing health icon on screen when bandaging (thanks to Dome)<br>+ Added %P for last damaged player<br>+ Automatic recording of demos added (autorecord command)<br>* TNG now accepts MS formatting on .agq files<br>* Fixed invdrop weapon farming in any teamplay mode<br>* Toggle for the Statistics screen when a map ends (stats_endmap)<br>* Toggle to record stats between rounds (stats_afterround)<br>- Fixed ff_afterround<br>- In matchmode, the forcing of say_team in mm_forceteamtalk 2 wont be off if a team unreadies during a round<br>- Fixed newline problem with announcer (IMPRESSIVE.. 1 FRAG LEFT)<br>- Fixed scoreboard alignment for after game scoreboard<br>- Fixed FPM counter<br>- CTF, fixed dropping players out of teams at the end of a map<br>- CTF, fixed players getting legdamage while Shield is on<br>- Changes %D to show hits in Kevlar Vest and Kevlar Helmet<br>- Fixed a small bug which allowed people to deny kills by typing 'team none'<br>- Fixed a small bug with the HC in hc_single 0 mode<br>- Reset some variables to original values<br>- Fixed bug where rrot would override sv softmap<br>- Fixed rrot selecting same level again<br>- Made rrot a bit more random<br>- Updated Credits menu</span><br><br>You can download TNG from the <a href="ftp://ftp.barrysworld.com">BarrysWorld FTP</a> here:<br><a href="ftp://ftp.barrysworld.com/pub/games/quake2/mods/action/official_patches/server/aq2tng_2.6_x86_win32.zip">AQ2 TNG 2.6 Full (win32)</a><br><a href="ftp://ftp.barrysworld.com/pub/games/quake2/mods/action/official_patches/server/aq2tng_2.6_x86_linux.tar.gz">AQ2 TNG 2.6 Full (linux)</a><br><a href="ftp://ftp.barrysworld.com/pub/games/quake2/mods/action/official_patches/server/aq2tng_2.6_win32_upgrade.zip">AQ2 TNG 2.6 Upgrade (win32)</a><br><a href="ftp://ftp.barrysworld.com/pub/games/quake2/mods/action/official_patches/server/aq2tng_2.6_linux_upgrade.tar.gz">AQ2 TNG 2.6 Upgrade (linux)</a><br><br>The BarrysWorld AQ2 servers are already running TNG 2.6 thanks to Natrat for sorting this out.</td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>Beta Release and League News.</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:cc-excession@barrysworld.com'>Excession</a> on Mon 25 February 2002 00:10:36 | <a href="comments.php?section=5&index=561" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_ut.gif' alt='Urban Terror' border=0></td><td width="100%" valign=top>Good news on the Beta front, as the 2.5 patch has been released, which fixes a couple of problems found in 2.4.<br><br>For the list of download sites, visit the <a href=" http://www.urbanterror.net/">UrbanTerror.net</a> website.<br><br>Now for the league news. As some of you may know, I was the <a href="http://leagues.barrysworld.net/bwq3utl/index.php">BWQ3UTL</a> organiser, but decided to quit and hand the job over to someone else, ukv|Crusader is now in charge of the league.<br><br>Due to this, earlier tonight, a meeting was held by most of the people who are involved with the league, in the league channel (<a href="irc://irc.barrysworld.com/bwq3utl">#bwq3utl</a>) on Quakenet.<br><br>At the meeting it was decided that the organisational structure of the league should change, to make it easier to run smoothly, as a result of this, there will be another meeting taking place in the <a href="irc://irc.barrysworld.com/bwq3utl">League Channel</a>, on Tuesday the 26th of February, at 9pm GMT.<br><br>Any league admins who cant attend should contact <a href="mailto:crusader@hatstand.cx">Crusader</a> if they want to be considered for the position of Divisional Admin.</td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>Urban Terror Bug Fix</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:cc-excession@barrysworld.com'>Excession</a> on Thu 14 February 2002 13:15:22 | <a href="comments.php?section=5&index=559" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_ut.gif' alt='Urban Terror' border=0></td><td width="100%" valign=top>Due to a couple of bugs rearing their ugly heads in Beta 2.4, <a href="http://www.silicon-ice.com/">SID</a> are working on a patch, that will hopefully be out soon.<br>The patch should fix the following problems:<br><br>client info problems caused by incorrect handling of team skins - this led to a variety of problems, especially for server admins. Players may have noticed rapidly flicking skins. Server admins would have seen error messages spammed in their logs. <br><br>extra server data being sent to client too often, causing various lag spikes on the server when people died, joined as spectator, or maps changed among others <br><br>bug that caused servers with bots and min_players set to multiply bots until server was filled (the 999 bot problem) <br><br>bug that allowed players to follow enemies when g_followfriendly was set <br><br>added a delay on zoom in that prevents snipers from gaining full accuracy immediately; this is to stop script exploits that let people fire accurately while unzoomed <br><br>unlocked r_gamma as per community requests <br><br>added 4 new cvars to be locked </td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>Urban Terror Beta 2.4 is here!!</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:cc-excession@barrysworld.com'>Excession</a> on Fri 08 February 2002 22:54:45 | <a href="comments.php?section=5&index=558" class=blink>Comments (1)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_ut.gif' alt='Urban Terror' border=0></td><td width="100%" valign=top>You can download the Beta 2.4 upgrade (21.1mb) if you are currently running Beta 2.3. If this is your first time with Urban Terror, then download the full Beta 2.4 (150mb). Both files will bring you up to the current release.<br>To be honest, I really dont see much point in posting all the links for the download of Beta 2.4 on here, so go to <a href=" http://www.urbanterror.net/">UrbanTerror.net</a> for the full list.</td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>DoD Beta 2 Win32 Client</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:nozzer@barrysworld.com'>Noz</a> on Thu 07 February 2002 01:25:55 | <a href="comments.php?section=4&index=557" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_hl.gif' alt='Halflife' border=0></td><td width="100%" valign=top>And now we have a nice client too.  <a href="http://www.barrysworld.com">BarrysWorld</a>, our esteemed hosts, have it on their FTP now.<br><br><a href="ftp://ftp.barrysworld.com/pub/games/halflife/mods/dayofdefeat/official_patches/win32/dod_v20.exe">ftp://ftp.barrysworld.com/pub/games/halflife/mods/dayofdefeat/official_patches/win32/dod_v20.exe</a><br><br>Enjoy!</td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><table bgcolor="#000000" width="100%" cellpadding=1 cellspacing=0 border=0>
<tr><td>
<table width="100%" cellpadding=2 cellspacing=0 border=0>
<tr>
<td bgcolor="#CECECE" class="btext" width="100%"><b>Day of Defeat Beta 2 Server Files</b> - <span class=bsmall>posted by  <a class='nNewsMailLink' href='mailto:nozzer@barrysworld.com'>Noz</a> on Thu 07 February 2002 01:09:52 | <a href="comments.php?section=4&index=556" class=blink>Comments (0)</a></span></td>
<td bgcolor="#CECECE" width=17><img src="images/item_icon.gif" width="17" height="17" alt="" border="0"></td>
</tr>
<tr>
<td bgcolor="#EEEEEE" colspan=2 class=news>
<table><tr><td valign=top><img src='images/icon_hl.gif' alt='Halflife' border=0></td><td width="100%" valign=top>And here it is, slightly late, but things are rolling...<br><br><span class=quote>Here is our Linux Server Files. LINUX Admins grab these and get your servers up asap !<br><br>Client Files are coming right after these, so be patient !!<br><br>LINUX FILES ONLY !!<br>=======================<br>http://www.fileplanet.com/index.asp?file=84648<br>http://games.gci.net/pub/Half-Life/Mods/DoD/dod_v20.tar.gz<br>http://files.ausgamers.com/?agn=details&id=1526<br>http://www.filefront.com/?file=16648<br>http://www.planetdod.de<br>http://www.daddeln.de/index.php?section=dod20<br>http://dod.boomtown.net/beta2.asp<br>http://mib.esoteric.ca/downloads/dod_v20.tar.gz<br>http://www.dodfrance.com/files/dod/2.0/linux/dod_v20.tar.gz</span><br><br><a href="http://www.dayofdefeatmod.com">DayOfDefeatMod.com</a> have released the Linux server binaries.  Anyone who follows mod updates such as this will know, the clients aren't far off when this happens.</td></tr></table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<p><b>News Archive</b><br>
<div align="center"><span class='nArchiveText'>[1 - 20][<a class='nArchiveLink' href=/default.php?page=1&section=1>21 - 40</a>][<a class='nArchiveLink' href=/default.php?page=2&section=1>41 - 60</a>][<a class='nArchiveLink' href=/default.php?page=3&section=1>61 - 80</a>][<a class='nArchiveLink' href=/default.php?page=4&section=1>81 - 100</a>][<a class='nArchiveLink' href=/default.php?page=5&section=1>101 - 120</a>][<a class='nArchiveLink' href=/default.php?page=6&section=1>121 - 140</a>][<a class='nArchiveLink' href=/default.php?page=7&section=1>141 - 160</a>][<a class='nArchiveLink' href=/default.php?page=8&section=1>161 - 180</a>][<a class='nArchiveLink' href=/default.php?page=9&section=1>181 - 182</a>]</span></div>

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
	<a href="http://www.barrysworld.com" target="_blank"><img src="http://images.barrysworld.com/button_bw.gif" border=0 alt="Hosted by Barrysworld with Barry Power!"></a><br><img src="img/spacer.gif" width="5" height="4" alt="" border="0"><br><a href="http://www.lanpartynation.com/"><img src="http://images.barrysworld.com/nation/button_lp.gif" border=0></a><br><img src="img/spacer.gif" width="5" height="4" alt="" border="0"><br><a href="http://www.rtcwnation.com/"><img src="http://images.barrysworld.com/nation/button_rtcwn.gif" border=0></a><br><img src="img/spacer.gif" width="5" height="4" alt="" border="0"><br><a href="http://www.tribesnation.co.uk/"><img src="http://images.barrysworld.com/nation/button_tnation.gif" border=0></a><br>	</div>
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