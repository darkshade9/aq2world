
<!-- This is the rust standard template. dont forget to put meta keywords, meta description, and a title, etc -->

<HTML>
<HEAD>
	<LINK REV=made href="mailto:fishman@gamedesign.net">
	<META NAME="ROBOTS" CONTENT="ALL">
	<META NAME="keywords" CONTENT="quake2, unreal, tutorials, game design, level design, maps, bsp, quake editing, unreal editing, game editing, unreal tutorials, quake2 tutorials, design tutorials, interviews, discussion, id interviews, level making, quake, quake2, unreal, sin, sin editing, halflife, halflife editing, level making, map making, quake 2, quake 2 level making, game editing, quake2 editing, computer game editing, duke3d, level editing, map making, quake editing, quake2 editing, half-life editing, halflife editing, halflife, half-life, sin, sin editing, id, quake3, quake2, unreal, tutorials, game design, level design, maps, bsp, quake editing, unreal editing, game editing, unreal tutorials, quake2 tutorials, design tutorials, interviews, discussion, id interviews, level making, quake, quake2, unreal, sin, sin editing, halflife, halflife editing, level making, map making, quake 2, quake 2 level making, game editing, quake2 editing, computer game editing, duke3d, level editing, map making, quake editing, quake2 editing, half-life editing, halflife editing, halflife, half-life, sin, sin editing, id, quake3, quake3 arena">
<META NAME="description" CONTENT="game editing and design. Specifically quake2, unreal, half-life, sin. tutorials, interviews, discussion forums. 100's of quake, quake2, unreal tutorials, covering all aspects of quake, quake2, unreal, half-life, and sin editing. As well as other 3d games. quake quake2 sin halflife half-life unreal">
	<META NAME="DC.Description" CONTENT="game editing and design. Specifically quake2, unreal, half-life, sin. tutorials, interviews, discussion">
	<title>Rust Style Guide - Elements of CTF Style</title>
</HEAD>
<BODY bgcolor="#DDDDDD" text="Black" link="Navy" vlink="#333333" alink="#222222" marginheight="0" topmargin="0" marginwidth="0" leftmargin="0">

