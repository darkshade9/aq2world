ACTION QUAKE GANGSTERS - v0.8b Readme - 07.5.1999

========================================================================

WWW.PLANETQUAKE.COM/GANGSTERS


1.  Introduction
2.  Winning or Loosing the game
3.  Playing as Gangster
4.  Playing as Boss
5.  Communicating with your teammates
6.  The Location system
7.  Respawning
8.  The maps and getting to know them
9.  Client command List - Gangsters specific
10. Client command List - General
11. Gangster files
12. Contact info
13. Credits



1.Introduction
========================================================================
We have played AQ since the early beginning, from DM to Teamplay, to
all the variations you see to today. We have loved it, and hated it
sometimes, but most of all, we've stuck to it as it offers some quite
unique aspects found nowhere else. Even if the Teamplay addition to 
AQ was more than welcomed, it didn't exactly serve it's purpose from a 
teamplay point of view. Sure the organized clanwars is immense fun, but 
life in the public servers tends to be more of a race towards the #1 
spot on the fragscore, than a joint team-effort. Turning off the 
fragscore helped a little, but what we felt was really missing was an 
actual goal. A reward if you like. The sweet sensation of accomplishment 
in unity.


When you were a kid, didn't the life of a cop sound fantastic? Growing 
older, doesn't it seems so much more fun being a gangster? What's even 
more fun than being a gangster or a criminal mastermind? Well, playing 
one without fear of imprisonment or retribution of-course. Welcome to 
AQ:Gangsters, where you play the part in a gang of thugs, bandits and 
villains fighting it out with a rival gang. Funk it!



2.Winning or Loosing the game
========================================================================
Gangsters can be played two ways, either with 1 boss changing between
teams from round to round, or with 2 bosses, one on each team. One boss
changing between teams is the default and most servers will be running
this. When your team have the boss the goal is to Escort the boss to a
designated target. When the other team has the boss, your goal is to
prevent the boss from reaching his target. A round can only be won be
either a successful Escort, or a dead boss. Players on both teams will
keep respawning at their HeadQuarters until this happens. A successful
Escort is awarded with 3 roundwins, a successful hit on the enemy boss
is awarded with 1 roundwin. First team to 15+ roundwins wins the map.

On public servers, the number of players on each team varies and due to
this, the team with most players will always get the boss in
"1boss-mode". When there is an equal number of players on each team,
the boss will be switched between them from round to round. One of the
players in a team will be randomly selected as the boss each round.
More on this under "Playing as a Boss".



3.Playing as Gangster
========================================================================
Playing the regular gangster is the backbone of AQG and is done in two 
different styles. Either defending your Headquarters to prevent the 
enemy boss reaching his target, or escorting your own boss to his 
target. when defending your main concern should be to stop the enemy 
boss at all cost - if he reaches his target, your whole team will 
loose. Defending players who stay within the Headquarters and 
surroundings will be rewarded with shorter respawn time. A defending
player who also manages to kill the incoming enemy boss will also 
receive a bonus. Escorting players main concern is to keep their boss 
alive, if that means you have to stop bullets for him to get away. If 
your boss dies, your whole team looses. Escorting players that stays 
within a moving safezone around the boss will be rewarded with shorter 
respawn times. The respawn system and their modifiers is explained 
below.



4.Playing as a Boss
========================================================================
Playing the role of the Boss, your main concern is to get to your 
destination alive. The boss depends solely on the "bodyguards" to take 
him there safely. As a boss, you should stay out of harms way as much as 
possible, and let your men do the dirty work. On a successful escort, 
you and your bodyguards will receive a bonus to the respawn time.

Another important part of playing the boss is the ability to assign your 
gangsters missions. To assign a scout, aim your crosshair at one of your 
teammates and use the console command "Scout assign" (or bind it to a 
key in your config). The targeted player will then hear the boss voice 
telling him "I'm counting on you!" and get a binocular-icon blinking 
where his health icon is. The scout can move outside the safe zones 
without penalty should he die. The boss can also relieve players of 
special tasks in the same manner with the console command "Scout 
cancel". The boss can only have 1 scout at a time, and should the scout 
die, a new one can be assigned in 1 minute intervals.

The second mission a boss can assign to a player (only in 2 boss mode) is
assassin, this is done with the "Assassin assign" command just like with the
scout command. The assassin will then get a special icon (crosshair with a G
in it) on his screen and hear the boss say "I'm counting on you".
The assissins job is to kill the enemy boss. If he manages to he and his
team will get a bonus.

There is also a console command called "boss" that will influence the 
selection of bosses. Since the team is so dependant on the boss, it's 
always better to have the players who know how-to. The "boss" command 
defaults to "no" when you enter a server, and you have to set it to 
"yes" (boss yes in console) for each map. This will change the random 
selection from all players, to only the players with the boss command 
set to yes.



