<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<LINK REV=made href="mailto:monsto@gamedesign.net">
	<META NAME="ROBOTS" CONTENT="ALL">
	<META NAME="keywords" CONTENT="quake2, unreal, tutorials, game design, level design, maps, bsp, quake editing, unreal editing, game editing, unreal tutorials, quake2 tutorials, design tutorials, interviews, discussion, id interviews, level making, quake, quake2, unreal, sin, sin editing, halflife, halflife editing, level making, map making, quake 2, quake 2 level making, game editing, quake2 editing, computer game editing, duke3d, level editing, map making, quake editing, quake2 editing, half-life editing, halflife editing, halflife, half-life, sin, sin editing, id, quake3, quake2, unreal, tutorials, game design, level design, maps, bsp, quake editing, unreal editing, game editing, unreal tutorials, quake2 tutorials, design tutorials, interviews, discussion, id interviews, level making, quake, quake2, unreal, sin, sin editing, halflife, halflife editing, level making, map making, quake 2, quake 2 level making, game editing, quake2 editing, computer game editing, duke3d, level editing, map making, quake editing, quake2 editing, half-life editing, halflife editing, halflife, half-life, sin, sin editing, id, quake3, quake3 arena">
	<META NAME="description" CONTENT="game editing and design. Specifically quake2, unreal, half-life, sin. tutorials, interviews, discussion forums. 100's of quake, quake2, unreal tutorials, covering all aspects of quake, quake2, unreal, half-life, and sin editing. As well as other 3d games. quake quake2 sin halflife half-life unreal">
	<title>Rust - Building Custom Textures: Tools</title>
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
						
						<a href="http://unreal.gamedesign.net">Wolf's Unreal</a> has some of best Unreal editing tutorials around.						
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
						<b>Fates Templar</b><Br><a href="http://www.gamedesign.net/potd.php3?date=2001-07-20"><img src="http://www.gamedesign.net/potd/pics/small/20010720.jpg"></a><br>"He said that the geometry of the dream-place he saw was abnormal, non-Euclidean, and loathsomely redolent of spheres and dimensions apart from ours."<br><br><b><a href="mailto:ad5_q3@hotmail.com">AD5</a></b><br><br><b><small><a href="http://www.gamedesign.net/potd/">submit a pic!</a></small></b><br><small><a href="http://www.gamedesign.net/old_potd.php3">View the POTD Archives</a></small><br>						
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
						 I'm so bright mah daddy called me son. -Monsto						</font>
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
						Playtest until the sight of your map makes you physically ill. Then playtest it one more time.						</font>
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
								<li><a href="http://www.gamedesign.net/news/go_news.php3?id=1662">Level Design Articles</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1661">New Aztec</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1659">Weekend Update</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1657">Weekend Update</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1656">Tex-Pack 8 Release</a><br>								</small>
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
						
								<li><a href="http://www.gamedesign.net/news/go_news.php3?id=1660">Forums</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1658">Real-Life(tm)</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1650">Forum Updates</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1649">Thank You, raYGunn</a><br><li><a href="http://www.gamedesign.net/news/go_news.php3?id=1645">Erp, Help Needed</a><br>												
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
	
