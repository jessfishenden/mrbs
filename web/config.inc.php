<?php

// $Id$

/**************************************************************************
 *   MRBS Configuration File
 *   Configure this file for your site.
 *   You shouldn't have to modify anything outside this file
 *   (except for the lang.* files, eg lang.en for English, if
 *   you want to change text strings such as "Meeting Room
 *   Booking System", "room" and "area").
 **************************************************************************/

// The timezone your meeting rooms run in. It is especially important
// to set this if you're using PHP 5 on Linux. In this configuration
// if you don't, meetings in a different DST than you are currently
// in are offset by the DST offset incorrectly.
//
// When upgrading an existing installation, this should be set to the
// timezone the web server runs in.
//
// A list of valid timezones can be found at http://php.net/manual/en/timezones.php
// The following line must be uncommented by removing the '//' at the beginning
$timezone = "Europe/London";


/*******************
 * Database settings
 ******************/
// Which database system: "pgsql"=PostgreSQL, "mysql"=MySQL,
// "mysqli"=MySQL via the mysqli PHP extension
$dbsys = "mysql";
// Hostname of database server. For pgsql, can use "" instead of localhost
// to use Unix Domain Sockets instead of TCP/IP.
$db_host = "sql.booking.oblong.org.uk";
//$db_host = "localhost";
// Database name:
$db_database = "oblong_booking_mrbs";
// Database login user name:
$db_login = "oblongbooking";
// Database login password:
$db_password = '14302439';
// Prefix for table names.  This will allow multiple installations where only
// one database is available
$db_tbl_prefix = "mrbs_";
// Uncomment this to NOT use PHP persistent (pooled) database connections:
// $db_nopersist = 1;


/* Add lines from systemdefaults.inc.php here to change the default
   configuration. Do _NOT_ modify systemdefaults.inc.php. */





// This next section must come at the end of the config file - ie after any
// language and mail settings, as the definitions are used in the included file
require_once "language.inc";   // DO NOT DELETE THIS LINE

/*************
 * Entry Types
 *************/

// This array maps entry type codes (letters A through J) into descriptions.
//
// Each type has a color which is defined in the array $color_types in the Themes
// directory - just edit whichever include file corresponds to the theme you
// have chosen in the config settings. (The default is default.inc, unsurprisingly!)
//
// The value for each type is a short (one word is best) description of the
// type. The values must be escaped for HTML output ("R&amp;D").
// Please leave I and E alone for compatibility.
// If a type's entry is unset or empty, that type is not defined; it will not
// be shown in the day view color-key, and not offered in the type selector
// for new or edited entries.

// $typel["A"] = "A";
// $typel["B"] = "B";
// $typel["C"] = "C";
// $typel["D"] = "D";
$typel["E"] = get_vocab("external");
// $typel["F"] = "F";
// $typel["G"] = "G";
// $typel["H"] = "H";
$typel["I"] = get_vocab("internal");
// $typel["J"] = "J";

$mrbs_company = "Oblong Ltd";  // This line must always be uncommented ($mrbs_company is used in various places)

// Uncomment this next line for supplementary information after your company name or logo
$mrbs_company_more_info = "Resources for change";  // e.g. "XYZ Department"

// Uncomment this next line to have a link to your organisation in the header
$mrbs_company_url = "http://www.oblong.org.uk/";

$url_base = "http://booking.oblong.org.uk/";


// This setting controls whether to use "clock" or "times" based intervals
// (FALSE and the default) or user defined periods (TRUE).   "Times" based
// bookings allow you to define regular consecutive booking slots, eg every
// half an hour from 7.00 am to 7.00 pm.   "Periods" based bookings are useful
// in, for example, schools where the booking slots are of different lengths
// and are not consecutive because of change-over time or breaks.

// It is not possible to swap between these two options once bookings have
// been created and to have meaningful entries.  This is due to differences
// in the way that the data is stored.

//$enable_periods = TRUE;

// Resolution - what blocks can be booked, in seconds.
// Default is half an hour: 1800 seconds.
$resolution = (10 * 60);  // DEFAULT VALUE FOR NEW AREAS

// The beginning of the first slot of the day (DEFAULT VALUES FOR NEW AREAS)
$morningstarts         = 9;   // must be integer in range 0-23
$morningstarts_minutes = 0;   // must be integer in range 0-59

// The beginning of the last slot of the day (DEFAULT VALUES FOR NEW AREAS)
$eveningends           = 21;  // must be integer in range 0-23
$eveningends_minutes   = 50;   // must be integer in range 0-59

// Example 1.
// If resolution=3600 (1 hour), morningstarts = 8 and morningstarts_minutes = 30
// then for the last period to start at say 4:30pm you would need to set eveningends = 16
// and eveningends_minutes = 30

// Example 2.
// To get a full 24 hour display with 15-minute steps, set morningstarts=0; eveningends=23;
// eveningends_minutes=45; and resolution=900.

// This is the maximum number of rows (timeslots or periods) that one can expect to see in the day
// and week views.    It is used by mrbs.css.php for creating classes.    It does not matter if it
// is too large, except for the fact that more CSS than necessary will be generated.  (The variable
// is ignored if $times_along_top is set to TRUE).
$max_slots = 66;


// DEFAULT VALUES FOR NEW AREAS
$min_book_ahead_secs = 0;           // (seconds) cannot book in the past
$max_book_ahead_secs = 60*60*24*7;  // (seconds) no more than one week ahead

// Start of week: 0 for Sunday, 1 for Monday, etc.
$weekstarts = 1;

$hidden_days = array(0,6);








?>
