<?php
/******************************
 * WoWRoster.net  Roster
 * Copyright 2002-2006
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

// -[ deDE localization ]-

// Installer
$lang['SortMember_install_page']= 'SortMember Installationssystem';
$lang['SortMember_install']     = 'Die SortMember Tabellen sind noch nicht installiert. Dr�cke Install um die benötigten Tabellen zu erzeugen.';
$lang['SortMember_upgrade']     = 'Die SortMember Tabellen sind nicht auf dem neuesten Stand. Betätige Update um die Datenbank zu aktualisieren oder Install um die Tabellen zu löschen und neu zu erzeugen.';
$lang['SortMember_no_upgrade']  = 'Die SortMember Tabellen sind schon auf dem neuesten Stand. Betätige Reinstall um die Tabellen nochmal zu installieren.';
$lang['SortMember_uninstall']   = 'Dies wird die SortMember Konfiguration und Main/ALT-Beziehungen löschen. Klicken Sie \'Deinstallation\' um fortzufahren.';
$lang['SortMember_installed']   = 'Glückwunsch, SortMember wurde erfolgreich installiert. Klicke auf den unten stehenden Link um es zu Konfigurieren.';
$lang['SortMember_uninstalled'] = 'SortMember ist deinstalliert worden. Sie können jetzt das Addon von Ihrem Webserver löschen.';

// Main/Alt display
$lang['SortMember_Members']		= 'SortMembers';
$lang['SortMember_Stats']		= 'SortStats';
$lang['SortMember_Honor']		= 'SortHonor';
$lang['SortMember_NoAction']    = 'Schau bitte nach, ob die URL korrekt ist, da eine inkorrekte Aktion getätigt wurde. Bist du einem Link innerhalb dieses Addons gefolgt, mache bitte einen Bugreport im WoWroster Forum.';

$lang['memberssortfilter']		= 'Sorting order and filtering';
$lang['memberssort']			= 'Sort';
$lang['memberscolshow']			= 'Show/Hide Columns';
$lang['membersfilter']			= 'Filter rows';

// Configuration
$lang['SortMember_config']      = '&Ouml;ffne die SortMember Konfiguration';
$lang['SortMember_config_page'] = 'SortMember Konfiguration';
$lang['documentation']          = 'Documentation';
$lang['uninstall']              = 'Deinstallation';

// Page names
$lang['admin']['display']       = 'Display|Configure display options specific to SortMember.';
$lang['admin']['members']       = 'Members List|Configure visibility of members list columns.';
$lang['admin']['stats']         = 'Stats List|Configure visibility of stats list columns.';
$lang['admin']['honor']         = 'Honor List|Configure visibility of honor list columns.';
$lang['admin']['documentation'] = 'Documentation|SortMember documentation on the WoWRoster wiki.';

// Settings names on display page
$lang['admin']['openfilter']	= 'Open filterbox|Specify if you want the filterbox open or closed by default.';
$lang['admin']['nojs']          = 'List type|Specify if you want to use serverside sorting or clientside sorting+filtering.';
$lang['admin']['def_sort']		= 'Default sort|Specify the default sort method.';
$lang['admin']['member_tooltip']= 'Member tooltip|Turn the info tooltips on the member names on or off.';
$lang['admin']['icon_size']     = 'Icon size|Set the size for the class/honor/profession icons.';
$lang['admin']['class_icon']    = 'Class icon|Turn the class icon display on or off.';
$lang['admin']['class_color']   = 'Class colors|Turn the coloring of class names on or off.';
$lang['admin']['level_bar']     = 'Level bars|Display level bars instead of just numbers.';
$lang['admin']['honor_icon']    = 'Honor icon|Display honor rank icon.';
$lang['admin']['compress_note'] = 'Compress note|Show guild note in a tooltip instead of in the column.';

// Settings on Members page
$lang['admin']['member_class']  = 'Class|Set visibility of the class column on the members page';
$lang['admin']['member_level']  = 'Level|Set visibility of the level column on the members page';
$lang['admin']['member_gtitle'] = 'Guild Title|Set visibility of the guild title column on the members page';
$lang['admin']['member_hrank']  = 'Honor Rank|Set visibility of the last honor rank column on the members page';
$lang['admin']['member_prof']   = 'Class|Set visibility of the profesion column on the members page';
$lang['admin']['member_hearth'] = 'Hearth|Set visibility of the hearthstone location column on the members page';
$lang['admin']['member_zone']   = 'Zone|Set visibility of the last zone column on the members page';
$lang['admin']['member_online'] = 'Last Online|Set visibility of the last online column on the members page';
$lang['admin']['member_update'] = 'Last Update|Set visibility of the last update column on the members page';
$lang['admin']['member_note']   = 'Note|Set visibility of the note column on the members page';
$lang['admin']['member_onote']  = 'Officer Note|Set visibility of the officer note column on the members page';

// Settings on Stats page
$lang['admin']['stats_class']   = 'Class|Set visibility of the class column on the stats page';
$lang['admin']['stats_level']   = 'Level|Set visibility of the level column on the stats page';
$lang['admin']['stats_str']     = 'Strength|Set visibility of the strength column on the stats page';
$lang['admin']['stats_agi']     = 'Agility|Set visibility of the agility column on the stats page';
$lang['admin']['stats_sta']     = 'Stamina|Set visibility of the stamina column on the stats page';
$lang['admin']['stats_int']     = 'Intelect|Set visibility of the intelect column on the stats page';
$lang['admin']['stats_spi']     = 'Spirit|Set visibility of the spirit column on the stats page';
$lang['admin']['stats_sum']     = 'Total|Set visibility of the stat sum column on the stats page';
$lang['admin']['stats_health']  = 'Health|Set visibility of the health column on the stats page';
$lang['admin']['stats_mana']    = 'Mana|Set visibility of the mana column on the stats page';
$lang['admin']['stats_armor']   = 'Armor|Set visibility of the armor column on the stats page';
$lang['admin']['stats_dodge']   = 'Dodge|Set visibility of the dodge column on the stats page';
$lang['admin']['stats_parry']   = 'Parry|Set visibility of the parry column on the stats page';
$lang['admin']['stats_block']   = 'Block|Set visibility of the block column on the stats page';
$lang['admin']['stats_crit']    = 'Crit|Set visibility of the crit column on the stats page';

// Settings on Honor page
$lang['admin']['honor_class']   = 'Class|Set visibility of the class column on the honor page';
$lang['admin']['honor_level']   = 'Level|Set visibility of the level column on the honor page';
$lang['admin']['honor_thk']     = 'Today\'s HK|Set visibility of the Today\'s HK column on the honor page';
$lang['admin']['honor_tcp']     = 'Today\'s CP|Set visibility of the Today\'s CP column on the honor page';
$lang['admin']['honor_yhk']     = 'Yesterday\'s HK|Set visibility of the Yesterday\'s HK column on the honor page';
$lang['admin']['honor_ycp']     = 'Yesterday\'s CP|Set visibility of the Yesterday\'s CP column on the honor page';
$lang['admin']['honor_lifehk']  = 'Lifetime HK|Set visibility of the Lifetime HK column on the honor page';
$lang['admin']['honor_hrank']   = 'Honor Rank|Set visibility of the Honor Rank column on the honor page';
$lang['admin']['honor_hp']      = 'Honor Points|Set visibility of the honor points column on the honor page';
$lang['admin']['honor_ap']      = 'Arena Points|Set visibility of the arena points column on the honor page';

// Translators:
//
// Geschan
// Sphinx
// Lunzet


// Notes from German translator:

// UTF-8
// ä = �
// Ä = �
// ö = �
// &Ouml;  = �  //Da fehlt mir irgendwie die Kurzform ;)
// ü = �
// Ü = �
// ß = �
// ´ = �
//  = "