<table width="768" border="1" cellspacing="0" cellpadding="0" valign="TOP">
	<tr>
		<Td colspan=2 bgcolor=navy valign=top>
			<img src="http://www.gamedesign.net/images/new_logo_rust.gif" width=630 height=88 border=0 alt="">
			<a href="http://www.ugo.com"><img src="/images/ugo.gif" width=90 height=90 border=0 alt="UGO"></a>
		</td>
	</tr>
	<Tr>
		<td colspan=2 bgcolor="#cccccc">
			&nbsp;
			<font face=arial><i><b>
			<a href="http://www.gamedesign.net">News</a>
			&nbsp;&nbsp;
			<a href="http://www.gamedesign.net/content.php3">Content</a>
			&nbsp;&nbsp;
			<a href="http://forums.gamedesign.net">Forums</a>
			&nbsp;&nbsp;
			<a href="http://prefabs.gamedesign.net">Prefabs</a>
			&nbsp;&nbsp;
			<a href="http://www.gamedesign.net/community_profile.php3">Community</a>
			&nbsp;&nbsp;
			<a href="http://www.gamedesign.net/map_of_month/">MotM</a>
			&nbsp;&nbsp;
			<a href="http://www.gamedesign.net/hosting.php3">Hosting</a>
			&nbsp;&nbsp;
            <a href="http://www.gamedesign.net/aboutus.php3">Staff</a>
			&nbsp;&nbsp;
			<a href="http://search.gamedesign.net/">Search</a>
			&nbsp;&nbsp;
			

			</i></b>
		</td>
	
	</tr>
	<tr>
		<td height="1" colspan="2" valign="TOP" bgcolor="#000080">
			<small><font face="" size="-3">&nbsp;</font></small>
		</td>
	</tr>
	<tr>
		<td width=200 bgcolor=#bbbbbb valign=top>
			<font face=helvetica size=-1><center>
			<!--------------------------------------------->
			<Table width=200 valign=top>
				<tr>
					<Td width=200 bgcolor="#555555" valign=top>
						<font face="Helvetica" color="#FFFFFF"><b><i>Hosted Site Updates</i></b></font>
					</td>
				</tr>
				<tr>
					<td width=200 bgcolor=#bbbbbb valign=top>
						<font face=helvetica size=-1>

						<b><a href="http://lazarus.gamedesign.net/">Lazarus Mod</a></b>
		  <br>
		  Make a  working jukebox!
		  <br><b><a href="http://lazarus.gamedesign.net/">Lazarus Mod</a></b>
		  <br>
		  Be a rocketeer!
		  <br><b><a href="http://buzzsaw.gamedesign.net">Buzzsaw</a></b>
		  <br>
		  Buzzsaw relaunches!
		  <br><b><a href="http://www.whatthehal.com/">WhatTheHal</a></b>
		  <br>
		  SmashQ3 Released!
		  <br><b><a href="http://lazarus.gamedesign.net/">Lazarus Mod</a></b>
		  <br>
		  Holy jumping monsters! v1.5!
		  <br>						
						</font>
					</td>
				</tr>
			</table>
			<br><br>
			<!--------------------------------------------->
			<!--------------------------------------------->
			<Table width=200 valign=top>
				<tr>
					<Td width=200 bgcolor="#555555" valign=top>
						<font face="Helvetica" color="#FFFFFF"><b><i>In Focus</i></b></font>
					</td>
				</tr>
				<tr>
					<td width=200 bgcolor=#bbbbbb valign=top>
						<font face=helvetica size=-1>
						
						<a href="http://heretic2.gamedesign.net">The Mappers Shrine</a> is consistantly updated with Heretic 2 Editing related news.						
						</font>
					</td>
				</tr>
			</table>
			<br><br>
			<!--------------------------------------------->
			<!--------------------------------------------->
			<Table>
				<tr>
					<Td width=200 bgcolor="#555555" valign=top>
						<font face="Helvetica" color="#FFFFFF"><b><i>Pic of the Day</i></b></font>
					</td>
				</tr>
				<tr>
					<td width=200 bgcolor=#bbbbbb valign=top>
						<font face=helvetica size=-1>
						<b>House of Death</b><Br><a href="http://www.gamedesign.net/potd.php3?date=2001-06-23"><img src="http://www.gamedesign.net/potd/pics/small/20010623.jpg"></a><br>A shot from the House of Death single player pack for Kingpin.  HoD is available now, check out my website for info and downloads.
www.geocities.com/sonikmapper/<br><br><b><a href="mailto:sonik90@yahoo.com">sonik</a></b><br><br><b><small><a href="http://www.gamedesign.net/potd/">submit a pic!</a></small></b><br><small><a href="http://www.gamedesign.net/old_potd.php3">View the POTD Archives</a></small><br>						
						</font>
					</td>
				</tr>
			</table>
			<br><br>
			<!--------------------------------------------->
			<Table>
				<tr>
					<Td width=200 bgcolor="#555555" valign=top>
						<font face="Helvetica" color="#FFFFFF"><b><i>Weekly Poll</i></b></font>
					</td>
				</tr>
				<tr>
					<td width=200 bgcolor=#bbbbbb valign=top>
						<font face=helvetica size=-1>
						<b>What game will you be editing in the year 2002?</b><Br><small>started: 2001-05-17</small><br><br><form action ="http://www.gamedesign.net/vote.php3" method=post><input type=radio name=choice_id value="345">&nbsp;Doom III<br>
