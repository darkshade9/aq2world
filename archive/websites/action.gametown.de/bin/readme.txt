Action Quake 2, ver. 1.51, PG BUND edition 1.10
Action Quake made by the A-TEAM, http://action.telefragged.com
AQ2: Edition is available at http://action.gametown.de
Last update: 25.04.99

This file describes any modifications and extensions of
the original Action Quake 2 and AQ2: Edition.


FEATURES
########

	- Six new % variables for say or say_team
        - Onscreen player menu
	- Map voting (thanx to Black Cross[NL]) (optional)
        - Player kick voting (optional)       
	- Player ignoring
	- Real friendly fire in teamplay (optional)
	- Custom voice shouting (optional)
	- Auto download enabled for new sounds
	- "Anti camper sounds" (optional)
	- Player punching
	- Online help
	- Minor bug fixes

All new commands and variables since the last version are marked
with: <!NEW!>


=====================
NEW SERVER VARIABLES:
=====================

ppl_idletime <!NEW!>
------------
default: 30, range 0..?

Remarks:
	If a player wont move for this amount of seconds, he will 
	"shout" a random insane sound (from sound/insane).
	You may switch it off by setting ppl_idletime to 0.

use_voice
---------
default: 1, range 0,1

Remarks:
	This variable enables or disables the client voice command. 
	If 0, voice command is disabled, if 1, voice command is enabled.


use_friendlyfire
----------------
default 0, range 0,1

Remarks:
	This variable enables or disables friendly fire in teamplay.
	Instead of using the server flag, this variable is used to prevent 
	conflicts with future extensions of AQ2 by the A-Team.


ff_maxkills
-----------
default: 6, range 0..?

Remarks:
	To prevent that some morons kill its own team when friendly 
	fire is enabled, ff_maxkills was made for. If a player has 
	killed the same amount or more teammates as in ff_maxkills 
	given, he will commit suicide after each teammate killed. 
	To disable ff_maxkills set it to 0. But beware...
	After level changes all player will start with 0 killed 
        teammates.


ff_kickat <!NEW!>
---------
default: 10, range 0..?

Remarks:
	If suiciding wont help, this will! If a player has 
	killed the same amount or more teammates as in ff_kickat
	given, he will be kicked out of the game.
	To disable ff_kickat set it to 0. But beware...
	After level changes all player will start with 0 killed 
        teammates.


ff_tempban <!NEW!>
----------
default: 1, range 0,1

Remarks:
	This variable controls, if a player, who was kicked due 
	too much teamkills, will temporary be banned.
	Temporary means, he will be banned until the map
	changes. If set on 1, it is switched on.


use_mapvote
-----------
default: 1, range 0,1

Original remark:

	Enable map voting.  Set to "1" to be able to vote on the
	next map.  The maplist is read from the "maplist.ini" file in
	the action directory; if it doesn't exist, the maplist from
	"action.ini" is used instead.
	A map must have more than 50% (default, may be changed with
	the <mapvote_pass> variable) of the votes before it is chosen
	(in teamplay you have to wait to the end of the round before
	it is selected).


mapvote_min
-----------
default: 1, range 0..?

Orginal remark:

	Minimum number of clients before map voting is allowed.


mapvote_need
------------
default: 0, range 0..100

Original remark:

	Percent of clients required to vote (0-100).


mapvote_pass
------------
default: 50, range 1..100

Original remark:

	Percent of yes votes required to pass the vote (1-100).


use_kickvote <!NEW!>
------------
default: 1, range 0,1

Remarks:
	Enables kick voting. Players may vote for a player to
	be kicked out of the game if set on 1. A player will be
	kicked under following circumstances:

 	- Amount of or more players are on the server as set in
	  kickvote_min.
	- Amount of or more percent of all players have voted to
	  kick SOMEONE as set in kickvote_need.
	- Amount of or more percent of all players have voted to
	  kick THE SAME player as set in kickvote_pass.
	
	see the reffering variables for more details.


kickvote_min <!NEW!>
------------
default: 4, range 0..

Remarks:
	As many players or more as given in kickvote_min must 
	play on the server, before a player may be kicked 
	because of kick voting.


kickvote_need <!NEW!>
-------------
default: 0, range 0..

Remarks:	
	As many PERCENT of all players must have voted 
	to kick SOMEONE, before a player may be kicked 
	because of kick voting.


kickvote_pass <!NEW!>
-------------
default: 75, range 0..

Remarks:	
	As many PERCENT of all players must have voted 
	to kick THE SAME player, before a player may be 
	kicked because of kick voting.


kickvote_tempban <!NEW!>
----------------
default: 1, range 0,1

Remarks:
	If set on 1, a player who was kicked because of
	kick voting, will be banned until map changes
	(or until his IP changes...)


=============
NEW COMMANDS:
=============

menu <!NEW!>
----
Remarks:
	This command will bring up the player on screen menu.
	Any menu may also be called due "menu menuname",
	e.g. "menu mapmenu" will bring up the map menu.


rules <!NEW!>
-----
Remarks:
	With this command a online help is available. Just
	use "rules" for further instructions... :)


punch <!NEW!>
-----
Remarks:
	There was no reason, why a player cannot chop another...now
	it is possible, with "punch". With this command, you may try
	to knock out an enemy.


voice <soundfile.wav>
---------------------
Remarks:
	This command will play an local, public sound hearable to
	anyone who is near. Every person may play only one public sound 
	at the same time. It is played on the channel, where the pain 
	sounds are played too. If someone dont got the sound, it wont 
	be played, so to have fun make sure, that players may download 
	them. The sounds have to be placed in the action directory, 
	"sounds\user". If autodownload is enabled, they may be  downloaded
	within quake. To do this, you have to add your sounds to a file 
	called sndlist.ini which have to be placed in your AQ2 directory.
	See the file sndlist.ini for further details.


