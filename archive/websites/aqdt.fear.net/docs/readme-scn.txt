======================================================================

 BASIC FORMAT

======================================================================

MAPS
{
  <map name> <scenario name>
  ...
}

SCENARIO <scenario name>
{
  TARGETS
  {
    PLAYER_RANDOM <target name> TEAM <team name> SKIN <special skin> 
    PLAYER_VOTE <target name> TEAM <associated team name> SKIN <special skin> 
    TARGET_AREA <area name> <lower corner point> <high corner point> 
    TARGET_OBJECT <object name>  MODEL <model name> PIC <inventory pic>
    TARGET_LOCATION <location name> <point>
    TARGET_RANDOM_SPAWN <location name>
  }

  TEAM <team name>
  {
    SKIN <skin name>
    WEAPONS <allowed weapons> (not implemented yet)
    GOALS
    {
      ASSASSINATE <target name>
      ELIMINATE <team name>
      ESCORT <target name> TO <area name>
      RETRIEVE <object name> FROM <location name> TO <area name>
      ACQUIRE <object name> FROM <location name>
    }
  }
}

<more teams> (only 2 total supported currently)
}

<more scenarios>

#include "scenario.scn"

======================================================================

  EXAMPLES

======================================================================

// Default scenario
SCENARIO "default"
{
TEAM red
{
  SKIN "messiah/blade"
  WEAPONS "all"
}

TEAM blue
{
  SKIN "sas/sas"
  WEAPONS "all"
}
}

// Default scenario
SCENARIO "fragfest"
{
TEAM red
{
  SKIN "terror/terror"
  WEAPONS "all"
}

TEAM blue
{
  SKIN "sas/sasjungle"
  WEAPONS "all"
}
}

SCENARIO "Elvis has left the building"
{
TARGETS
{
  PLAYER_RANDOM "Elvis" TEAM "The Bodyguards" SKIN "messiah/blade"
  TARGET_AREA "His limo" ( -32.0 -74.0 -81.0 ) ( 2.0 -34.0 -41.0 )
  TARGET_OBJECT "Data CD" MODEL "models/items/keys/data_cd/tris.md2" PIC "k_datacd"
  TARGET_LOCATION "spot1" ( -2 -54 -41 )
}
TEAM "The Bodyguards"
{
  SKIN "terror/terror"
  WEAPONS "all"
  GOALS
  {
  ESCORT "Elvis" TO "His limo"
  }
}
TEAM "Rabid Fans" 
{
  SKIN "sas/sasjungle"
  WEAPONS "all"
  GOALS
  {
  RETRIEVE "Data CD" FROM "spot1" TO "His limo"
  ASSASSINATE "Elvis" 
  }
}
}
