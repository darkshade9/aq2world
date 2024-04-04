<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<LINK REV=made href="mailto:monsto@gamedesign.net">
	<META NAME="ROBOTS" CONTENT="ALL">
	<META NAME="keywords" CONTENT="quake2, unreal, tutorials, game design, level design, maps, bsp, quake editing, unreal editing, game editing, unreal tutorials, quake2 tutorials, design tutorials, interviews, discussion, id interviews, level making, quake, quake2, unreal, sin, sin editing, halflife, halflife editing, level making, map making, quake 2, quake 2 level making, game editing, quake2 editing, computer game editing, duke3d, level editing, map making, quake editing, quake2 editing, half-life editing, halflife editing, halflife, half-life, sin, sin editing, id, quake3, quake2, unreal, tutorials, game design, level design, maps, bsp, quake editing, unreal editing, game editing, unreal tutorials, quake2 tutorials, design tutorials, interviews, discussion, id interviews, level making, quake, quake2, unreal, sin, sin editing, halflife, halflife editing, level making, map making, quake 2, quake 2 level making, game editing, quake2 editing, computer game editing, duke3d, level editing, map making, quake editing, quake2 editing, half-life editing, halflife editing, halflife, half-life, sin, sin editing, id, quake3, quake3 arena">
	<META NAME="description" CONTENT="game editing and design. Specifically quake2, unreal, half-life, sin. tutorials, interviews, discussion forums. 100's of quake, quake2, unreal tutorials, covering all aspects of quake, quake2, unreal, half-life, and sin editing. As well as other 3d games. quake quake2 sin halflife half-life unreal">
	<title>Rust - Building Custom Textures</title>
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
						
						<a href=http://info.gamedesign.net/>Info_Design</a> offers you everything you need to design and build maps forTFC. Also stop by it's sister site <a href=http://info.gamedesign.net/Beta/index.htm>Info_Beta</a>, where you can have your map play tested and promoted.						
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
						<b>Take your best shot...</b><Br><a href="http://www.gamedesign.net/potd.php3?date=2001-03-04"><img src="http://www.gamedesign.net/potd/pics/small/20010304.jpg"></a><br>...but will he take it? In the next version of <A HREF="http://lazarus.gamedesign.net">Lazarus</A> that will be entirely up to the mapper. Configurable max range, in other words. But what's that he's eyeballing? Sure looks like a func_tracktrain... and hey, it is. But unlike its HL namesake, this train can loop and do other nifty tricks. Next release won't be available for a month or so, so if you want to put in your two cents or try things out now, sign up to be a Lazarus <A HREF="http://lazarus.gamedesign.net/beta.htm">beta tester</A>.<br><br><b><a href="mailto:rascal@vicksburg.com">David Hyde</a></b><br><br><b><small><a href="http://www.gamedesign.net/potd/">submit a pic!</a></small></b><br><small><a href="http://www.gamedesign.net/old_potd.php3">View the POTD Archives</a></small><br>						
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
						<b>What was the first game you mapped for?</b><Br><small>started: 2001-02-21</small><br><br><form action ="http://www.gamedesign.net/vote.php3" method=post><input type=radio name=choice_id value="338">&nbsp;Half Life / CS<br>
