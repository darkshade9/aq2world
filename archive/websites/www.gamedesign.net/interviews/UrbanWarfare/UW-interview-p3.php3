<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<LINK REV=made href="mailto:monsto@gamedesign.net">
	<META NAME="ROBOTS" CONTENT="ALL">
	<META NAME="keywords" CONTENT="quake2, unreal, tutorials, game design, level design, maps, bsp, quake editing, unreal editing, game editing, unreal tutorials, quake2 tutorials, design tutorials, interviews, discussion, id interviews, level making, quake, quake2, unreal, sin, sin editing, halflife, halflife editing, level making, map making, quake 2, quake 2 level making, game editing, quake2 editing, computer game editing, duke3d, level editing, map making, quake editing, quake2 editing, half-life editing, halflife editing, halflife, half-life, sin, sin editing, id, quake3, quake2, unreal, tutorials, game design, level design, maps, bsp, quake editing, unreal editing, game editing, unreal tutorials, quake2 tutorials, design tutorials, interviews, discussion, id interviews, level making, quake, quake2, unreal, sin, sin editing, halflife, halflife editing, level making, map making, quake 2, quake 2 level making, game editing, quake2 editing, computer game editing, duke3d, level editing, map making, quake editing, quake2 editing, half-life editing, halflife editing, halflife, half-life, sin, sin editing, id, quake3, quake3 arena">
	<META NAME="description" CONTENT="game editing and design. Specifically quake2, unreal, half-life, sin. tutorials, interviews, discussion forums. 100's of quake, quake2, unreal tutorials, covering all aspects of quake, quake2, unreal, half-life, and sin editing. As well as other 3d games. quake quake2 sin halflife half-life unreal">
	<title>Rust - Interview: Urban Warfare</title>
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
						 It's NOT ok to sleep.						</font>
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
<table width="100%" border="0">
<tr><td colspan="2"><hr>Interview with the dev team of<br><font size=+3><a href="http://www.thecplcoverage.com/hosted/warfare/">Urban Warfare</a> for Quake III Arena.</font><br><hr>
  <tr> 
    <td> 
      <p><b><i>&lt;neo279&gt; Moving on.... <neo279> Firstly Streak, what sort 
        of challenges are involved in modelling for a realistic mod?</i></b></p>
      <p><i>&lt;UW_Streak&gt;</i> I'd have to say getting things to look right 
        and making sure your skinner doesn't kill you...<br>
        <i>&lt;UW_JadeFalcon&gt;</i> yes, that's a big deal<br>
        <i>&lt;UW_Streak&gt;</i> You hafta do a lot of reasearch to figure out 
        which weapons you want in the mod... Why model something you don't want..<br>
        <i>&lt;UW_JadeFalcon&gt;</i> Especially getting info you need. <uw_jadefalcon> 
        some people don't imagine how difficult it is to get the info on the weapon 
        your going to model<br>
        <i>&lt;UW_Streak&gt;</i> I'd say the hardest thing about the modelling 
        is all the little tweaks that need to be done... that can take hours.. 
        Especially tweaking the skinmaps so that your skinner doesn't kill you.. 
        I used to think exporting was hard, then valk wrote me a nifty anim system 
        in q3..and that solved a lot of the problems we had, especially weapons 
        appearing upside down and backwards ingame (which looks really dumb)</p>
      <p><b><i>&lt;neo279&gt; JadeFalcon, whats challenges do you face as the 
        2D artist?</i></b></p>
      <p><i>&lt;UW_JadeFalcon&gt;</i> Lots. In realism mods, you must model things 
        that people see everyday. in a realism mod, weapons must appear realistic 
        to people. one of the most difficult things are the map textures, basically 
        because everything must represent its real counterpart exactly.every texture 
        on every map must be custom made. as for the weapons <uw_jadefalcon> it 
        takes tedious work designing different parts of the weapons, making sure 
        the lighting is correct, and the overall appearance of the weapon is correct. 
        almost all weapons are black and white <uw_jadefalcon> rarely do you work 
        on one with color <uw_jadefalcon> so you must have very good control over 
        lighting <uw_jadefalcon> that's about it. <uw_jadefalcon> oh yeah, and 
        streak makes things a lot more difficult.<br>
        <i>&lt;UW_Streak&gt;</i> I saw that one coming</p>
      <p><b><i>&lt;neo279&gt; W2k, as one of the mappers for UW, what do you find 
        difficult working on the mod, and what sort of rewards do you gain from 
        it?</i></b></p>
      <p><i>&lt;UW_W2k&gt;</i> you'd think getting lots of good realism textures 
        is hard, but it really isn't (hi Jade). apart from the realism textures 
        jade made I've also found loads on Shaderlab (www.shaderlab.com). what 
        IS hard is coming up with good map ideas that haven't been used before. 
        it is also hard making maps that play well, (good fps) but still have 
        high detail levels. that's about it .. making realism maps isn't harder 
        than making vanilla Q3 DM maps, but it's more fun IMNSHO :).</p>
      <p><b><i>&lt;neo279&gt; And finally, we reach Valkyrie, the coder. What 
        sort of problems do you face whilst doing your bit for thee mod?</i></b></p>
      <p><i>&lt;UW_Valkyrie&gt;</i> Basically what I had interrupted previously 
        in this interview and also many other seemingly easy-to-solve problems 
        such as getting rotating doors to work. <uw_valkyrie> The easy-to-solve 
        problems were not so easy however. I had trouble going through the source 
        trying to find the corrects bits of data to change, and when I did, I 
        often got interesting results with them. <uw_valkyrie> I once turned door-to-be 
        into a hyperspeed rotator. There is one major problem with rotatables 
        however... <uw_valkyrie> Q3 did not work well with rotating brushes, so 
        in map making they would not light or texture properly. <uw_valkyrie> 
        But with some practice, I'm able to fix up my mistakes eventually. <uw_valkyrie> 
        I would go on, mentioning the problems such as zooming/accuracy, but I 
        guess my time is up for now. <uw_valkyrie> or is it?<br>
        <i>&lt;UW_Streak&gt;</i> i wouldn't go into that..<br>
        <i>&lt;UW_Valkyrie&gt;</i> Alright. I'll conclude my part for now.</p>
      <p><i>&lt;UW_JadeFalcon&gt;</i> let me speak about layers. when you have 
        48 layers, and you don't name them, and then you realize you have to find 
        number 1, you be screwed. i'm done.</p>
      <p><b><i>&lt;neo279&gt; I've noticed you have a pretty active forum over 
        on your site. What kind of following/community have you guys managed to 
        whip up during development?</i></b></p>
      <p><i>&lt;UW_Streak&gt;</i> We've got a small. really loyal community.. 
        <uw_streak> They've followed us through 3 web hosts..<br>
        <i>&lt;UW_JadeFalcon&gt;</i> the community is great<br>
        <i>&lt;UW_W2k&gt;</i> they are great at providing feedback, which is very 
        important (especially when mapping)<br>
        <i>&lt;UW_Streak&gt;</i> yeah, telling us what sucks, what kicks ass..something 
        we can't do, cuz we're really biased.<br>
        <i>&lt;UW_JadeFalcon&gt;</i> we like to socialize with our community, 
        <uw_jadefalcon> most mods try to stay far away from theirs, only speak 
        threw news posts or interviews</p>
      <p><b><i>&lt;neo279&gt; Some people wonder why people make mods, when they 
        dont get payed. Could you explain your motivation to do this?</i></b></p>
      <p><i>&lt;UW_Valkyrie&gt;</i> We're here for the fun of it. It also gets 
        us trained for the real thing years later.<br>
        <i>&lt;UW_JadeFalcon&gt;</i> neo, people always love to modify things 
        to meet their needs.winamp skins, sonique skins, icq skins, windows themes 
        <uw_jadefalcon> its all around us.<br>
        <i>&lt;UW_W2k&gt;</i> mapping = fun<br>
        <i>&lt;UW_Streak&gt;</i> It's a good experience for professional work. 
        I've become a much better modeller than I was when I started.</p>
      <p><b><i>&lt;neo279&gt; Bringing things to a close then, what advice would 
        you give to someone wanting to get involved in the mod world?</i></b></p>
      <p><i>&lt;UW_JadeFalcon&gt;</i> join UW, sabotage all other mods, make UW 
        supreme, we need animators!<br>
        <i>&lt;UW_Valkyrie&gt;</i> Get a group from the same school to start it 
        all.<br>
        <i>&lt;UW_Streak&gt;</i> Have a plan..<br>
        <i>&lt;UW_W2k&gt;</i> don't join a mod the first thing you do after learning 
        to code, or to use a map editor, etc</p>
      <p><b><i>&lt;neo279&gt; Ok, thanks for taking the time for this guys. I 
        look forward to the release on Thursday.</i></b></p>
      <p><i>&lt;UW_Streak&gt;</i> thanks for the interview Neo<br>
        <i>&lt;UW_JadeFalcon&gt;</i> yes, thanks for the interview. <uw_jadefalcon> 
        we love you mod playing community people! </p>
    </td>
    <td width="256" valign="top" rowspan="2"><a href="Images/uw_02.jpg"><img src="Images/uw_02-small.jpg" width="256" height="192" alt="Urban Warfare" border="0"></a></td>
  </tr>
  <tr>
    <td align="center"><a href="UW-interview-p2.php3">Previous</a> | <a href="http://www.gamedesign.net">Home</a></td>
  </tr>
</table>
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
 