<input type=radio name=choice_id value="351">&nbsp;Other<br>
<input type=radio name=choice_id value="347">&nbsp;Quake 3 Arena<br>
<input type=radio name=choice_id value="346">&nbsp;Duke Nukem Forever<br>
<input type=radio name=choice_id value="348">&nbsp;Unreal / Unreal Tournament<br>
<input type=radio name=choice_id value="350">&nbsp;Return To Castle Wolfenstein<br>
<input type=radio name=choice_id value="349">&nbsp;Medal of Honor<br>
<input type=hidden name=poll_id value=57>
<br><input type=submit value="cast your vote!"></form>
						</font>
					</td>
				</tr>
			</table>
			<!--------------------------------------------->
			<br><br>
			<!--------------------------------------------->
			<Table>
				<tr>
					<Td width=200 bgcolor="#555555" valign=top>
						<font face="Helvetica" color="#FFFFFF" valign=top><b><i>Random Blah</i></b></font>
					</td>
				</tr>
				<tr>
					<td width=200 bgcolor=#bbbbbb valign=top>
						<font face=helvetica size=-1>
						 Is that hair gel?						</font>
					</td>
				</tr>
			</table>
			<!--------------------------------------------->
			<br><br>
			<!--------------------------------------------->
			<Table>
				<tr>
					<Td width=200 bgcolor="#555555" valign=top>
						<font face="Helvetica" color="#FFFFFF" valign=top><b><i>Random Editing Tip</i></b></font>
					</td>
				</tr>
				<tr>
					<td width=200 bgcolor=#bbbbbb valign=top>
						<font face=helvetica size=-1>
						Take screenshots of the first room in Base1.bsp (the first level) using F12 (hey, here's another mini-tip: take screenshots of anything you see in maps that looks interesting so you can refer to it when editing). Now, build the first room of base1.						</font>
					</td>
				</tr>
			</table>
			<!--------------------------------------------->
			<br><br>
			<!--------------------------------------------->
			<Table>
				<tr>
					<Td width=200 bgcolor="#555555" valign=top>
						<font face="Helvetica" color="#FFFFFF" valign=top><b><i>Telenation</i></b></font>
					</td>
				</tr>
				<tr>
					<td width=200 bgcolor=#bbbbbb valign=top>
						<font face=helvetica size=-1>

<br><a href="http://www.telenation.net">Telenation</a><br>
<br>Action<br>
<A href="http://botepidemic.com">Bot Epidemic</a><br>
<A href="http://doomworld.com">DoomWorld</a><br>
<A href="http://duke4.com">Duke4.com</a><br>
<A href="http://eliteforce.net">EliteForce</a><br>
<A href="http://fakkyou.com">FakkYou</a><br>
<A href="http://jedinights.com">Jedi Nights</a><br>
<A href="http://poisonville.com">Poisonville</a><br>
<A href="http://ritualistic.com">Ritualistic</a><br>
<A href="http://scifi-gaming.com">Sci Fi Gaming</a><br>
<A href="http://telefragged.com">TeleFragged</a><br>
<A href="http://unrealism.com">Unrealism</a><br>
<A href="http://volitionwatch.com">Volition Watch</a><br>
<br>Alternative<br>
<A href="http://linuxgames.com">LinuxGames</a><br>
<A href="http://qeradiant.com">QERadiant.com</a><br>
<A href="http://vgmusic.com">VGMusic Archive</a><br>
<br>Console<br>
<A href="http://ps2faction.com">PS2Faction</a><br>
<A href="http://retrofaction.com">RetroFaction</a><br>
<A href="http://xboxfaction.com">XBoxFaction</a><br>
<br>Role-Playing<br>
<A href="http://aoforge.com">AOForge</a><br>
<A href="http://diabloforge.com">DiabloForge</a><br>
<A href="http://themasquerade.org">The Masquerade</a><br>
<br>Services<br>
<A href="http://3dcheaters.com">3D Cheaters</a><br>
<A href="http://3ddownloads.com">3D Downloads</a><br>
<A href="http://3dfinger.com">3D Finger</a><br>
<A href="http://3dforums.com">3D Forums</a><br>
<A href="http://3dshots.com">3D Shots</a><br>
<br>Sports<br>
<A href="http://carpocalypse.com">Carpocalypse</a><br>
<A href="http://racingfaction.com">RacingFaction</a><br>
<A href="http://sports-gaming.com">Sports Gaming</a><br>
<br>Strategy<br>
<A href="http://groundcontrolhq.com">Ground Control HQ</a><br>
<A href="http://relicnews.com">Relic News</a><br>
<A href="http://strategy-gaming.com">Strategy Gaming</a><br>



						</font>
					</td>
				</tr>
			</table>
			<!--------------------------------------------->
			<br><br>
			
			<br><br>
			<br><br><br><br><br><br>
			<br><br><br><br><br><br>
	
		</font>
		</td>
		<td bgcolor=white valign=top width=560 valign=top>
		&nbsp;&nbsp;		
		<!-- AdSpace size=468x60 affiliate=telefragged channel=games subchannel=fps Network=affiliates rating=pg13 --><iframe id=adbanner width=468 height=60 marginwidth=0 marginheight=0 frameborder=0 bordercolor=000000 scrolling=no src="http://mediamgr.ugo.com:80/html.ng/size=468x60&affiliate=telefragged&channel=games&subchannel=fps&Network=affiliates&rating=pg13"><script language="javascript1.1" src="http://mediamgr.ugo.com:80/js.ng/params.richmedia=yes&size=468x60&affiliate=telefragged&channel=games&subchannel=fps&Network=affiliates&rating=pg13"></script><noscript><a href="http://mediamgr.ugo.com:80/click.ng/params.richmedia=yes&UID=$random$&size=468x60&affiliate=telefragged&channel=games&subchannel=fps&Network=affiliates&rating=pg13"><img src="http://mediamgr.ugo.com:80/image.ng/params.richmedia=yes&UID=$random$&size=468x60&affiliate=telefragged&channel=games&subchannel=fps&Network=affiliates&rating=pg13" border=0></a></noscript></iframe><!-- /AdSpace -->
		
		<table valign="TOP">
			<tr>
				<td valign="TOP">
					<font face=helvetica size=-1>
					<table width="280" border="0" cellspacing="2" cellpadding="0" valign="TOP">
						<tr>
							<Td bgcolor=#555555 valign=top>
								<font face=helvetica color=#ffffff><b><i>Other News</i></b></font>
							</td>
						</tr>
						<tr>
							<td valign="TOP" bgcolor="#FFFFFF">
								<font face=helvetica size=-1>
								<small>
								<li><a href="http://www.gamedesign.net/news/go_news.php3?id=1655">Covert Contest</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1654">Shaderlab Update</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1653">Editing info for HL: Blue Shift</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1652">Serious Sam Tutorial</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1651">RollerCoaster Tycoon, Half-Life style.</a><br>								</small>
								</font>
							</td>
						</tr>
					</table>
				</td>
				<td valign="TOP">
					<table width="280" border="0" cellspacing="2" cellpadding="0" valign="TOP">
						<tr>
							<Td bgcolor=#555555 valign=top>
								<font face=helvetica color=#ffffff><b><i>Rust News</i></b></font>
							</td>
						</tr>
						<tr>
							<td valign="TOP" bgcolor="#FFFFFF">
								<font face=helvetica size=-1>
								<small>
						
								<li><a href="http://www.gamedesign.net/news/go_news.php3?id=1650">Forum Updates</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1649">Thank You, raYGunn</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1645">Erp, Help Needed</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1642">Poll Results</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1625">Err... April Fools :P</a><br>												
								</small>
								</font>
							</td>

					
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<!------------------------------>
			
			
			<table width="560" border="0" cellspacing="2" cellpadding="0" valign="TOP">
				<tr>
					<td valign=top>
						<font face="Helvetica" color="navy">
						<b><i>Gamedesign.net Network</i></b>
						<font face=helvetica size=-1><b>
						<form action ="jumpurl.php3" method=post><select name=site_url><option value="http://txtgen.gamedesign.net">.txtGen</option>
<option value="http://3dmr.gamedesign.net">3D Map Realm</option>
<option value="http://3dpg.gamedesign.net">3DPlayground</option>
<option value="http://buzzsaw.gamedesign.net">Buzzsaw</option>
<option value="http://goose.gamedesign.net/news.htm">Goose's Map Domain</option>
<option value="http://grinreaper.gamedesign.net/">Grinreaper</option>
<option value="http://www.valve-erc.com/">Half-Life ERC</option>
<option value="http://info.gamedesign.net/">info_design</option>
<option value="http://lazarus.gamedesign.net/">Lazarus Mod</option>
<option value="http://maj.gamedesign.net/news/">Majs Shader Docs</option>
<option value="http://mapspy.gamedesign.net/">MapSpy</option>
<option value="http://modulus.gamedesign.net/">Modulus</option>
<option value="http://oshlm.gamedesign.net">OSHLM</option>
<option value="http://prefabs.gamedesign.net">Prefabs</option>
<option value="http://qoole.gamedesign.net">Pursuit of Perfection</option>
<option value="http://q3build.gamedesign.net/">q3build</option>
<option value="http://doghouse.gamedesign.net">The Doghouse</option>
<option value="http://sounds.gamedesign.net">The Sound Studio</option>
<option value="http://www.whatthehal.com/">WhatTheHal</option>
<option value="http://wiretap.gamedesign.net/">WireTap</option>
<option value="http://unreal.gamedesign.net">Wolf's Unreal</option>
</select>
<input type=submit value=go>
</form>						
						</b>
						</font>
					</td>
					
					<Td valign=top>
					
<a href="http://www.webdog.org"><img src="http://www.gamedesign.net/images/webdog-btn.gif" width=88 height=31 border=0 alt="Web Dog"></a>&nbsp;

<a href="http://www.telefragged.com"><img src="http://www.gamedesign.net/images/telebutton.gif" width=88 height=31 border=0 alt="Visit my host Telefragged"></a>

<br>

<a href="http://www.gamedesign.net"><img src="http://www.gamedesign.net/images/rustfinal.gif" width=88 height=31 border=0 alt="Web Dog"></a>&nbsp;

<a href="http://www.qeradiant.com"><img src="http://www.gamedesign.net/images/qer_static.gif" width=88 height=31 border=0 alt="We Love QERadiant.com"></a>


					</font>
					</td>
				</tr>
			</table>
	

			<table width="560" border="0" cellspacing="2" cellpadding="0" valign="TOP">
				<tr>
					<Td bgcolor=#555555>
						<font color=white face=helvetica><i><b>
						
							Elements of CTF Style
							
						</b></i></font>
					</td>
				</tr>
			</table>
			<blockquote>
			<font face=helvetica size=-1>
			
			<h3>By: <a href="mailto:clspence@one.net">CDC-Bone</a></h3>


<ul>It's amazing what kind of response one can get from the Quake community when one puts out the call for maps.  When I decided to start a Quake 2 CTF Expansion Pack, I had a couple of dedicated mappers and a need for a good selection of maps from outside sources.
<br><br>
What I've found is a pretty general tendancy for map makers to design their levels for deathmatch.  They then throw in a small flag room and call it a CTF level.  Let me state this explicitly and as plainly as possible.  Deathmatch levels and CTF levels have very different design philosophies.  Just like single player levels can be played as deathmatch, they will never be as good as a dedicated deathmatch level that was designed from the ground up for that purpose.
<br><br>
So, what design philosophies must one have in order to make a playable CTF level?  This article will hopefully give you some pointers as to what enhances a CTF level and what pitfalls to avoid. These are my opinions, which you may or may not agree with.  I don't mind at all.  Go ahead and break all the rules and create a kickass CTF level to prove me wrong :).  I guarantee I'd love to play it.
<br><br>
By the way, I use the CTF level &quot;Ruins of Neominonk&quot; consistently throughout this article to prove my points.  If you hated Neominonk, then you will disagree with every suggestion I make below.  I consider Neominonk to be about as close to perfection as a CTF level as one can get.
</ul>
<h3>Flag rooms:</h3>

<ul>Flag rooms need to be created with very conservative poly counts. Remember, this is the room in which most of the massive firefights will take place on your level.  If you keep the structure simple and straightforward, the low poly counts will contribute to less lagg. Try to show your architectural genius in other parts of the level that won't have as much travel or gunfights.  There's nothing worse than trying to escape from a base with the flag and having to contend with the rendering lag.
<br><br>
A corollary to this is keeping the flag room to a relatively small size.  You can always have the area right outside the base be massive and full of open space.  This is to allow the flag carrier a few moments after grabbing the flag where he doesn't have to worry about lagging out because of being in a huge open area with lots of firing going on.
<br><br>
Remember, when you ask players why they dislike a level, the most common answer (after you get past the subjective artistic comments) is the presence of lag in the base.</ul>

<h3>The Base:</h3>

<ul>I'm seperating the team base from the flag room because often times the base can extend well past the immediate environment of the flag room.  The best example of this concept is in the level &quot;Ruins of Neominonk&quot;.  You have the flag room, and then you have an area just outside the flag room with a set of stairs and a walkway leading out into the next room.
<br><br>
I have a simple rule of thumb that I like to follow when designing bases.  The number of routes into and out of the base must be strictly controlled.  Given the fact that most matches (and on most public servers) average 5 or 6 players on a team, the number of defenders in the base are actually quite limited.  If you give the flag carrier too many routes out of the base, the game will degenerate into a bunch of chases rather than the more static aspect of setting defensive posts.  Levels which induce the &quot;chase&quot; circumstances tend to be levels where teamwork is at its weakest as there is little to no inducement to stay in base and defend it.
<br><br>
I (somewhat pompously) call this rule of thumb &quot;Bone's law of 2/3rds&quot;.  It's listed below:
<br><br>
Either-
<blockquote>Have 2 entrances and 1 dedicated exit.<br>or...<br>Have 1 dedicated entrance and 2 exits.<br>or...<br>Have 2 entrances that double as exits and no dedicated route in or out.</blockquote>
<br><br>
By dedicated I mean that you can ONLY use it for that specific route (in or out).  Neominonk follows this law to perfection (all good levels do).  Neominonk has 2 entrances into the base and 1 dedicated exit through a lower tunnel that leads to a lava pit.</ul>

<h3>Design for the grapple but do not depend on it:</h3>
<ul>
Sadly this is the most common mistake made by novice CTF level makers.  They create a level with areas that can only be accessed and exited from using the grapple.  Some have even positioned the flag so that the player must grapple to it to grab it.<br><br>
The level should be playable in every respect without the use of the grapple.  I can't make it any clearer than that.  Weapons, ammo, flags, and other items should be accessible to the non grapple user. 
<br><br>
Does that mean that EVERYTHING on the level should be accessible to the non grapple user?  Not at all!  I'm saying that not using the grapple shouldn't make the level unplayable.
<br><br>
Why is this rule important?  It's no surprise to anyone who has played Quake 2 CTF for any length of time at all that switching to the grapple takes about 1.5 seconda, and the rate at which the grapple fires is somewhat...slow.  Forcing people to constantly switch from their weapons to the grapple in order to navigate the level will frustrate people to no end.
<br><br>
As a flag carrier fighting for his life to capture, I would not want to play on a level that would force me to stop firing my weapon and switch to grapple in order to complete the capture.  I would much rather hunt down the author of that level and take away his toys until he learned not to abuse them :).</ul>