<input type=radio name=choice_id value="328">&nbsp;Doom 1 or 2<br>
<input type=radio name=choice_id value="329">&nbsp;Quake<br>
<input type=radio name=choice_id value="330">&nbsp;Quake2<br>
<input type=radio name=choice_id value="333">&nbsp;other<br>
<input type=radio name=choice_id value="331">&nbsp;Quake3<br>
<input type=radio name=choice_id value="334">&nbsp;Wolf 3d<br>
<input type=radio name=choice_id value="336">&nbsp;Unreal Tournement<br>
<input type=radio name=choice_id value="332">&nbsp;Unreal<br>
<input type=radio name=choice_id value="335">&nbsp;Newer game<br>
<input type=radio name=choice_id value="337">&nbsp;Rise of the Triad<br>
<input type=hidden name=poll_id value=55>
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
						 Clone levels suck. Try using your imagination for once.						</font>
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
						If you run into trouble and can't find the answer in the tutorials here at Rust - READ the FAQ!!!						</font>
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
<A href="http://tribesstation.com">TribesStation</a><br>
<A href="http://unrealism.com">Unrealism</a><br>
<A href="http://valveworld.com">ValveWorld</a><br>
<A href="http://volitionwatch.com">Volition Watch</a><br>
<br>Adventure<br>
<A href="http://adventuregamer.com">Adventure Gamer</a><br>
<br>Alternative<br>
<A href="http://linuxgames.com">LinuxGames</a><br>
<A href="http://qeradiant.com">QERadiant.com</a><br>
<A href="http://vgmusic.com">VGMusic Archive</a><br>
<br>Console<br>
<A href="http://dreamcast-hq.net">DreamCast HQ</a><br>
<A href="http://ps2faction.com">PS2Faction</a><br>
<A href="http://retrofaction.com">RetroFaction</a><br>
<A href="http://xboxfaction.com">XBoxFaction</a><br>
<br>Role-Playing<br>
<A href="http://aoforge.com">AOForge</a><br>
<A href="http://diabloforge.com">DiabloForge</a><br>
<A href="http://eqforge.com">EQ Forge</a><br>
<A href="http://themasquerade.org">The Masquerade</a><br>
<br>Services<br>
<A href="http://3dcheaters.com">3D Cheaters</a><br>
<A href="http://3ddownloads.com">3D Downloads</a><br>
<A href="http://3dfinger.com">3D Finger</a><br>
<A href="http://3dforums.com">3D Forums</a><br>
<A href="http://3dshots.com">3D Shots</a><br>
<br>Sports<br>
<A href="http://carpocalypse.com">Carpocalypse</a><br>
<A href="http://nfsracer.com">NFSRacer</a><br>
<A href="http://sports-gaming.com">Sports Gaming</a><br>
<br>Strategy<br>
<A href="http://dkeeper2.net">DarkSword</a><br>
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
								<li><a href="http://www.gamedesign.net/news/go_news.php3?id=1601">Graphtallica textures</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1600">New Tutorials at DXEditing.com</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1599">Killer Q3 Experience</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1598">Life of a pro designer</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1597">Finger-licking good textures</a><br>								</small>
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
						
								<li><a href="http://www.gamedesign.net/news/go_news.php3?id=1593">Poll update</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1569">Got News?</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1549">Poll results</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1536">Poll Updated</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1516">New poll.</a><br>												
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
<option value="http://blackmail.gamedesign.net">Blackmail</option>
<option value="http://buzzsaw.gamedesign.net">Buzzsaw</option>
<option value="http://prefabs.gamedesign.net">Gamedesign.net Prefabs</option>
<option value="http://grinreaper.gamedesign.net/">Grinreaper</option>
<option value="http://halflife.gamedesign.net">Half-Life ERC</option>
<option value="http://info.gamedesign.net/">info_design</option>
<option value="http://lazarus.gamedesign.net/">Lazarus Mod</option>
<option value="http://maj.gamedesign.net/">Majs Shader Docs</option>
<option value="http://mappack.gamedesign.net">Mappack</option>
<option value="http://mapspy.gamedesign.net/">MapSpy</option>
<option value="http://modulus.gamedesign.net/">Modulus</option>
<option value="http://oshlm.gamedesign.net">OSHLM</option>
<option value="http://qoole.gamedesign.net">Pursuit of Perfection</option>
<option value="http://q3build.gamedesign.net/">q3build</option>
<option value="http://doghouse.gamedesign.net">The Doghouse</option>
<option value="http://heretic2.gamedesign.net">The Mappers Shrine</option>
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
	
