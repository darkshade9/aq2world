                              AQ: Espionage
                           Table Of Contents

1) Who we are/Credits
2) What client operators need to know
3) What server ops need to know
4) Whats different
5) Rules
6) Complete Quake2 command list for Server Operators and Client Operators
7) Scenarios


1.  Who we are/Credits

    We are the AQDT, the Action Quake Development Team.  We make mods 
for the mod of Action Quake.  With Espionage's scripting language, you can 
create your own gameplay.  Scenarios, as they're called, can use any map 
you can dream of and make it how you want it to be.  Although the scenario 
language is new, with a little bit of learning and reading, you can make your 
own scenarios for any map made for Quake 2.

           Cast: (in no special order)

    Lance 'Hal9000' Burton       - Main coder/Scripting Language developer
    Bill 'Imrik' Townsend        - Coder
    Mike 'Homer' Connor          - Coder
    Chris 'Fool Killer' Gedhardt - Serverop/Scenario maker
    Bill 'Fex' Geiger            - HTML coder/Resource management/VWep
    Graeme 'Homosaurus' Rolfe    - Male Voice Actor/Sound p1mp/VWep

            Extras:    (in no special order)

    David 'ViperX' Jensen        - Briefcase/Backpack skins
    Minh 'Gooseman' Le           - Briefcase Model
    Jessica 'Sndgrrl' Lemieux    - Female Voice Actor

            Beta Server Operators:

    Will 'Fenriz' Smith       - Doggus
    Jarmo Tolvanen            - MistyVortex
    John 'KaRRiLLioN=' Corwin - =AR= Barracks
    GsG9                      - VortexQ

2.  What do client operators need to know

    If you have already played Action Quake, there are only few new commands
    in AQ: Espionage:

    * "goals" - The "goals" command redisplays the current objectives for both 
                teams. 

    * "ignore" - The ignore command lets you ignore messages from a 
                 particular player

    * "unignore" - The unignore command clears your ignore field

    New radio sounds are included with Espionage.  The new sounds are used 
exactly as the sounds with which you are familiar (taking_f, imhit, enemys, 
enemyd, etc). The radio wav file sounds are located in 

    \quake2\action\sound\radio\male 
       and
    \quake2\action\sound\radio\female  

    Bind them in the same fashion as your other radio commands.

    If you are new to playing Action Quake or AQ: Espionage, there will 
be a pre-made configuration file included with the client package that will 
bind your keypad for Espionage play.

    The gameplay will vary with each scenario. The goals of each scenario
will be displayed on the screen at the beginning of each round. Some players 
may be designated in special roles, in which case it is vital that you read 
the goals specified to determine what needs to be done.

2a.  Ettiquette for client operators

    Since some Espionage scenarios allow people to respawn, "Enemy Down," 
"Im Hit," "Enemy Spotted" and other related radio/text messages are neither
necessary nor useful.  Please unbind them, or dont use them.  If you do use 
them during a scenario with respawning, you may aggravate the server op and 
the other players.

3.  What do server ops need to know

    To get imediately started with Espionage out of the box, extract the
server files into your action directory.  Enable the scenario code by either
including the line "set scripts 1" in your server.cfg file or adding 
"+set scripts 1" to you startup command line. The maps and scenarios are
specified in action/action.scp, which includes the scenarios from the
"scenes" subdirectory using a C-like #include statement. After that, 
everything will take care of itself, assuming you extracted the files to the 
proper directories :).  

  Sample command line:

quake2 +set dedicated 1 +set game action +exec server.cfg

4.  What's Different

    There are many new and exciting features in AQ: Espionage:

    New radio sounds for both female and male are implemented
    Automatic sounds for when you capture/return/assassinate
    Bonus points for capturing, assassinating, defending, harrasing 
      bodyguards, or invading
    Teammates get small bonuses if someone on their team captures
    HUD indicator for 'special' players (ie: leader, package carrier)
    Door kicking enabled, if some chump is blocking a door with their 
      body, just jump kick the door!
    You can ignore and unignore players (look in Total Commands list for 
      more info) 
    HUD display to tell you when you might respawn. This display is located 
      under frag count 
    There are three respawn functions and can be set up differently per team:
      - instant respawn makes you respawn instantly
      - timed respawn (the HUD indicator shows how many seconds left till 
          respawn)
      - percentage respawn (the HUD indicator shows the percentage of your 
          team in DEAD mode)
    Dead people can talk to the living if respawning is enabled, but dead 
      people can only chasecam their teammates (no free flight)
    Stealth Slippers are beefed up.  User doesn't receive the 'limp mode' 
      walk when they get shot in leg.  User also gets less falling damage and 
      can fall down farther.  
    
    Other features have been added to fix standing AQ bugs, accomodate 
