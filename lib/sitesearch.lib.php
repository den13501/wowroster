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

if ( !defined('ROSTER_INSTALLED') )
{
    exit('Detected invalid access to this file!');
}

function sitesearch($site)
{
	global $act_words;

	$inputs = array();
	$title = $img = $url = $text = $url = $color = $method = '';
	switch( $site )
	{
		case 'alla':
			$title = 'Allakhazam';
			$img = 'http://wow.allakhazam.com/images/wowex.png';
			$text = 'q';
			$inputs = array();
			$method = 'get';
			$url = 'http://wow.allakhazam.com/search.html';
			$color = 'sorange';
			break;

		case 'thott':
			$title = 'Thottbot';
			$img = 'http://i.thottbot.com/Thottbot.jpg';
			$text = 's';
			$inputs = array();
			$method = 'post';
			$url = 'http://www.thottbot.com';
			$color = 'sblue';
			break;

		case 'wowhead':
			$title = 'WoWHead';
			$img = 'http://www.wowhead.com/images/logo.gif';
			$text = 'search';
			$inputs = array();
			$method = 'get';
			$url = 'http://www.wowhead.com';
			$color = 'sred';
			break;

		case 'wwndata':
			$title = 'WWN Data';
			$img = 'http://wwndata.worldofwar.net/images/logo.jpg';
			$text = 'search';
			$inputs = array();
			$method = 'get';
			$url = 'http://wwndata.worldofwar.net/search.php';
			$color = 'sgray';
			break;
	}

	if( !empty($title) )
	{
		$output = '
<table cellspacing="0" class="bodyline">
	<tr>
		<td valign="middle" class="membersRowRight1"><div align="center">
			<img src="'.$img.'" alt="'.$title.'" width="158" height="51" /><br />
			<br />
			<form method="'.$method.'" action="'.$url.'">
				'.$act_words['search'].':
				<input type="text" name="'.$text.'" class="wowinput128" />&nbsp;&nbsp;
				<input type="submit" value="Go" onclick="win=window.open(\'\',\'myWin\',\'\'); this.form.target=\'myWin\'" />
			</form></div></td>
	</tr>
</table>';

		return messagebox($output,$title,$color);
	}
	else
	{
		return;
	}
}