<table border="0" cellpadding="0" cellspacing="0" width="560" align="left">
<body>
	<div id="LayoutLYR"><layer id="LayoutLYR" top=0 left=0 visibility=inherit width=580 height=1253 z-index=1><div id="Table1LYR"><layer id="Table1LYR" visibility=inherit top=10 left=10 width=560 height=1198 z-index=1>
	<table id="Table1" border=0 cellspacing=3 cellpadding=0 width=560>
		<tr>
			<td width=554 style="background-color: rgb(0,0,0);">
				<h1><span style="color: rgb(204,204,153);"><i><span style="font-size: medium; font-weight: normal;">Building Custom Textures</span></i><br>A Simple Texture</span></td>
		</tr>
		<tr>
			<td width=554>
				<h4>&nbsp;</h4>
				<h4>e. Beveled edge</h4>
				<p><a href="../../../Building_Custom_Textures/A_Simple_texture/Step_d/pic_d/pic_d.html"><img id="Picture2" height=128 width=64 src="../../../Building_Custom_Textures/A_Simple_texture/Step_d/d_s.jpg" vspace=0 hspace=10 align="RIGHT" border=0></a>As you can imagine, this texture is going to tile like crap. <a href="../../../Building_Custom_Textures/A_Simple_texture/Step_e/bad_tile/bad_tile.html">And here's the proof</a>.</p>
				<p>Actually the brown tile comes together pretty good. But as far as the rest of it is concerned, it's a horrible matchup.</p>
				<p>Tiling, tho, is a whole different story. So for our wall here we're going to add some stuff to separate it at the edges. </p>
				<p>Here's step one to adding a concrete-formed border. You know something that looks like 2x4's were used.</p>
				<ol>
					<li>Add a new Layer, call it ``border bevel."</li>
					<li>Draw a marquee around the top half concrete (above the tile).</li>
					<li>Contract the selection by 2 pixels. </li>
					<li>Invert the selection.</li>
					<li>Subtract-select the bottom half of the image.</li>
				</ol>
				<p>Alternative method of selection...</p>
				<p><b>NOTE: </b>You'll have to do this if you're using photoshop because ``Any portion of the selection border running along the canvas's edge is unaffected" by&nbsp; <i>contract selection</i> command</p>
				<ol>
					<li>Add new Layer call it ``border bevel" (=</li>
					<li>Draw a marquee around the top half of the concrete.</li>
					<li><b>Reduce the grid</b> to 2 pixel snap.</li>
					<li>Subtract-select just inside (2 pixels) the current selection.</li>
				</ol>
				<p>You should now have a funky selection that is just the 2 pixel width all the way around the top edge. The selection marquee should look like a picture frame. Fill it with black. Nice black border huh? Now that you have the selection made . . .</p>
				<ol>
					<li>Without clearing the selection, get the paintbrush tool and select White.</li>
					<li>Paint the left side and the top with the white.</li>
					<li>Set the transparency to about 35%</li>
				</ol>
				<p><a href="../../../Building_Custom_Textures/A_Simple_texture/Step_e/pic_e/pic_e.html"><img id="Picture3" height=128 width=64 src="../../../Building_Custom_Textures/A_Simple_texture/Step_e/e_s.jpg" vspace=0 hspace=10 align="RIGHT" border=0></a>NOW it looks like a border with a little light sourcing from the top left. </p>
				<p>If You're feeling particularly industrious, you could do a couple of things with this part...</p>
				<ul>
					<li>Lighten the opacity of your brush and paint kinda randomly. it will give it a bit more used look. Each time you paint over the same area, it'll get closer to white.</li>
					<li>Use the airbrush tool instead of the brush.</li>
					<li>Use the gradient tool on the sides in some odd (but still generally top to bottom) direction.</li>
					<li>Reverse the black and white to give it a CONCAVE look as opposed to CONVEX.</li>
				</ul>
				<p>Now do the same thing with the section below the tile. Start with a new layer. When done, don't forget to change your grid back to whatever you had it.</p>
				<p>It's a good idea to merge this layer with the bevel of the other section, but it's not imperative. Learning how to do this now will save you big disorganized messes in the future.</p>
				<p>After that little bit of work it <a href="../../../Building_Custom_Textures/A_Simple_texture/Step_e/better_tile/better_tile.html">tiles much better now</a>.</p>
				<h4 style="text-align: right;"><a href="../../../Building_Custom_Textures/A_Simple_texture/Step_f/page10584.php3"><i>Next: A little more detail</i></a></td>
		</tr>
	</table>
	</layer></div><div id="Table2LYR"><layer id="Table2LYR" visibility=inherit top=1219 left=10 width=560 height=34 z-index=2>
	<table id="Table2" border=1 cellspacing=3 cellpadding=1 width=560>
		<tr>
			<td align=center width=548 height=18>
				<p style="text-align: center;">
					<table width=309 border=0 cellspacing=0 cellpadding=0 align=left nof=te>
						<tr>
							<td NOWRAP nof="NB_FYHT">[<a href="../../../Building_Custom_Textures/building_custom_textures.php3">Building Custom Textures</a>]&nbsp;[<a href="../../../Building_Custom_Textures/Texture_Tools/texture_tools.php3">Texture Tools</a>]</td>
						</tr>
					</table>
				</p>
			</td>
		</tr>
	</table>
	</layer></div></layer></div>
</table>
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
 