<h3>Avoid the BFG and spare the Hyperblaster:</h3>
<ul>
This rule caused somewhat of a disagreement between Zoid and I during one of his chats on #q2ctf on irc.gamesnet.net.  I stand by it, however.  The BFG is too powerful of a defense buster to be used in CTF.  I see it every day on Quake 2 CTF servers on &quot;McKinley Revival&quot;.
<br><br>
The fact is that although McKinley Revival provides places to hide from a BFG blast, the very act of hiding means that the defense can't do its job of DEFENDING THE FLAG.  The offense can fire off several BFG blasts in a row to keep the defense's heads down while the flag carrier safely and easily runs away without any contention. This means that defending in McKinley Revival against even a moderately competant offense is a futile gesture.
<br><br>
My objections to the hyperblaster isn't for gameplay reasons. Frankly, the hyperblaster lags any HPB on a less than perfect connection.  A hyperblaster weilded by a player with the Haste Tech will even lag a 28.8K modem on a chrystal clear connect with no packet loss.  There's just too much information sent down the line when a Haste-ed hyperblaster fires for an HPB modem to keep up with.
<br><br>
This has made q2ctf5 virtually unplayable by most HPB players. Even Zoid recognized this.  There might be a change to the code base in the future which will turn hyperblaster bolts into a special entity that is kept track of on the client side (so no bandwidth is wasted updating the position of the hyperblaster bolts).  Once this is fixed, I would have no objections to having a hyperblaster on my level.</ul>

