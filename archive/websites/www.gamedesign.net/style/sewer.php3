
<!-- This is the rust standard template. dont forget to put meta keywords, meta description, and a title, etc -->

<HTML>
<HEAD>
	<LINK REV=made href="mailto:fishman@gamedesign.net">
	<META NAME="ROBOTS" CONTENT="ALL">
	<META NAME="keywords" CONTENT="quake2, unreal, tutorials, game design, level design, maps, bsp, quake editing, unreal editing, game editing, unreal tutorials, quake2 tutorials, design tutorials, interviews, discussion, id interviews, level making, quake, quake2, unreal, sin, sin editing, halflife, halflife editing, level making, map making, quake 2, quake 2 level making, game editing, quake2 editing, computer game editing, duke3d, level editing, map making, quake editing, quake2 editing, half-life editing, halflife editing, halflife, half-life, sin, sin editing, id, quake3, quake2, unreal, tutorials, game design, level design, maps, bsp, quake editing, unreal editing, game editing, unreal tutorials, quake2 tutorials, design tutorials, interviews, discussion, id interviews, level making, quake, quake2, unreal, sin, sin editing, halflife, halflife editing, level making, map making, quake 2, quake 2 level making, game editing, quake2 editing, computer game editing, duke3d, level editing, map making, quake editing, quake2 editing, half-life editing, halflife editing, halflife, half-life, sin, sin editing, id, quake3, quake3 arena">
	<META NAME="description" CONTENT="game editing and design. Specifically quake2, unreal, half-life, sin. tutorials, interviews, discussion forums. 100's of quake, quake2, unreal tutorials, covering all aspects of quake, quake2, unreal, half-life, and sin editing. As well as other 3d games. quake quake2 sin halflife half-life unreal">
	<title>Rust Style Guide - Sewer Style</title>
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
						
						<a href="http://3dmr.gamedesign.net">3D Map Realm</a> has over 200 Single Player level reviews from Quake2 and Half-Life.						
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
						 But like they say, out with the old, in with the nucleus.						</font>
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
						Compile frequently. If you have a leak or other error it's probably a result of one of the last things you did.						</font>
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
						
							Sewer Style
							
						</b></i></font>
					</td>
				</tr>
			</table>
			<blockquote>
			<font face=helvetica size=-1>
			
			<h3>by <a href="mailto:casan0va@iname.com">CaSaN0va/James Parkwood</a></h3>

<ul>This is a style guide about my favorite texture set, e2u3, or the sewers and powerplant textures!  The following are some pointers and notes on  how to best use the sewer aspect set, but in no way are they rules, just  things I have observed and noted that work very well...</ul>

<h3>A) Think dirty. </h3> 
<ul>The sewers are a grimy place, normally very rusty and very brown and orange, some yellow too.  When I make levels with this texture set, I usually try to place the rust closer to the water, areas that are away from the water are generally less rusty, but can also be more dirty as they don't have water to clean them.  The water should be either  brown or green in color, but clean water can be used if the sewer is  working as a cleansing area for contaminated water.  The bottoms of  septic tanks and waste vats should be littered with junk, and adding a  floating body never hurts.</ul>

<h3>B) Think old.</h3>
<ul>When you're in a sewer, it's generally a place that is rather old, and uncared for, it does its job of moving dirty water away, and clean water in.  Not much else is done in a sewer, keep the technology to a minimum,  having a huge computer bank in the middle of a sewer is a little odd, but there are exceptions to every rule, and the computer could be hidden there to keep it safe.  With old things comes decay, and under-maintainence, so leave broken things lying about, crackes in walls, which act as good secrets poorly fixed things are just as effective.  Since your sewer will probably be a low maintainence area, the popluation should be low aswell, who wants  to hang around a grungey sewer?  Also, no Tank Commanders would be there,  they are too clean to be found there, and relatively new apparently.</ul>

<h3>C) Think underground.</h3>
<ul>Sewers are subterrainian, which means that rocks should be present at one point or another, the deeper you go, the more dark, and the more cavernous. There should be fewer walls as you go deeper, and there should be even less work being done, the sewers should be nearly empty when you reach the bottom infact, if you left a few tanks there, nothing else it would be fitting,  as they would simply sit inactive, until you walk in.  Darker as you get  deeper, and more dusty, there should be fewer pipes, but they should also be in even worse shape, not just for the lack of repair, but seismic activity. Keep the roofs high, and the ventilation abundant, the sewers should have enough air to keep the water fresh, but it should come from high above from fans way up in the roof.  This also works in the way of lighting, casting a tiny, dim light in the floor, making the place seem even more out of the  way.</ul>

<h3>D) Think Gothic and rustic.</h3>
<ul>Sewers weren't always just sewers, at one point they could have acted as transit routes, and bunkers.  Without going too overboard, try to make  complex and visually awe-inspiring structures, you're underground now, so  the roof has to be held up, create twisting and turning support rails and columns.  The more columns the more sturdy, and the more complex, the more atmospheric it becomes.  Pipes should follow relatively supported paths,  so place rails and girders to keep them aloft, but make them more than just a brown or green brush, make cross-beams and support columns.</ul>

<h3>E) Think pipes.</h3>
<ul>A sewer system is just a length of pipes all running in one or more  directions.  First decide the flow of the water, where is it going?  Then  create an interesting route to follow, not just a straight line, with the  sewer underground this isn't possible, there are too many rocks and hazardous areas that could damage the pipes, so make them turn suddenly, or  spontaneously drop or climb the wall.  Keep the pipes in view for most of the map, they act as a guide for the player, areas off of the trail don't have as many pipes, or a certain group of pipes becomes absent.  Clustering pipes is crucial, it gives the illusion of mass fluid transit, by adding a few  long hexagonal or octogonal brushes to simulate binder cables the pipes  become even more convincing.  Try to make the pipes cramp the player at times giving the feel that this place wasn't designed for easy access, only for floating technicians and repair bots.</ul>