<table border="0" cellpadding="0" cellspacing="0" width="560" align="left">
	<div id="LayoutLYR"><layer id="LayoutLYR" top=0 left=0 visibility=inherit width=580 height=10020 z-index=1><div id="Table1LYR"><layer id="Table1LYR" visibility=inherit top=10 left=10 width=560 height=1717 z-index=1>
	<table id="Table1" border=0 cellspacing=3 cellpadding=0 width=560>
		<tr>
			<td width=554 style="background-color: rgb(0,0,0);">
				<h1><span style="color: rgb(204,204,153);"><i><span style="font-size: medium; font-weight: normal;">Building Custom Textures</span></i><br>The Tools</span></td>
		</tr>
		<tr>
			<td width=554>
				<h3>
					<table width=331 border=0 cellspacing=0 cellpadding=0 align=left nof=te>
						<tr>
							<td NOWRAP nof="NB_FYHT">[<a href="../../Building_Custom_Textures/building_custom_textures.php3">Building Custom Textures</a>]&nbsp;[<a href="../../Building_Custom_Textures/A_Simple_texture/a_simple_texture.php3">A Simple texture</a>]</td>
						</tr>
					</table>
				</h3>
			</td>
		</tr>
		<tr>
			<td width=554>
				<h4><br>a. The Painter</h4>
				<p>Thru the tutorial I used <a href="http://www.adobe.com">Adobe PhotoShop</a> but have tried to keep my language generic enough so that you could use any graphic program with similar capability. Speaking of which, here's links to a couple. There's probably more out there, but this is just to get you started.</p>
				<ul>
					<li><a href="http://www.gimp.org/">The Gimp</a><br>It's a some-what cross platform, GNU Licensed, 32bit painting program. I've used it a little bit, and it's a GTK interface similar to GTK Radiant. It's a multi-windowed interface (not master-window like most windows programs), but seems to be very powerful at least on the level of Paint Shop Pro. Best of all, it's freeware.</li>
					<li><a href="http://www.jasc.com">Paint Shop Pro</a><br>Some would call it a poor-mans Photoshop. At only $100 (it's only money right?) it will give you 80% of the features of Photoshop without the extra 80% in $$$. Also good for low memory systems (64mb)</li>
					<li><a href="http://www.adobe.com">Adobe PhotoShop</a><br>Industry Standard, does everything, $600. Nuff Said.</li>
				</ul>
				<p>Either way if you decide to use something else, you need these features:</p>
				<ul>
					<li>32 bit (will do alpha channels)</li>
					<li>Layers. Preferably unlimited.</li>
					<li>Can save in several different file formats. You'll be using TGA, which is an uncompressed bitmap, and JPG with is compress 24bit bitmap (no alpha channel)</li>
					<li>Different blending methods (multiply, overlay, screen, etc) for subtlety.</li>
				</ul>
				<p>In other words, Windows Paint AINT gonna cut it (=</p>
				<p>Instructions in the tutorial will remain as generic as possible. This is so anyone using any of these programs can do what they need to do without having to decipher instructions for another editor. The problem with this is if you're unfamiliar with the program you've chosen it may take you a while to find the feature that I mention. Sorry but ... well... sorry.</p>
				<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td width=554 height=351>
				<h4>b. Image Viewer</h4>
				<p>You'll need something to look at the images you have, and if you really get into texturing you'll need something to browse your library. Once again, there's probably more out there.</p>
				<ul>
					<li><a href="http://www.irfanview.com">IrfanView</a><br>A nice mix of features between the other 2, plus the extra added bonus of being able to view movie types. It's freeware and bannerless of all things...</li>
					<li><a href="http://www.mindworkshop.com/alchemy/alchemy.html">Graphic Workshop</a><br>It's shareware and can view some 60+ image formats. Good for low memory systems. It can also do a bunch of other things like scaling and thumbnail catalogs. </li>
					<li><a href="http://www.acdsystems.com/index.htm">ACD See</a><br>It's Nagware meaning that every now and then, when viewing an image, you'll get a popup that tells you how many images you've viewed, tells you where the website is and nags you like a Lovey Howell about buying it. Tis cheap but EXTREMELY functional and another one of those `standards'</li>
				</ul>
				<p>If you have other programs in mind, all you need is something to show you .jpg and .tga images. Tiling, cataloging, etc, is a nice extra but not completely necessary.</p>
				<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td width=554>
				<h4>c. Photo-Source Images<img id="Picture2" height=256 width=256 src="../../Building_Custom_Textures/Texture_Tools/MetalDsk_2.jpg" vspace=0 hspace=5 align="RIGHT" border=0></h4>
				<p>In order to build a texture you have to start with some of these. </p>
				<p>A photo-source image is usually a picture of something pretty general. Typically they're not tiled and are devoid of too much diversity. The whaled iron here is a good example. It's a boring pic, but can be used to detail a game txtr.</p>
				<p>There's a&nbsp; link here to take you to a page with more than 70 links to sites with textures. I've taken a look at most of them and they appear to be good resources.</p>
				<p>Thanks ``some guy i know" for originally posting this list to the rust forums.</p>
				<ul>
					<li><a href="/tutorials/txtrlist/txtr_list.php3">Texture Sites list</a></li>
				</ul>
				<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td width=554>
				<h4>d. Setting up the editor</h4>
				<p>Now these aren't things that you HAVE to do, but it certainly makes life easier.</p>
				<ul>
					<li>Turn on the Grid at 32<br>Mine is set at 64 with 4 divisions, and I can quickly select any power-of-2 sized</li>
					<li>Turn on snap to grid.<br>For this tutorial, grid snap is a must.</li>
				</ul>
				<p>Ok good. . . now that THAT is done, on to the meat and potatoes.
				<p><h3><i><a href="../../Building_Custom_Textures/A_Simple_texture/a_simple_texture.php3">A Simple texture</a></i></h3></p>
				<p>&nbsp;</p>
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
