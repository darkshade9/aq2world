
<!-- This is the rust standard template. dont forget to put meta keywords, meta description, and a title, etc -->

<HTML>
<HEAD>
	<LINK REV=made href="mailto:fishman@gamedesign.net">
	<META NAME="ROBOTS" CONTENT="ALL">
	<META NAME="keywords" CONTENT="quake2, unreal, tutorials, game design, level design, maps, bsp, quake editing, unreal editing, game editing, unreal tutorials, quake2 tutorials, design tutorials, interviews, discussion, id interviews, level making, quake, quake2, unreal, sin, sin editing, halflife, halflife editing, level making, map making, quake 2, quake 2 level making, game editing, quake2 editing, computer game editing, duke3d, level editing, map making, quake editing, quake2 editing, half-life editing, halflife editing, halflife, half-life, sin, sin editing, id, quake3, quake2, unreal, tutorials, game design, level design, maps, bsp, quake editing, unreal editing, game editing, unreal tutorials, quake2 tutorials, design tutorials, interviews, discussion, id interviews, level making, quake, quake2, unreal, sin, sin editing, halflife, halflife editing, level making, map making, quake 2, quake 2 level making, game editing, quake2 editing, computer game editing, duke3d, level editing, map making, quake editing, quake2 editing, half-life editing, halflife editing, halflife, half-life, sin, sin editing, id, quake3, quake3 arena">
	<META NAME="description" CONTENT="game editing and design. Specifically quake2, unreal, half-life, sin. tutorials, interviews, discussion forums. 100's of quake, quake2, unreal tutorials, covering all aspects of quake, quake2, unreal, half-life, and sin editing. As well as other 3d games. quake quake2 sin halflife half-life unreal">
	<title>Rust - Quake2 Tutorials - "angles" key/value pair</title>
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
						
						Every single Quake 2 Entity is documented and explained at the <a href="http://www.gamedesign.net/quake2/quake2tutorials.shtml">Quake 2 Tutorials Page</a> here on Rust.						
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
						<b>Stonhenge3001</b><Br><a href="http://www.gamedesign.net/potd.php3?date=2001-06-14"><img src="http://www.gamedesign.net/potd/pics/small/20010614.jpg"></a><br>This is one of 4 rooms in a "time" arena: I imagined that stonhenge was a portal which allowed people to travel through time.
It's a beta version, download avaible.
Who is interested can email me.	<br><br><b><a href="mailto:m.quintavalle@libero.it">Marco Quintavalle</a></b><br><br><b><small><a href="http://www.gamedesign.net/potd/">submit a pic!</a></small></b><br><small><a href="http://www.gamedesign.net/old_potd.php3">View the POTD Archives</a></small><br>						
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
						 One morning I shot an elephant in my pajamas.  How he got in my pajamas, I don't know.
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
						<font face="Helvetica" color="#FFFFFF" valign=top><b><i>Random Editing Tip</i></b></font>
					</td>
				</tr>
				<tr>
					<td width=200 bgcolor=#bbbbbb valign=top>
						<font face=helvetica size=-1>
						Build a prefab with the target_goal and 2 target_helps (one for the primary and secondary messages) that way you aren't constantly adding 3 entities all the time -