<h3>Keep people hungry for armor:</h3>

<ul>How many times has this happened to you?  Some guy with a power shield and the Protection rune waltzes into your base, takes the flag, and moseys back to his base.  You chain-gun him until you run out of bullets.  You put a double barrel to the back of his head and pump rounds into him all the way back until he captures your flag.
<br><br>
The fact is that the power shield is too powerful.  You can combine power armor and body armor to get 400+ points of armor.  Not only that, but anyone wearing power armor will NOT be damaged in any way until the power runs out.  Given the relative size of most levels, frankly you just may not have the time to wear down the defenses of the flag carrier in time before he caps, no matter how many rounds you pump into him.
<br><br>
This leads to a &quot;to heck with this, I can be frustrated doing other things like trying to get a date tonight&quot; attitude.  Even though Zoid reduced the effectiveness of the power armor in the most recent CTF release, you can still run into situations where a flag carrier can be impervious to damage.
<br><br>
The answer?  Keep 'em armor hungry!  Full body armor should be a specialty item like the megahealth and the quad.  Combat armor should be used sparingly (like 1 in each base).  Jacket armor and armor shards (use few of these as well since they can accumulate to large amounts of armor fairly quickly) should be the main staple diet of defensive wardrobes. 
</ul> 

<h3>Keep people hungry for ammo:</h3>