<h3>F) Think moving liquid.</h3>
<ul>Where there are pipes there are mass quantities of moving liquid, but water and slime don't just move from one place to another on their own, if possible create a pump to push the fluid around.  The water should filter in and out of pipes and tunnels, it should pour straight down a waterfall instead of a vertical pipe, to save metal.  Always give moving water a current, and a moving texture.  With water and slime flowing back and forth there are bound to be lots of drips and drops, and floods of all sorts, if not natural floods ones made by Strogg hands and claws, create resevoirs and septic tanks for  the water to remain it at the start or midpoint of its journey.  And where there are rocks and volatile areas about, make the pipes suddenly burst and have a flooded room of slime in the players midst, causing them to have to back-track for a bio-suit to get them thru it.</ul>

<h3>G) Think machinery.</h3>
<ul>Pumps and pistons move water, and they move themselves, having a large box that is labled "pump" is simply not enough.  Moving parts should be included this grabs the player's attention telling them, "this is important, this belongs here."  Machinery works in the ways of mission goals as well, you may place a pump that must be disabled so the player can jump from one water trough to the other before they are swept away by the current.  Machinery adds to puzzles, making good jumping things, like giant pistons, or swinging pendulums for dodging will fighting.  Fans underwater to disable, mixers to swim by, it all adds to the interactivity of the environment, making it more real.</ul>

<h3>H) Think population.</h3>
<ul>The Stroggs in your sewer should be carefully selected, not just any Stroggs are thrown in a sewer.  At least not in any place, soldiers and guards are best suited to moniter pump stations along water routes, but enforcers can take their role further down the line, as the water starts to reach its crucial destination.  Gunners are higher up in the chain of command and belong at more gratifying spots, by larger computer terminals, keep them simple tho, and by switches.  Tanks guard flood doors and parasites lurk the halls to keep vermin out.  Brains are a little out of place due to their technical ability, but technicians work as pipe fixers and patchers. The icarus is useless here, unless it is a post-sewer station, where there is open sky for the icarus to maneuver.  Flyers are a little more welcome due to their size, but in general they would probably avoid sewers due to their need for open space to maneuver.  Mutants are at home since they were spawned from the pollution, and Gekks would probably make their home near a sewer outlet as they are amphibious.  Gladiators are a little more proud, and would be very few in the sewers, their counterparts, the beta classes are even less welcome due to their technology, it's just out of place.  The bosses are also less likely to be in the sewer, the Hornet is probable if sky is present, but the Super Tank is used in very wide areas, so his place is elsewhere, unless you have a large drained resevoir for him to patrol.</ul>

<h3>I) Think technology.</h3>
<ul>The technology in a sewer is crucial, switches should exist of pull-switches and plungers instead of blinking buttons.  On pipes and water related things the switch should be a wheel that turns when the player uses it.  Several wheels make the illusion of a complicated pumping system.  Water is driven by spinning, blowing and sucking, so keep fans and turbines around watery areas.  Doors should be designed water-tight and leak proof, and should look like hatches and caps for pipes.  Terminology is important too, calling a hatch a door is wrong, as doors don't exist in sewers, they are hatches to stop water-flow.</ul>

<h3>J) Think size.</h3>
<ul>The sewers are generally cramped, but when it comes to transit of liquid, the pipes are usually large and long.  Turning a player loose in a pipe gives the feel of following the water, they feel like they will get somewhere.</ul>

<h3>K) Think entrance.</h3>
<ul>Find a place that you entered the sewer thru, was it a door from a previous mission, or a lift?  Did they come in thru a pipe, or were they dropped in from the fans in the ceiling?  A pod crashing all the way into a sewer is a bit hard to swallow, but possible given the right circumstances.  Having a pod move thru the pipes is also an idea.</ul>

<h3>L) Think exit.</h3>
<ul>When you've completed your mission in the sewers you're probably going to want to leave.  A believable exit is very important, sewers are subterrainian and don't end with just a door in the middle of a wall.  Lifts will carry you out of the sludge, pipes will guide your way to the surface, and ladders will bring you to the next floor.  Or you could always go down, leading into  a mine, or a hidden bunker.  The possibilities are endless, but also have to be uniform.  Adding a hidden exit, one that suddenly throws you in a  forgotten corner of a storage area or in the middle of a canyon is something that is likely.  The trick is to get the player OUT of the sewer, and not just make them wake up somewhere else, the sewer should spit them up, in a place that is even worse.</ul>

<h3>M) Think stinky.</h3>
<ul>Sewers generally smell bad, so keep fans about and have septic tanks sporting large vent systems.  Even having the player comment thru a message saying  "Whew, this smells nasty" is a way to convey that aspect.</ul>

<h3>Ideas)</h3>
<ul>One idea would be to use the sewers as a cargo transit, floating crates being currented along to the storage area.  Or you could have a lava sewer, where lava is sent to a kiln to be fired into armor, or metals.  Sewers can be ventilation for a mining project, sending lava or water or even gas out of a mine.  They can also be waste disposal for a power plant, or a coolant line, the trick is pipes move things around, try to find a medium, what  you're going to move, and a motive, why its sent there and a means, how it's going to get there.</ul>
<br><br>
<ul>That's about all I have to say about that texture set, but I hope to write more about the others.  Stay in touch.</ul>
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