limited network bandwidth and help prevent client overflows:

    Weapons and item entities that are dropped have a 10 or 30 second 
      life-span
    Out of ammo scroll bug fixed (Thanks goes to Mike from AQ:G)
    Opening the menu cuts off the MOTD refreshes 
        
5. Rules

    The rules of the game are defined by the scenario made for that map.  
 Generally, most scenarios fall under these categories: 

    CTB - [Capture The Briefcase] two briefcases and two bases. One BC spawns 
          at one base, and the other spawns at the other.
    
    ATL - [Assassinate The Leader] two randomly selected players become the 
          leader of each team.  The first team to assassinate the enemy
          leader wins.
    
    FRD - [Find, Retrieve/Defend] a randomly selected player on one team is 
          chosen to pickup a package from a fixed location, and deposit it at 
          another fixed location.  The enemy team's objective is to 
          assassinate the randomly selected player.

    ETV - [Escort the VIP] a randomly selected player on one team is chosen 
          to be escorted to a fixed location to win. The enemy team must 
          assassinate that randomly selected player.
    
    OFC - [One Flag Capture] two teams battle it out for a single package to 
          bring to their base.  The package is spawned in a neutral location.
    
  Rules that exist in all variants of Espionage scenarios:
    1) Anyone who is picking up the package needs to hold the handgun or knife

6.  Complete Quake2 command list for Server Operators and Client Operators

scripts 1 This command will enable the Espionage scenarios

sv_author 1  This command sets a mode for people who are interested in 
             making scenarios. It makes spawn spots visible and enables
             some useful commands:

             movespawn <targetname> <numspawnpointsaway>
             moveto <targetname>

             These commands are used for script developing, if you want to 
             rapidly move to the various targets, or if you want judge how
             far away the spawn spots are from given target (when you want
             people to spawn away from an object).

ignore/unignore  This command will ignore a spamming or annoying client.  
                 You can also unignore him

goals    this command will display the goals to you in case you forgot



7.  Scenarios

    Scenarios are the heart of AQ: Espionage. Scenarios are activated by
setting the 'scripts' variable to 1, as described in section 3 above.
If scripts is set to 0, gameplay will be regular teamplay (or deathmatch if 
teamplay is set to 0).  

    The AQ: Espionage release includes several sample scenarios that operate
on a range of maps. Some scenarios (in particular those that don't require
map coordinates) may be used with any map. Espionage will try to follow
the map rotation specified in action.scp as best it can. If a map is
manually loaded (e.g., via the 'map' command) that is not in the rotation, 
gameplay reverts to regular teamplay for the duration of that map. If map
is manually loaded that IS in the rotation, then the first scenario in
the rotation associated with that map is loaded.

    You are encouraged to make your own scenarios; however, the AQDT strongly 
urges you not to make scenarios that have poor playability.  Also, it is not 
recommended that you drastically modify the scenarios that we provide.  When 
we say 'drastically' we mean that it's ok to change the team names, and 
skins; but take care in modifying the goal spots and other 'drastic' things.
If you do make such drastic changes, please change the name of the scenario 
to minimize confusion.

   If you do not wish to create your own scenarios, just make sure you have 
action.scp in /quake2/action, and all the *.scn's in /quake2/action/scenes 
directory and you're set. (Dont forget to have scripts 1 in your startup 
file!).  If you DO wish to make your own scenarios, there is a 
/quake2/action/devel directory which has a devel.txt document on how to 
create scenarios, debug them, example files, and other server side options.


--AQDT http://aqdt.fear.net