you just need to change the message of the target_help entities. (And the more obvious - 						</font>
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
		<!-- AdSpace cat=games cat2=games page=111 site=telefragged size=468x60 --><iframe width=468 height=60 marginwidth=0 marginheight=0 frameborder=0 bordercolor=000000 scrolling=no src="http://adserver.ugo.com:80/html.ng/cat=games&cat2=games&page=111&site=telefragged&size=468x60"><script language="javascript1.1" src="http://adserver.ugo.com:80/js.ng/params.richmedia=yes&cat=games&cat2=games&page=111&site=telefragged&size=468x60"></script><noscript><a href="http://adserver.ugo.com:80/click.ng/params.richmedia=yes&UID=$random$&cat=games&cat2=games&page=111&site=telefragged&size=468x60"><img src="http://adserver.ugo.com:80/image.ng/params.richmedia=yes&UID=$random$&cat=games&cat2=games&page=111&site=telefragged&size=468x60" border=0></a></noscript></iframe><!-- /AdSpace -->
		
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
								<li><a href="http://www.gamedesign.net/news/go_news.php3?id=1654">Shaderlab Update</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1653">Editing info for HL: Blue Shift</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1652">Serious Sam Tutorial</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1651">RollerCoaster Tycoon, Half-Life style.</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1647">Want to learn Worldcraft?</a><br>								</small>
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
						
							"angles" key/value pair
							
						</b></i></font>
					</td>
				</tr>
			</table>
			<blockquote>
			<font face=helvetica size=-1>
			
<b>Jump pads in Q2? You betcha!</b>
<br>
<br>
<b>by: David Hyde and Mad Dog</b>  
<br>
<br>
OK, this is a long story, but you goons are required to read the whole thing... that's the price you pay for cool information. My <a href=http://tarot.telefragged.com>  
Tarot</a> teammate and spiritual advisor Monsto Brukes wanted to simulate Q3 jump pads in Q2 for map testing purposes. Tarot's bit_twiddling nerd guy (that's me) opened up the Q2 source and started to plug in an elevation value. But wait... he found that trigger_push code refers to the "angles" key... but that's not right he says... trigger_push just uses "angle". Well it turns out id didn't trust you mapper goons to be able to do a little simple trigonometry, so they published the input for trigger_push as "angle" only, but the code does not have that limitation.
<br>
<br>

The "angles" values are pitch (up/down), yaw (left/right) and roll (fall over). If "angle" is specified for an entity, then the code automatically sets "angles" to 0,angle,0... and these values are used for the entity. But what happens if instead of specifying "angle" in the .map file, you set the three "angles"?... heh heh... you know the answer, don't ya? And all it takes is a little math to translate those angles into movement directions... but not to worry, Tarot's bit_twiddling nerd has done that for you. The translations performed by the game source end up making a positive pitch down from horizontal. Yaw is unaffected by this, so you'd use the same angle you've previously used for the angle key. And roll is ignored for trigger_push, which is a shame, really... it would be nice to have a trigger_push that made you do flips. Anyhow... quick example, and I'm sure you can take it from there. Say you want the trigger_push to push you up 60 degrees from horizontal and to the west. Set "angles" to _60 180 0. That's it.
<br>
<br>

So how do you go about using this info in your editor? If your editor allows you to enter user_defined keys (qED, QERadiant, QuArk), you're all set. Just enter "angles" for the key and "<_pitch> <yaw> 0" for the value. If you're using Tread, open up quake2.gdf, find trigger_push, and enter the following below the "angle" line:
<br>
<br>

def_key : string : "angles" : "pitch yaw roll" : ""
<br>
<br>

If you're using WorldCraft, Mad Dog has already done the work for you... <a href=http://home.earthlink.net/~tonykat127/mapediting/fgd_q2.zip>get his new .fgd file.</a> If you're using Qoole, stop. (ed. I’d have to agree.)
<br>
<br>

One qualifier that could foul this up for you: If your editor forces an "angle" key to be written to the .map file, "angles" will still work as long as it occurs after the "angle" definition. So if you try this and you get the same old trigger_push behavior, open up your .map file in a text editor, find the trigger_push, and delete the "angle" line.

<br>
<br>

The syntax for an 'angles' keyvalue is:
<br>
<br>

"angles" "pitch yaw roll"
<br>
<br>

Pitch can be any number from _90 to 90; negative numbers "aim" up and positive numbers "aim" down. Yaw can be virtually any positive number, generally 0_360 (this would be the same value one would typically use for 'angle'). Roll can be any number from _180 to 180; this affects the "canted" view one can achieve with an info_player_intermission. Depending on the entity, a "roll" value of anything other than 0 can yield no result, an interesting result, or a result you want to avoid. Some example entities by way of explanation:
<br>
<br>