ignorelist
----------
Remarks:
	This will give a list of all players and there internal number. 
	All Players marked with '*' are ignored by you.


ignore <playername>
-------------------
Remarks:
	After this command all messages from <playername> will be ignored 
	and not shown. The player, who is ignored, will get a notice of that. 
	If that player allready was ignored, he wont be ignored further. 
	The player will get also a notice that  you "unignored" him. 
	You currently may ignore up to 10 players.


ignorenum <number>
------------------
Remarks:
	Same effect as ignore, but by number.
	Some players may try to avoid to be ignored, by giving strange, 
	duplicated or no names. If you aren't able to ignore a player 
	by name, you may do it by number.


ignoreclear
-----------
Remarks:
	All currently ignored players aren't ignored no more. This will also
	happen when level changes.


maplist
-------
Remarks:
	This will list all maps for which players may vote. The command name 
	was changed  from "votelist" to "maplist", because there may be more 
	votings instead of just the maps. :)
	Original remark:

	List the percentages of votes to each map, and how many who
	have voted.  Also lists the maps that can be voted on.  (Only
	if "use_mapvote" is enabled.)


votemap <mapname>
-----------------
Remarks:
	Let a player vote for a map. The command name was changed from "vote" 
	to "votemap", because there may be more votings instead of just the 
	maps. :)
	Original remark:

	Vote on <mapname> (only if "use_mapvote" is enabled).


kicklist <!NEW!>
--------
Remarks:
	This will give a list of all players and there internal number.
	A Player marked with '*' is the one you voted on to be kicked.


votekick <playername> <!NEW!>
---------------------
Remarks:
	Use this command to vote on to kick a certain player.
	If you allready voted on that player, your vote will be
	removed. 


votekicknum <number> <!NEW!>
--------------------
Remarks:
	Same effect as votekick, but by number.
	Some players may try to avoid to be kicked, by giving strange, 
	duplicated or no names. If you aren't able to vote for a 
	player to be kicked by by name, you may do it by number.


addpoint <description>
----------------------
Remarks:
	Now it is possible to set some map points together with a description.
	All added points are saved within a text file found in your map 
	directory and named like the maps with the extension ".pg". This
	points are read in during map initialization and used for new % 
	variables %G and %L. This is only a server side extention what means,
	that clients do not need to have the .pg files and if so, they will
	be ignored. Addpoint will only be enabled, with cheats set on 1 to
	prevent clients to add new points during gameplay. Currently a maximum
	of 60 points are supported.


NEW % VARIABLES:
================

%E: Enemies name
%F: Enemies weapon
%G: Enemies position
-----------------------------
Remarks:
	These variables will only show contents, if you directly see an enemy 
	and look at. If not, you get something like "no enemy", "no weapon" 
	and "nowhere". When a .pg file (see above) is present, the enemies
	position (%G) is named to the nearest location point. If not, a relative
	position is given. The enemies relative position is the position as seen 
	from the reporting person, e.g. "in the southwest, up" or "in the north, 
	down". If your teammate is elswhere, it wont help him. But if your 
	teammate is with you or knows where you are, he will get the enemies 
	hideout.


%K: Last killed player
----------------------
Remarks:
	This variable stands for the last killed player. It will show contents 
	only once. After usage it contains "No one". 
	Example: If you killed "player" and report it due "say_team I killed %K" 
	to your teammates, you will get "I killed player".
	If you use it twice without killing someone between, you will get 
	"I killed No one".
	This is to prevent taunting and message flooding.


%L: Location
------------
Remarks:
	This variable gives the players current position. The nearest point taken
	from a .pg file is searched and its description is used. If no .pg file
	for the current map is found, %L will result in "somewhere".


%S: Seen location <!NEW!>
-----------------
Remarks:
	This variable is similar to %G, but it will report the seen
	location. If a .pg location file is present, it will show
	the desctiption of the seen place. If not, it will report
	a relative position.


BUG FIXES
=========
	- Fixed the "Out of ammo" bug, which happens due fast reload
	  since AQ2 v1.51. This happened if you had hit the reload
	  button a couple of times and you were killed during
	  reloading.
	- Fixed infravision on dead bodies. It was annoying that
	  dead corpses were still seen through infravision. Now
	  dead bodies will "cool out" (really fast :).
	- Fixed "player died" bug...this happened if a player was
	  wounded and did not bandage...after a while, he died
	  from the wound "without cause". Not more!


================
ERRORS AND BUGS:
================

None known so far, if you get one please report it to me, 
send me an e-mail! 



========
GENERAL:
========

You may write me an e-mail even if you just have some 
questions, ideas or intentions. :)
Software is provided "as is" bla bla bla ...



========
CREDITS:
========
Special thanks go to 

	- my clanmates Rookie[Rock] and Igor[Rock] who supported
	  me all the time and showed much patience. :)
        - [AE]Judge for testing and (hopefully :) for beeing
	  co-mod of the AQ2 edition home page.
	- [HsF]Kerstin and [sLs]Avatar for really bad needed 
          compiling jobs. :)
	- Black Cross[NL] for his modifications and offering his
	  source for free download
	- all server admins running my mod! :)
	- the qdevels message board for answering my questions
	  regarding Quake 2 programing
	- the A-Team for creating this great mod


PG BUND[Rock]
r.bund@gmx.de

Homepage: http://action.gametown.de
Clanpage: http://www.homepages.de/sgiesen@dialup.nacamar.de/rockclan/