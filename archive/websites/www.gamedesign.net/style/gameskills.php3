
<!-- This is the rust standard template. dont forget to put meta keywords, meta description, and a title, etc -->

<HTML>
<HEAD>
	<LINK REV=made href="mailto:fishman@gamedesign.net">
	<META NAME="keywords" CONTENT="quake2, unreal, tutorials, game design, level design, maps, bsp, quake editing, unreal editing, game editing, unreal tutorials, quake2 tutorials, design tutorials, interviews, discussion, id interviews, level making, quake, quake2, unreal, sin, sin editing, halflife, halflife editing, level making, map making, quake 2, quake 2 level making, game editing, quake2 editing, computer game editing, duke3d, level editing, map making, quake editing, quake2 editing, half-life editing, halflife editing, halflife, half-life, sin, sin editing, id, quake3, quake2, unreal, tutorials, game design, level design, maps, bsp, quake editing, unreal editing, game editing, unreal tutorials, quake2 tutorials, design tutorials, interviews, discussion, id interviews, level making, quake, quake2, unreal, sin, sin editing, halflife, halflife editing, level making, map making, quake 2, quake 2 level making, game editing, quake2 editing, computer game editing, duke3d, level editing, map making, quake editing, quake2 editing, half-life editing, halflife editing, halflife, half-life, sin, sin editing, id, quake3, quake3 arena">
<META NAME="description" CONTENT="game editing and design. Specifically quake2, unreal, half-life, sin. tutorials, interviews, discussion forums. 100's of quake, quake2, unreal tutorials, covering all aspects of quake, quake2, unreal, half-life, and sin editing. As well as other 3d games. quake quake2 sin halflife half-life unreal">
		<META NAME="DC.Description" CONTENT="game editing and design. Specifically quake2, unreal, half-life, sin. tutorials, interviews, discussion">
	<title>Rust Style Guide - Game Skills</title>
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
						 Take that, you filthy animal...						</font>
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
						Playtest playtest playtest. A thousand times playtest. And then _listen_ to the playtesters. Ask them to send you a list of (minimum) 5 things they didn't like about the
level, or where they thought it could be improved on. 						</font>
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
						
							Game Puzzles and Game Skills
							
						</b></i></font>
					</td>
				</tr>
			</table>
			<blockquote>
			<font face=helvetica size=-1>
			
			<h5>(excerpt from Design doc for <A HREF="http://www.rebelboatrocker.com/" target="_top">Prax War</a>, originally appeared in a .plan update on June 6, 1998. Reprinted with permission)</h5>

<ul>I wrote the following text for a preliminary design document for Prax War about a year ago for EA legend Richard Hilleman.
<br><br>
I found it recently and realized it presents several axioms and principles of game design that others might take an interest in.
<br><br>
<u>Note</u>: Some of the text below refers to 'game skills' that have been 'categorized above'. This is referring to the entire skill set for the game Prax War which, for obvious reason, I haven't included here. So, you won't be finding any 'game skills' above the text that mentions them.</ul>


<h3>A Word About Game Skills:</h3>

<ul>The execution of any game skill during the learning phase of that skill should properly reward the player for success. The reward could simply be a sense of accomplishment, it could also be the availability of a game item or powerup, or it could even be a game cinematic sequence.
<br><br>
The value of the reward will often be dictated by the importance of the skill and challenge, the difficulty of its execution and penalty for failure (risk of execution). Often, the difficulty of the challenge and the penalty for failure will be inversely proportional. Only in advanced levels or critical moments of game play do both risk and difficulty escalate proportionally. The idea here is that if the move is difficult, the game designer shouldn't automatically kill the player for failing the move. If the move is simple, like walking across a wide catwalk, the risk can be great (falling to your death). At first, the challenge of the game is in developing the skills the game requires. Another challenge that is introduced during the game is the combination of game skills to create a puzzle.</ul>

<h3>Game Puzzles and Game Skills:</h3>

<ul>Besides the skills the player must develop to succeed, Prax War will challenge the player with puzzles that assume game skills already exist. In this game, a &quot;puzzle&quot; is defined as a specific challenge set up by the game designer which requires two or more skills and knowledge of the correct solution to complete. For example, jumping up to a higher ledge is not a puzzle - it's a skill. But, a too high ledge that can be reached if the player makes his jump from a crate that he grabbed and moved there himself is a puzzle. The skills of jumping and grabbing and carrying and dropping are assumed. It is the combination of those skills that provides the puzzle.
<br><br>
Above, I've categorized the game skills in levels. These are not meant to be actual game levels (maps or zones) but varying degrees of difficulty. More advanced degrees of difficulty can be easily created by combining skills challenges to create a puzzle. For example, a simple puzzle might require the player to crouch while activating a switch that allows access to the next section of a map. Learning to crouch is very easy as is learning to look in all directions (to find the switch). Activating a switch with the Use Key is also a relatively simple task. The combination of those skills provides a simple puzzle, but a task that is admittedly more difficult than simply moving. 
<br><br>
An example of a difficult puzzle might be one that requires many difficult skills. A special object might have to be thrown through a hanger window next to a vehicle. Then, the player must perform a running leap across a chasm to enter the hanger while shooting a switch trigger in mid air to ensure the hanger door will open when the player needs to land on solid ground. Then, the player must again lift the object and throw it into a complex vehicle like a helicopter which he must then operate and fly through enemy fire before reaching a pool of water that the object must be dumped into. The player might then be required to jump into the water and swim while carrying the object into the next area and so on. The object might be the head of an enemy general who's eyes are needed to pass a retinal scan locked door in an enemy compound. The goal of the puzzle might be stated for the player (&quot;use the general's eyes to pass the retinal scan door&quot;), but the difficulty in the puzzle is figuring out how to move the head from the area where you retrieve it to the area with the lock.
<br><br>
So, by compounding skills of varying difficulty Prax War can create endless possibilities for clever puzzling and unique challenges.  The goal of the single player Prax War campaign is to provide an increasingly challenging and puzzling environment that offers plenty of reward and many areas and tests to increase skill.
<br><br>
<a href="mailto:randy@rebelboatrocker.com">-DuvalMagic</a></ul>
</blockquote>
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