<b>Ammo</b>. Ammo need not lie flat. If you want to put a box of ammo on a tilted floor, or simulate an item amid a jumble of other debris you can. Note that the bounding box of the ammo does not change position or orientation, so you may need to work in a wedge_shaped mist brush in there to get the visual effect just right. Giving values to all three angles is fine.
<br>
<br>

<b>Player starts, deathmatch starts, teleporters.</b> DM spawn points and teleporter/dest platforms can be canted just like ammo. However the 'angles' value translates into the direction the player looks when he spawns. So if you want the player to spawn up on a high ledge, looking down on the action, you could give the spawn point an 'angles' value of "45 0 0", for example. Even if the player has freelook off and lookspring on it works fine. I strongly advise against using a "roll" value of anything other than 0, since the player gets stuck with the canted view. Until he hits a teleporter dest which straightens him out anyway. Unless of course you want to simulate drunkeness.
<br>
<br>

<b>Strogg ships, Vipers.</b> Simulate diving or launching ships. Or a crashed misc_bigviper. Looks cool; use all 3 values. Advise the use of a playerclip brush to avoid weird clipping problems with the misc_bigviper model in the game.
<br>
<br>

<b>Banner.</b> All 3 values work, but the appearance is odd; so "roll" has little value __ but a slight "pitch" effect could have its place I suppose.
<br>
<br>

<b>Monsters.</b> Good for a laugh. Give a monster_soldier an 'angles' keyvalue of "60 0 0" and he "swims" on the floor. Too bad monsters drown in water. Death animations can be even funnier.
<br>
<br>

<b>Target_blasters.</b> Want a blaster that shoots up or down at an angle? No problem. "Roll" values don't matter. Works with lasers too, if you don't want to bother with an info_null. And it works with the target_splash too.
<br>
<br>

<b>Doors and buttons.</b> This is very very cool. You can have multi_piece doors that move up/down at angles, and buttons that recess properly into angled consoles. Figuring out 'lip' may be a problem; I haven't experimented but I suspect that the game uses either a horizontal or vertical orientation for calculating 'lip'; so I would avoid using _45 and 45 for "pitch", so you can get predictable results. Again, "roll" doesn't matter.
<br>
<br>

<b>Weapons, keys, armor, etc.</b> Spinning crap seems to ignore 'angles'. Too bad.
<br>
<br>

Anyway these are some ideas. In order to use the 'angles' key properly in Worldcraft, you should set 'angle' to '0'; this removes the 'angle' key from the .map file. My .FGD prompts you for "pitch yaw roll" for entities which can make use of "roll", and it prompts you for "pitch yaw 0" for entities which can't. 
<br>
<br>
			
  The team was so fired up about this that we built a fun DM map for you guys to check out. We started out making a small tutorial sort of thing, but it got out of hand pretty quickly and turned into the real deal. 
<br>
<br>

<a href=http://tux.telefragged.com/file.pl?filename=jumpbch.zip&dir=telefragged/tarot/ryo/>You can download the map here (589Kb)</a>. The map is an r_speeds hog, so if you don't have a 3D card please don't bother. The .map file is included.
<br>
<br>

You can download Mad Dogs .FGD <a href=http://home.earthlink.net/~tonykat127/mapediting/fgd_q2.zip>here</a>.
<br>
<br>
 												
David Hyde<br>

<a href=http://www.magnolia.net/~rascal>Home Page</a>
<br>
<a href=http://mapspy.gamedesign.net>MapSpy 1.0</a>
<br>
<a href=http://www.planetquake.com/gensurf>GenSurf 1.7</a>
<br>
<a href=http://tarot.telefragged.com>Tarot Game Development</a>
<br>
<br>

 Mad Dog<br>
<a href=http://home.earthlink.net/~tonykat127/>Home Page</a>
<br>
<br>

Note: This tutorial was copied almost verbatim from the <a href=http://forums.gamedesign.net>Rust Forums</a> with minimal editing by <a href=mailto:raygunn@gamedesign.net>raYGunn</a>. It is also interesting to note the discovery of the usage of the angles key by the authors was independent and for different purposes.<br><br>
<br>
<br>

 			
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