<ul>I have played CTF levels where it's impossible to run out of railgun/rocket ammo.  You literally can collect so much of it that you max out in a very short time.  While some people don't see this as a problem, I submit that ammo control is an integral part of teamplay.  
It's also a great control on how effective the Big Weapons can be on a level.  If you have to ration out the use of the big damage weapons, you will be forced to rely on outthinking the flag carrier rather than overpowering him with sheer volume of fire.  This presents problems for the poor guy with Haste, but he can make up for his chronic lack of ammo by using less powerful weapons at twice the fire rate.
<br><br>
I always suggest laying in a good store of bullets and shotgun shells throughout the flag room and base.  Keep the rockets/slugs away from the bases (or a VERY limited supply within the base) to force the defenders to come out and rearm if they want to keep using the Big Weapons.
<br><br>
Obviously if you ignore the above rule and go armor crazy, you'll need a supply of ammo commesurate with the volume of fire needed to take down a guy with 400+ points of armor.  You can't apply one of these rules and not the other.
<br><br>
Remember, tension and intensity arises from fear.  With these two rules you should keep the players in constant fear of dying with the flag or running out of ammo trying to defend it.  Just don't go TOO crazy with the starvation and leave people running around the level using nothing but a blaster.  Remember, the small guns should have plenty of ammo lying around (shells/bullets).  The Big Weapons should be limited and not easily accessible by defenders.</ul>