5.Communicating with your teammates
========================================================================
Gangsters is all about Teamplay. There are no frags and no room for 
one-man armies. Communicating with your teammates as best you can is
essential for the team's success. Like regular AQ, Gangsters sports a 
selection of radio messages to enhance the teamplay. These sounds must 
be added to your config similar to your AQ cfg's.


aqg_backboss       "Get back boss"
aqg_allclear       "I don't see anybody"
aqg_backtohq       "Everybody back to headquarters"
aqg_company        "We got company"
aqg_goboss         "Go ahead boss"
aqg_imonit         "I'm on it"
aqg_noway          "No way Man"
aqg_uattack        "We're under attack"

Example: bind <key> "say_team Look sharp guys, here they come!;radioteam aqg_company"


The boss also have a couple special radio messages that only he can say. 
If you play as a gangster and tries to use a boss-voice you will only get 
an "error-message" on-screen.

aqg_bosscomeget    "Come get me"
aqg_bossnoguard    "I'm out of guards"

Look for some config tutorials on the Gangsters website at 
www.planetquake.com/gangsters



6.The Location system
========================================================================
To further enhance the teamplay aspect, Gangsters come with a complete 
location system enabling players to add a variable to their messages 
which will  report exactly where they are on the map. This is done 
independent of the map and comes from special files found on the servers.

There are 2 location variables to use. %L will report the location you 
are in, and %S will report the location you are aiming at. By including 
these in your messages you can properly let your teammates where you 
are, where you are heading, where the enemy is spotted.

Example: bind <key> "say_team I'm %L, enemy spotted %S;radioteam aqg_company" 
will output

"I'm outside the Police Station, Enemy spotted on Police Station Roof" 
and let everyone hear "we got company" (example from the map City).



7.Respawning
========================================================================
The penalty system is designed to get the players to work as a team. 
Teamplay is rewarded. All players in the game start out with a respawn 
time of 50 seconds, and depending on how you play your role, (caring 
for your boss safety, defending your base, or just run out trying to 
get yourself a frag) that time will either increase or decrease to a 
minimum of 30 seconds, and a maximum of 70 seconds, between respawns.

1 boss on your team:

+5 seconds if you die outside his safezone *
-2 seconds if you're within safezone when your team wins. *

(even if you for the moment is dead, but died without receiving penalty)


1 boss on enemy team:

+5 seconds if you die outside the enemy destination safezone
-2 seconds if you're within safezone when your team wins.
   or killed the enemy boss.

(even if you for the moment is dead, but died without receiving penalty)


2 bosses, one on each team:

+5 seconds if you die outside boss or homebase safezone *
-7 seconds if you are the assassin if and kill the boss.
-4 seconds if youre teams assassin kills the enemy boss and you're within safezones
-2 seconds if you're within safezones when your team wins. *
   or killed the enemy boss.

(even if you for the moment is dead, but died without receiving penalty)


* Special rules apply if you have recieve a mission from your boss like 
  scout or assassin.



If the boss assign you the scout mission (see under Playing as boss), 
you can move outside the area defined as safezone around your boss, 
without getting any penalty time added to your respawn, if you die. The 
scout will also receive a 2 seconds cut from his respawn time if the 
team wins.


If the boss assign you the assassin mission, you must kill the enemy boss.
You will get a 5 seconds added to your respawn time if you die, but if you
succeed with the mission, then you will recieve a -7 seconds cut from your 
respawn time, and the rest of your team will recieve -4 seconds.
(if they are within a safezone)



8.The Maps and getting to know them
========================================================================
Gangsters can be played on any Action map, old ones or future maps. Not 
all maps are suitable though, and for the map to work properly, they 
need a special file located on the server. There is no need for any 
special entities or spawn points in the map, all this is decided in an 
external file. 4 maps have been selected for the first release of 
Gangsters due to their layout and size. For now, only these 4 maps will
have working locations (other maps will only report the %L and %S as 
"around"). These maps can be found on the Gangsters site along with future 
Gangsters maps:

City
Teacher
Blockwar
Avenue1

To get an idea of the map layout when connecting to a Gangsters server, 
you can type "maprules" in the console to get a brief description on 
where the target areas are. Also check the Gangsters site for a guide 
to the first 4 maps and some tactic suggestions.



9.Client Commands List - Gangsters specific
========================================================================
[boss  YES | NO]
With this command will you turn the option on becoming a 
boss or not. If all players on 1 team say NO, then it'll 
random among all of you, but if there is at least 1 player
on your team, that say yes, the random choosing of boss, will
be limited to those with the option enabled (YES)

[bossbeep]
Beep your boss.  Works like the %L command, but it's sent
automatically from your boss to you. , the boss don't need
to reply or anything. it's done by the game. The boss will
get a message on his screen, that "xxxxx beeped you". 

