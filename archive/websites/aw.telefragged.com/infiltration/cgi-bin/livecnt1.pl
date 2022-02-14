#!/usr/bin/perl

#
# LiveCounter Classic 99AX
# Copyright (C) 1996-1999, by Chaminda Wickremasinghe.
# All Rights Reserved.
#
# This copy is not licensed for business use.
# Visit the LiveCounter Classic home page for details.
#
# http://www.chami.com/counter/classic/
#


$sURLFilter       = '';
$sIPFilter        = '';
$sHostFilter      = '';
$sCounterFilter   = '';
$bAutoCreate      = 1;


#---------------------------------------------------------------------------

{
  local( $__COUNTER_DAT ) = 'livecntr.dat';

  print "Content-type: text/plain\nPragma: no-cache\nCache-control: no-cache\nExpires: Mon, 28 Apr 1997 00:01:00 -0500\n\n";

  if( $ARGV[0] )
  {
    local( $nCount ) = 0;
    local( $Temp );

    if( '' ne $ARGV[4] )
    {
      $ENV{'HTTP_REFERER'} = $ARGV[4];
    }

    if( $ARGV[1] && ( '0' ne $ARGV[1] ) )
    {
      $__COUNTER_DAT = $ARGV[1] . '.lcd';
    }

    if( -w "$__COUNTER_DAT" )
    {
      local( $bInc ) = 0;

      if( open( F, "+<$__COUNTER_DAT" ) )
      {
        flock( F, 2 );
        seek( F, 0, 0 );

        ( $Temp, $nCount ) = split( /\s/, <F> );

        if( 'i' eq $ARGV[0] )
        {
          local( $bFiltersOk ) = 1;

          if( $sURLFilter && ( lc( $ENV{'HTTP_REFERER'} ) !~ $sURLFilter ) )
          {
            $bFiltersOk = 0;
          }
          if( $bFiltersOk     &&
              $sIPFilter      && ( $ENV{'REMOTE_ADDR'} =~ $sIPFilter ) )
          {
            $bFiltersOk = 0;
          }
          if( $bFiltersOk     &&
              $sHostFilter    && ( $ENV{'REMOTE_HOST'} =~ $sHostFilter ) )
          {
            $bFiltersOk = 0;
          }
          if( $bFiltersOk     &&
              $sCounterFilter && ( $__COUNTER_DAT =~ $sCounterFilter ) )
          {
            $bFiltersOk = 0;
          }

          if( $bFiltersOk )
          {
            seek( F, 0, 0 );

            ++$nCount;

            print F "Total: $nCount\n";

            $bInc = 1;
          }
        }

        flock( F, 8 );
        close( F );
      }

    }
    elsif( $bAutoCreate ) 
    {
      if( ( !( -e "$__COUNTER_DAT" ) ) && open( F, ">$__COUNTER_DAT" ) )
      {
        print F "Total: 0\n";
        close( F );
      }
    }

    print "c0=$nCount\n";
    if( 'v' eq $ARGV[0] )
    {
      print "vr=99AX\n";
    }
  }
}