<h3>Gameflow:</h3>

<ul>This is what sets CTF maps far apart from DM-only maps and single player maps.  While DM-only maps tend to have a flow pattern that is a circlular in nature, CTF maps are almost totally linear.  This isn't to say that CTF maps are designed in one straight line (though many are).
<br><br>
There are 5 parts to any well designed CTF level.  There are the 2 bases (in this case we include the flag rooms), we have the outer entrance to the bases (1 for each base), and we have the battlefield which is usually located equidistant to each base.
<br><br>
The flow should always go directly from each area into its adjacent area.  If you have a route that goes off into never-never land, just lop it off.
<br><br>
This does not mean that you can't have multiple routes through each area, but all routes should lead to the next area in the progression.
</ul>

<h3>Conclusion:</h3>
<ul>
I want to take a moment here to point out a pretty damned good CTF level that breaks nearly every applicable rule I stated above. That's American McGee's Capturephobopolous (I probably mangled that). It's proof that a good level designer can break the rules and still come out with a good CTF level.

<a href="mailto:clspence@one.net">CDC-Bone</a><BR>Project Leader for the Quake 2 Expansion Pack (unofficial)<BR>Clan Drooling Chickens.</ul></blockquote>

</div>
<br><br><br><br>
			
			</font>
			</blockquote>

</td>
	</tr>
	<tr>
		<td colspan=2 bgcolor=#999999 width=768><center><font face=helvetica size=-2><b>

All trademarks used are properties of their respective owners Copyright ©
1999, <A href="mailto:fishman@gamedesign.net">Shane Sherman(Fishman)</a>. All rights reserved.
			</b></font></center>
		</td>
	</tr>
	
</table>


</BODY>
</HTML>
