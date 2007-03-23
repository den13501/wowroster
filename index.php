<?php
/******************************
 * WoWRoster.net  Roster
 * Copyright 2002-2007
 * Licensed under the Creative Commons
 * "Attribution-NonCommercial-ShareAlike 2.5" license
 *
 * Short summary
 *  http://creativecommons.org/licenses/by-nc-sa/2.5/
 *
 * Full license information
 *  http://creativecommons.org/licenses/by-nc-sa/2.5/legalcode
 * -----------------------------
 *
 * $Id$
 *
 ******************************/

require_once( dirname(__FILE__).DIRECTORY_SEPARATOR.'settings.php' );

// Determine the module request
$page = ( isset($_GET[ROSTER_PAGE]) && !empty($_GET[ROSTER_PAGE]) ) ? $_GET[ROSTER_PAGE] : $roster_conf['default_page'];


define('ROSTER_PAGE_NAME', $page);

$pages = explode('-', $page);
$page = $pages[0];

if( preg_match('/[^a-zA-Z0-9_-]/', ROSTER_PAGE_NAME) )
{
	roster_die($act_words['invalid_char_module'],$act_words['roster_error']);
}

//---[ Check for Guild Info ]------------
if( empty($guild_info) && !in_array($page,array('rostercp','update','credits','license')) )
{
	roster_die( $act_words['nodata'] , $act_words['nodata_title'] );
}

// Include the module
if( is_file( $var = ROSTER_PAGES . $page . '.php' ) )
{
	require($var);
}
else
{
	roster_die(sprintf($act_words['module_not_exist'],$page),$act_words['roster_error']);
}

unset($page,$var);

$wowdb->closeDb();