[maprules]
Print the rules of the current map. 
(this will most likely be the target destination points for the leaders).

[respawn]
Displays the time in seconds before you respawn.

[rules]
Print a short description of the AQ:Gangsters! rules

[safezone]
Displays if you're within a safezone. 
(if you'll recieve penelty upon death or not)

[scout ASSIGN | CANCEL]
Assign or cancel a player to the scout mission.
(Only a boss can use this client command)

[assassin ASSIGN | CANCEL]
Assign or cancel a player to the assassin mission.
(Only a boss can use this client command)



10.Client Commands List - General
========================================================================
[vote <mapname>]
Vote on <mapname> (only if "use_mapvote" is enabled on server).

[votelist]
List the percentages of votes to each map, and how many who
have voted.  Also lists the maps that can be voted on.  (Only
if "use_mapvote" is enabled on server)

[ignore <player | playernumber>]
Ignore all talk from player <player> or player
<playernumber>.  If the <player> is already in your
ignorelist, the <player> is then removed from the list.

[ignorelist] 
List all the players you have put in your ignorelist.  Note
that the ignorelist is, as the votelist, cleared between
levels (time to make amends ;-).



11.Gangster files
========================================================================
For easy removal of Gangsters, should you want that, here's a list of 
all files found in the client pack along with their directory placement.
Most files are put in easy-to-locate places, but some files need to be 
in your action directory due to game specifics.


/action/gangsters/AQG-Readme.txt
/action/gangsters/pics/gangstertag.pcx
/action/gangsters/pics/s_gangsters.pcx
/action/gangsters/pics/s_gangsters_big.pcx
/action/gangsters/pics/s_scout_big.pcx
/action/gangsters/pics/s_assassin_big.pcx
/action/gangsters/sound/aqg_bosswin.wav
/action/gangsters/sound/aqg_bosswin1.wav
/action/gangsters/sound/aqg_bosswin2.wav
/action/gangsters/sound/radio/male/aqg_allclear.wav
/action/gangsters/sound/radio/male/aqg_backboss.wav
/action/gangsters/sound/radio/male/aqg_backtohq.wav
/action/gangsters/sound/radio/male/aqg_bosscomeget.wav
/action/gangsters/sound/radio/male/aqg_bosscounting.wav
/action/gangsters/sound/radio/male/aqg_bosslazy.wav
/action/gangsters/sound/radio/male/aqg_bossnoguard.wav
/action/gangsters/sound/radio/male/aqg_company.wav
/action/gangsters/sound/radio/male/aqg_goboss.wav
/action/gangsters/sound/radio/male/aqg_imonit.wav
/action/gangsters/sound/radio/male/aqg_noway.wav
/action/gangsters/sound/radio/male/aqg_uattack.wav
/action/players/male/aqgthug.pcx
/action/players/male/aqgthug_i.pcx
/action/players/male/aqgvillain.pcx
/action/players/male/aqgvillain_i.pcx
/action/players/aqg_actionmale/aqgthugboss.pcx
/action/players/aqg_actionmale/aqgthugboss_i.pcx
/action/players/aqg_actionmale/
/action/players/aqg_velvetj/aqgvillainboss.pcx
/action/players/aqg_velvetj/aqgvillainboss_i.pcx
/action/players/aqg_velvetj/tris.md2
/action/players/aqg_velvetj/weapon.md2
/action/players/aqg_velvetj/a_m61frag.md2
/action/players/aqg_velvetj/w_akimbo.md2
/action/players/aqg_velvetj/w_cannon.md2
/action/players/aqg_velvetj/w_knife.md2
/action/players/aqg_velvetj/w_m4.md2
/action/players/aqg_velvetj/w_mk23.md2
/action/players/aqg_velvetj/w_mp5.md2
/action/players/aqg_velvetj/w_sniper.md2
/action/players/aqg_velvetj/w_super90.md2

All files related to servers are located in /action/gangsters



12.Contact info
========================================================================
If you want to get in touch with the AQ:Gangsters team, either visit our 
website at www.planetquake.com/gangsters or use the e-mail adresses below.

Ronny 'Black Cross' Arild		blackcross@planetquake.com
Mikael 'Mike' Lindh			mfs@planetquake.com
Jan Pedro 'Eyes' Tumsok			pedro@sigma-systems.no
Per 'Ellusion' Nyhaug			ellusion@planetquake.com



13.Credits
========================================================================
For more credits and info on the people behind Gangsters, and the 
contributors, visit the Gangsters web at www.planetquake.com/gangsters.






ACTION QUAKE GANGSTERS - v0.8b Readme - 07.05.1999
========================================================================
WWW.PLANETQUAKE.COM/GANGSTERS

