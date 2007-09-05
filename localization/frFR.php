<?php
/**
 * WoWRoster.net WoWRoster
 *
 * frFR Locale File
 *
 * frFR translation by wowodo, lesablier, Exerladan, Ansgar and Theophilius
 *
 * LICENSE: Licensed under the Creative Commons
 *          "Attribution-NonCommercial-ShareAlike 2.5" license
 *
 * @copyright  2002-2007 WoWRoster.net
 * @license    http://creativecommons.org/licenses/by-nc-sa/2.5   Creative Commons "Attribution-NonCommercial-ShareAlike 2.5"
 * @version    SVN: $Id$
 * @link       http://www.wowroster.net
 * @since      File available since Release 1.7.1
 * @package    WoWRoster
 * @subpackage Locale
*/

$lang['langname'] = 'French';

//Instructions how to upload, as seen on the mainpage
$lang['update_link']='Cliquer ici pour les instructions de mise à jour.';
$lang['update_instructions']='Instructions de mise à jour.';

$lang['lualocation']='Cliquer parcourir (browse) et télécharger les fichiers *.lua<br />';

$lang['filelocation']='se trouve sous <br /><i>*WOWDIR*</i>\\\\WTF\\\\Account\\\\<i>*ACCOUNT_NAME*</i>\\\\SavedVariables';

$lang['noGuild']='Impossible de trouver la guilde dans la base de données. Mettre à jour la liste des membres.';
$lang['nodata']='Impossible de trouver la guilde: <b>\'%1$s\'</b> du serveur <b>\'%2$s\'</b><br />Vous devez préalablement<a href="%3$s">charger votre guilde</a> et <a href="%4$s">finaliser la configuration</a><br /><br /><a href="http://www.wowroster.net/MediaWiki/Roster:Install" target="_blank">Les instructions d\'installation sont disponibles</a>';
$lang['nodata_title']='Données de guilde introuvables';

$lang['update_page']='Mise à jour du profil';

$lang['guild_addonNotFound']='Impossible de trouver la Guilde. L\'Addon GuildProfiler est-il installé correctement?';

$lang['ignored']='Ignoré';
$lang['update_disabled']='L\'accès à Update.php a été désactivé';

$lang['nofileUploaded']='Votre UniUploader n\'a pas téléchargé de fichier(s), ou des fichiers erronés.';
$lang['roster_upd_pwLabel']='Mot de passe du Roster';
$lang['roster_upd_pw_help']='(Some lua updates may require a password)';


$lang['roster_error'] = 'Erreur lié au Roster';
$lang['sql_queries'] = 'Requêtes SQL';
$lang['invalid_char_module'] = 'Caractères interdits dans le nom du module';
$lang['module_not_exist'] = 'Le module [%1$s] n\'existe pas';

$lang['addon_error'] = 'Erreur lié au greffon';
$lang['specify_addon'] = 'Vous devez spécifier le nom du greffon !';
$lang['addon_not_exist'] = '<b>Le greffon [%1$s] n\existe pas !</b>';
$lang['addon_disabled'] = '<b>Le greffon [%1$s] a été désactivé</b>';
$lang['addon_not_installed'] = '<b>Le greffon [%1$s] n\'est pas encore installé</b>';
$lang['addon_no_config'] = '<b>Le greffon [%1$s] n\'est pas configuré</b>';

$lang['char_error'] = 'Erreur lié au personnage';
$lang['specify_char'] = 'Le personnage n\'est pas indiqué';
$lang['no_char_id'] = 'Désolé, pas de données relatives au personnage pour [ %1$s ]';
$lang['no_char_name'] = 'Désolé, pas de données relatives au personnage pour <strong>%1$s</strong> de <strong>%2$s</strong>';

$lang['roster_cp'] = 'Panneau de contrôle du Roster';
$lang['roster_cp_ab'] = 'PC Roster';
$lang['roster_cp_not_exist'] = 'La page [%1$s] n\'existe pas';
$lang['roster_cp_invalid'] = 'La page spécifiée n\'est pas valide ou vous n\'avez pas les droits nécessaires pour y accéder';

$lang['parsing_files'] = 'Traitement des fichiers';
$lang['parsed_time'] = 'Fichier %1$s traité en %2$s secondes';
$lang['error_parsed_time'] = 'Le traitement du fichier %1$s a échoué après %2$s secondes';
$lang['upload_not_accept'] = 'Le fichier %1$s ne peut être traité.';

$lang['processing_files'] = 'Traitement des fichiers';
$lang['error_addon'] = 'Le greffon %1$s a généré une erreur dans la méthode %2$s';
$lang['addon_messages'] = 'Messages du greffon :';

$lang['not_accepted'] = '%1$s %2$s @ %3$s-%4$s n\'est pas autorisé';

$lang['not_updating'] = 'Pas de mise à jour de %1$s pour [%2$s] - %3$s';
$lang['not_update_guild'] = 'Pas de mise à jour de la liste des membres de la guilde pour %1$s@%3$s-%2$s';
$lang['not_update_guild_time'] = 'Pas de mise à jour de la liste des membres de la guilde pour %1$s. Le profil de guilde est trop ancien';
$lang['not_update_char_time'] = 'Pas de mise à jour pour le personnage nommé %1$s. Son profil est trop ancien';
$lang['no_members'] = 'Les données n\'indiquent aucun membre de guilde';
$lang['upload_data'] = 'Mise à jour des données de %1$s pour [<span class="orange">%2$s@%4$s-%3$s</span>]';
$lang['realm_ignored'] = 'Royaume : %1$s non traité';
$lang['guild_realm_ignored'] = 'Guilde : %1$s @ Royaume : %2$s non traitée';
$lang['update_members'] = 'Mise à jour des membres de la guilde';
$lang['update_errors'] = 'Erreurs de mise à jour';
$lang['update_log'] = 'Journal des mises à jour';
$lang['save_error_log'] = 'Sauver le journal des erreurs';
$lang['save_update_log'] = 'Sauver le journal des mises à jour';

$lang['new_version_available'] = 'Une nouvelle version de %1$s est disponible <span class="green">v%2$s</span><br />vous pouvez la récupérer <a href="%3$s" target="_blank">ICI</a>';

$lang['remove_install_files'] = 'Supprimez les fichiers d\'installation';
$lang['remove_install_files_text'] = 'Merci de supprimer <span class="green">install.php</span> de ce répertoire';

$lang['upgrade_wowroster'] = 'Mise à jour de WoWRoster';
$lang['upgrade'] = 'Mise à jour';
$lang['select_version'] = 'Choisissez votre version';
$lang['upgrade_wowroster_text'] = "Il semblerait que vous ayez chargé une nouvelle version du Roster<br /><br />\nVotre version : <span class=\"red\">%1\$s</span><br />\nNouvelle version : <span class=\"green\">%2\$s</span><br /><br />\n<a href=\"upgrade.php\" style=\"border:1px outset white;padding:2px 6px 2px 6px;\">MISE A JOUR</a>";
$lang['no_upgrade'] = 'Vous avez déjà mis à jour le Roster<br />Ou vous avez une version plus récente que celle-ci';
$lang['upgrade_complete'] = 'Le Roster a été mis à jour';

// Menu buttons
$lang['menu_header_01'] = 'Guildes';
$lang['menu_header_02'] = 'Royaumes';
$lang['menu_header_03'] = 'Mise à jour';
$lang['menu_header_04'] = 'Utilitaires';
$lang['menu_header_scope_panel'] = 'Panneau de contrôle : %s';

// Updating Instructions
$lang['index_text_uniloader'] = '<b><u>Prérequis à l\'utilisation d\'UniUploader:</b></u><a href="http://www.microsoft.com/downloads/details.aspx?FamilyID=0856EACB-4362-4B0D-8EDD-AAB15C5E04F5&displaylang=en">Microsoft .NET Framework</a> installé<br />Pour les utilisateurs d\'OS autres que Windows, utiliser JUniUploader qui vous permettra d\'effectuer les mêmes opérations que UniUploader mais en mode Java.';

$lang['update_instruct']='
<strong>Actualisation automatique recommandée :<strong>
<ul>
<li>Utiliser <a href="%1$s" target="_blank">UniUploader</a><br />
%2$s</li>
</ul>
<strong>Instructions pour actualiser le profil:<strong>
<ol>
<li>Download <a href="%3$s" target="_blank">Character Profiler</a></li>
<li>Décompresser le fichier zip dans son propre répertoire dans le répertoire *WoW Directory*\Interface\Addons\.</li>
<li>Démarrer WoW</li>
<li>Ouvrir votre compte en banque, la fenêtre des quêtes, et la fenêtre des professions qui contient les recettes</li>
<li>Se déconnecter ou quitter WoW.<br />(Voir ci-dessus si vous disposez d\'UniUploader pour automatiser l\'envois des informations.)</li>
<li>Aller sur la page <a href="%4$s">d\'actualisation</a></li>
<li>%5$s</li>
</ol>';

$lang['update_instructpvp']='
<strong>Statistique PvP Optionnel:</strong>
<ol>
<li>Télécharger <a href="%1$s" target="_blank">PvPLog</a></li>
<li>Décompresser le fichier zip dans son propre directory sous *WoW Directory*\Interface\Addons\ (PvPLog\) répertoire.</li>
<li>Duel ou PvP</li>
<li>Envoyer les informations PvPLog.lua (voir étape 7 de l\'actualisation du profil).</li>
</ol>';

$lang['roster_credits']='Remerciements à <a href="http://www.poseidonguild.com" target="_blank">Celandro</a>, <a href="http://www.movieobsession.com" target="_blank">Paleblackness</a>, Pytte, <a href="http://www.witchhunters.net" target="_blank">Rubricsinger</a>, et <a href="http://sourceforge.net/users/konkers/" target="_blank">Konkers</a> pour le codage du moteur primitif utilisé par ce site.<br />
Page officiel de WoWRoster - <a href="http://www.wowroster.net" target="_blank">www.wowroster.net</a><br />
World of Warcraft et Blizzard Entertainment sont des marques, déposées ou non, appartenant à Blizzard Entertainment Inc. aux Etats-Unis d\'Amérique et/ou dans les autres pays. Toutes les autres marques sont la propriété de leurs seuls ayant-droits respectifs..<br />
<a href="%1$s">Crédits supplémentaires</a>';


$lang['timeformat'] = '%d/%m/%Y %H:%i:%s'; // MySQL Time format      (example - '%a %b %D, %l:%i %p' => 'Mon Jul 23rd, 2:19 PM') - http://dev.mysql.com/doc/refman/4.1/en/date-and-time-functions.html
$lang['phptimeformat'] = 'd/m/Y H:i:s';    // PHP date() Time format (example - 'M D jS, g:ia' => 'Mon Jul 23rd, 2:19pm') - http://www.php.net/manual/en/function.date.php


/**
 * Realmstatus Localizations
 */
$lang['rs'] = array(
	'ERROR' => 'Error',
	'NOSTATUS' => 'No Status',
	'UNKNOWN' => 'Unknown',
	'RPPVP' => 'RP-PvP',
	'PVE' => 'Normal',
	'PVP' => 'PvP',
	'RP' => 'RP',
	'OFFLINE' => 'Offline',
	'LOW' => 'Low',
	'MEDIUM' => 'Medium',
	'HIGH' => 'High',
	'MAX' => 'Max',
);


//single words used in menu and/or some of the functions, so if theres a wow eqivalent be correct
$lang['guildless']='Sans guilde';
$lang['util']='Utilitaires';
$lang['char']='personnage';
$lang['upload']='Envoyer';
$lang['required']='Requis';
$lang['optional']='Optionnel';
$lang['attack']='Attaque';
$lang['defense']='Défense';
$lang['class']='Classe';
$lang['race']='Race';
$lang['level']='Niveau';
$lang['lastzone']='Dernière Zone';
$lang['note']='Note';
$lang['officer_note']='Note d\'officier';
$lang['title']='Titre';
$lang['name']='Nom';
$lang['health']='Vie';
$lang['mana']='Mana';
$lang['gold']='Or';
$lang['armor']='Armure';
$lang['lastonline']='Dernière connexion';
$lang['online']='Connexion';
$lang['lastupdate']='Dernière mise à jour';
$lang['currenthonor']='Rang d\'honneur actuel';
$lang['rank']='Rang';
$lang['sortby']='Trier par %';
$lang['total']='Total';
$lang['hearthed']='Pierre de Foyer';
$lang['recipes']='Recettes';
$lang['bags']='Sacs';
$lang['character']='Personnage';
$lang['money']='Argent';
$lang['bank']='Banque';
$lang['raid']='CT_Raid';
$lang['quests']='Quêtes';
$lang['roster']='Roster';
$lang['alternate']='Alternate';
$lang['byclass']='Par Classe';
$lang['menustats']='Stats';
$lang['menuhonor']='Honneur';
//start search engine
$lang['search']='Rechercher';
$lang['search_roster']='Rechercher sur le Roster';
$lang['search_onlyin']='Rechercher uniquement dans ce greffon';
$lang['search_advancedoptionsfor']='Options avancées pour :';
$lang['search_results']='Rechercher des résultats pour';
$lang['search_results_from']='Voici les résultats de votre recherche';
$lang['search_momatches']='Désolé, aucun résultat ne concorde avec votre recherche';
$lang['search_didnotfind']='Vous n\'avez pas trouvé ce que vous recherchiez ? Essayez ici !';
$lang['search_for']='Rechercher dans le Roster pour';
$lang['search_next_matches'] = 'Résultat suivant pour : ';
$lang['search_previous_matches'] = 'Résultat précédent pour : ';
$lang['search_results_count'] = 'Résultats';
$lang['submited_author'] = 'Envoyé par';
$lang['submited_date'] = 'Date de soumission';
//end search engine
$lang['update']='Mise à jour';
$lang['credit']='Crédits';
$lang['members']='Membres';
$lang['items']='Objets';
$lang['find']='Trouver les objets contenants';
$lang['upprofile']='Mise à jour du profil';
$lang['backlink']='Retour au Roster';
$lang['gender']='Genre';
$lang['unusedtrainingpoints']='Points de formation non utilisés';
$lang['unusedtalentpoints']='Points de talent non utilisés';
$lang['talentexport']='Construction de l\'arbre de talents';
$lang['questlog']='Journal des Quêtes';
$lang['recipelist']='Liste des recettes';
$lang['reagents']='Réactifs';
$lang['item']='Objet';
$lang['type']='Type';
$lang['date']='Date';
$lang['complete'] = 'Terminée';
$lang['failed'] = 'Echec';
$lang['completedsteps'] = 'Etapes finies';
$lang['currentstep'] = 'Etapes actuelles';
$lang['uncompletedsteps'] = 'Etapes incomplètes';
$lang['key'] = 'Clef';
$lang['timeplayed'] = 'Temps joué';
$lang['timelevelplayed'] = 'Temps joué à ce niveau';
$lang['Addon'] = 'Greffons :';
$lang['advancedstats'] = 'Statistiques avancées';
$lang['crit'] = 'Crit';
$lang['dodge'] = 'Esquive';
$lang['parry'] = 'Parade';
$lang['block'] = 'Bloquer';
$lang['realm'] = 'Royaume';
$lang['region'] = 'Region';
$lang['server'] = 'Serveur';
$lang['faction'] = 'Faction';
$lang['page'] = 'Page';
$lang['general'] = 'Général';
$lang['prev'] = 'Précédente';
$lang['next'] = 'Suivante';
$lang['memberlog'] = 'Journal';
$lang['removed'] = 'Enlevé';
$lang['added'] = 'Ajouté';
$lang['add'] = 'Ajout';
$lang['delete'] = 'Suppression';
$lang['updated'] = 'Mis à jour';
$lang['no_info'] = 'Pas d\'information';
$lang['none']='Rien';
$lang['kills']='Tués';
$lang['allow'] = 'Permis';
$lang['disallow'] = 'Interdit';
$lang['locale'] = 'Locale';
$lang['language'] = 'Langage';
$lang['default'] = 'Default';
$lang['proceed'] = 'Valider';
$lang['submit'] = 'Soumettre';

$lang['rosterdiag'] = 'Diagnostic du Roster';
$lang['difficulty'] = 'Difficultée';
$lang['recipe_4'] = 'optimal';
$lang['recipe_3'] = 'moyen';
$lang['recipe_2'] = 'facile';
$lang['recipe_1'] = 'insignifiant';
$lang['roster_config'] = 'Configuration du Roster';

$lang['search_names'] = 'Recherche de noms';
$lang['search_items'] = 'Recherche d\objets';
$lang['search_tooltips'] = 'Recherche d\'aide';

//this needs to be exact as it is the wording in the db
$lang['professions']='Métiers';
$lang['secondary']='Compétences secondaires';
$lang['Blacksmithing']='Forge';
$lang['Mining']='Minage';
$lang['Herbalism']='Herboristerie';
$lang['Alchemy']='Alchimie';
$lang['Leatherworking']='Travail du cuir';
$lang['Jewelcrafting']='Joaillerie';
$lang['Skinning']='Dépeçage';
$lang['Tailoring']='Couture';
$lang['Enchanting']='Enchantement';
$lang['Engineering']='Ingénierie';
$lang['Cooking']='Cuisine';
$lang['Fishing']='Pêche';
$lang['First Aid']='Premiers soins';
$lang['Poisons']='Poisons';
$lang['backpack']='Sac à dos';
$lang['PvPRankNone']='Rien';

// Uses preg_match() to find required level in recipie tooltip
$lang['requires_level'] = '/Niveau ([\d]+) requis/';

//Tradeskill-Array
$lang['tsArray'] = array (
	$lang['Alchemy'],
	$lang['Herbalism'],
	$lang['Blacksmithing'],
	$lang['Mining'],
	$lang['Leatherworking'],
	$lang['Jewelcrafting'],
	$lang['Skinning'],
	$lang['Tailoring'],
	$lang['Enchanting'],
	$lang['Engineering'],
	$lang['Cooking'],
	$lang['Fishing'],
	$lang['First Aid'],
	$lang['Poisons'],
);

//Tradeskill Icons-Array
$lang['ts_iconArray'] = array (
	$lang['Alchemy']=>'trade_alchemy',
	$lang['Herbalism']=>'trade_herbalism',
	$lang['Blacksmithing']=>'trade_blacksmithing',
	$lang['Mining']=>'trade_mining',
	$lang['Leatherworking']=>'trade_leatherworking',
	$lang['Jewelcrafting']=>'inv_misc_gem_02',
	$lang['Skinning']=>'inv_misc_pelt_wolf_01',
	$lang['Tailoring']=>'trade_tailoring',
	$lang['Enchanting']=>'trade_engraving',
	$lang['Engineering']=>'trade_engineering',
	$lang['Cooking']=>'inv_misc_food_15',
	$lang['Fishing']=>'trade_fishing',
	$lang['First Aid']=>'spell_holy_sealofsacrifice',
	$lang['Poisons']=>'ability_poisons'
);

// Riding Skill Icons-Array
$lang['riding'] = 'Monte';
$lang['ts_ridingIcon'] = array(
	'Elfe de la nuit'=>'ability_mount_whitetiger',
	'Humain'=>'ability_mount_ridinghorse',
	'Nain'=>'ability_mount_mountainram',
	'Gnome'=>'ability_mount_mechastrider',
	'Mort-vivant'=>'ability_mount_undeadhorse',
	'Troll'=>'ability_mount_raptor',
	'Tauren'=>'ability_mount_kodo_03',
	'Orc'=>'ability_mount_blackdirewolf',
	'Elfe de sang' => 'ability_mount_cockatricemount',
	'Draenei' => 'ability_mount_ridingelekk',
	'Paladin'=>'ability_mount_dreadsteed',
	'D?moniste'=>'ability_mount_nightmarehorse'
);

// Class Icons-Array
$lang['class_iconArray'] = array (
	'Druide'=>'druid_icon',
	'Chasseur'=>'hunter_icon',
	'Mage'=>'mage_icon',
	'Paladin'=>'paladin_icon',
	'Prêtre'=>'priest_icon',
	'Voleur'=>'rogue_icon',
	'Chaman'=>'shaman_icon',
	'Démoniste'=>'warlock_icon',
	'Guerrier'=>'warrior_icon',
);

// Class Color-Array
$lang['class_colorArray'] = array(
	'Druide' => 'FF7C0A',
	'Chasseur' => 'AAD372',
	'Mage' => '68CCEF',
	'Paladin' => 'F48CBA',
	'Prêtre' => 'ffffff',
	'Voleur' => 'FFF468',
	'Chaman' => '00DBBA',
	'Démoniste' => '9382C9',
	'Guerrier' => 'C69B6D'
);

// Class To English Translation
$lang['class_to_en'] = array(
	'Druide' => 'Druid',
	'Chasseur' => 'Hunter',
	'Mage' => 'Mage',
	'Paladin' => 'Paladin',
	'Prêtre' => 'Priest',
	'Voleur' => 'Rogue',
	'Chaman' => 'Shaman',
	'Démoniste' => 'Warlock',
	'Guerrier' => 'Warrior'
);

$lang['pvplist']='Stats JcJ/PvP';
$lang['pvplist1']='Guilde qui a le plus souffert de nos actions';
$lang['pvplist2']='Guilde qui nous a le plus fait souffrir';
$lang['pvplist3']='Joueur qui a le plus souffert de nos actions';
$lang['pvplist4']='Joueur qui nous a le plus tué';
$lang['pvplist5']='Membre de la guilde tuant le plus';
$lang['pvplist6']='Membre de la guilde tué le plus';
$lang['pvplist7']='Membre ayant la meilleure moyenne de mort';
$lang['pvplist8']='Membre ayant la meilleure moyenne de défaîte';

$lang['hslist']=' Stats du Système d\'Honneur';
$lang['hslist1']='Membre le mieux classé';
$lang['hslist2']='Membre ayant le plus de VH';
$lang['hslist3']='Le plus de Points d\'Honneur';
$lang['hslist4']='Le plus de Points d\'Arène';

$lang['Druid']='Druide';
$lang['Hunter']='Chasseur';
$lang['Mage']='Mage';
$lang['Paladin']='Paladin';
$lang['Priest']='Prêtre';
$lang['Rogue']='Voleur';
$lang['Shaman']='Chaman';
$lang['Warlock']='Démoniste';
$lang['Warrior']='Guerrier';

$lang['today']='Aujourd\'hui';
$lang['todayhk']='VH du jour';
$lang['todaycp']='CP d\'aujourd\'hui';
$lang['yesterday']='Hier';
$lang['yesthk']='VH d\'hier';
$lang['yestcp']='CP d\'hier';
$lang['thisweek']='Cette semaine';
$lang['lastweek']='Semaine passée';
$lang['lifetime']='A vie';
$lang['lifehk']='VH à vie';
$lang['honorkills']='Vict. Honorables';
$lang['dishonorkills']='Vict. Déshonorantes';
$lang['honor']='Honneur';
$lang['standing']='Position';
$lang['highestrank']='Plus haut niveau';
$lang['arena']='Arène';

$lang['when']='Quand';
$lang['guild']='Guilde';
$lang['result']='Résultat';
$lang['zone']='Zone';
$lang['subzone']='Sous-zone';
$lang['yes']='Oui';
$lang['no']='Non';
$lang['win']='Victoire';
$lang['loss']='Défaite';
$lang['unknown']='Inconnu';

//strings for Rep-tab
$lang['exalted']='Exalté';
$lang['revered']='Révéré';
$lang['honored']='Honoré';
$lang['friendly']='Amical';
$lang['neutral']='Neutre';
$lang['unfriendly']='Inamical';
$lang['hostile']='Hostile';
$lang['hated']='Détesté';
$lang['atwar']='En guerre';
$lang['notatwar']='Pas en guerre';


// Quests page external links (on character quests page)
// $lang['questlinks'][][] = array(
// 		'name'=> 'Name',  //This is the name displayed on the quests page
// 		'url#'=> 'url',  //This is the URL used for the quest lookup

$lang['questlinks'][] = array(
	'name'=>'Judgehype FR',
	'url1'=>'http://worldofwarcraft.judgehype.com/index.php?page=squete&amp;Ckey=',
	'url2'=>'&amp;obj=&amp;desc=&amp;minl=',
	'url3'=>'&amp;maxl='
);

$lang['questlinks'][] = array(
	'name'=>'WoWDBU FR',
	'url1'=>'http://wowdbu.com/7.html?m=2&amp;mode=qsearch&amp;title=',
	'url2'=>'&amp;obj=&amp;desc=&amp;minl=',
	'url3'=>'&amp;maxl='
);

$lang['questlinks'][] = array(
	'name'=>'Allakhazam US',
	'url1'=>'http://wow.allakhazam.com/db/qlookup.html?name=',
	'url2'=>'&amp;obj=&amp;desc=&amp;minl=',
	'url3'=>'&amp;maxl='
);

/*$lang['questlinks'][] = array(
	'name'=>'WoWHead',
	'url1'=>'http://www.wowhead.com/?quests&amp;filter=na=',
	'url2'=>';minle=',
	'url3'=>';maxle='
);*/

// Items external link
// Add as manu item links as you need
// Just make sure their names are unique
// uses the 'item_id' for data
$lang['itemlink'] = 'Item Links';
$lang['itemlinks']['WoWDBU FR'] ='http://wowdbu.com/2-1.html?way=asc&amp;order=name&amp;showstats=&amp;type_limit=0&amp;lvlmin=&amp;lvlmax=&amp;name=';
$lang['itemlinks']['Judgehype FR'] = 'http://worldofwarcraft.judgehype.com/index.php?page=bc-result&Ckey=';
$lang['itemlinks']['Allakhazam'] = 'http://wow.allakhazam.com/search.html?q=';
//$lang['itemlinks']['WoWHead'] = 'http://www.wowhead.com/?items&amp;filter=na=';

// WoW Data Site Search
// Add as many item links as you need
// Just make sure their names are unique
// use these locales for data searches
$lang['data_search'] = 'WoW Data Site Search';
$lang['data_links']['Thottbot'] = 'http://www.thottbot.com/index.cgi?s=';
$lang['data_links']['Allakhazam'] = 'http://wow.allakhazam.com/search.html?q=';
$lang['data_links']['WWN Data'] = 'http://wwndata.worldofwar.net/search.php?search=';
$lang['data_links']['WoWHead'] = 'http://www.wowhead.com/?search=';

// Google Search
// Add as many item links as you need
// Just make sure their names are unique
// use these locales for data searches
$lang['google_search'] = 'Google';
$lang['google_links']['Google'] = 'http://www.google.com/search?q=';
$lang['google_links']['Google Groups'] = 'http://groups.google.com/groups?q=';
$lang['google_links']['Google Images'] = 'http://images.google.com/images?q=';
$lang['google_links']['Google News'] = 'http://news.google.com/news?q=';

// Definition for item tooltip coloring
$lang['tooltip_use']='Utiliser...';
$lang['tooltip_requires']='Niveau';
$lang['tooltip_reinforced']='renforcée';
$lang['tooltip_soulbound']='Lié';
$lang['tooltip_boe']='Lié quand équipé';
$lang['tooltip_equip']='Équipé...';
$lang['tooltip_equip_restores']='Équipé.:.Rend';
$lang['tooltip_equip_when']='Équipé : Lorsque';
$lang['tooltip_chance']='Chance';
$lang['tooltip_enchant']='Enchantement';
$lang['tooltip_set']='Ensemble...|Complet...|Set...';
$lang['tooltip_rank']='Rang';
$lang['tooltip_next_rank']='Prochain rang';
$lang['tooltip_spell_damage']='les dégâts et les soins produits par les sorts et effets magiques';
$lang['tooltip_school_damage']='les dégâts infligés par les sorts et effets';
$lang['tooltip_healing_power']='les soins prodigués par les sorts et effets';
$lang['tooltip_reinforced_armor']='Armure renforcée';
$lang['tooltip_damage_reduction']='Réduit les points de dégâts';
//--Tooltip Parsing -- Translated by Kalia
$lang['tooltip_durability']='Durabilité';
$lang['tooltip_unique']='Unique';
$lang['tooltip_speed']='Vitesse';
$lang['tooltip_poisoneffect']='^Chaque coup a';

$lang['tooltip_preg_armor']='/Armure.+ (\d+)/';
$lang['tooltip_preg_durability']='/Durabilité (\d+) \/ (\d+)/';
$lang['tooltip_preg_madeby']='/\<Artisan.+ (.+)\>/';  // this is the text that shows who crafted the item.
$lang['tooltip_preg_bags']='/Conteneur (\d+) emplacements/';  // text for bags, ie '16 slot bag'
$lang['tooltip_preg_socketbonus']='/Bonus de sertissage : (.+)\n/';
$lang['tooltip_preg_classes']='/^(Classes.?:.)(.+)$/'; // text for class restricted items
$lang['tooltip_preg_races']='/^(Races.?:.)(.+)$/'; // text for race restricted items
$lang['tooltip_preg_charges']='/(\d+) Charges/'; // text for items with charges
$lang['tooltip_preg_block']='/(Bloquer)...(\d+)/i';  // text for shield blocking values
$lang['tooltip_preg_emptysocket']='/(?:-?châsse ?)?(rouge|jaune|bleue|Méta)/i'; // text shown if the item has empty sockets.
$lang['tooltip_preg_reinforcedarmor']='/(Renforcé \(\+\d Armure\))/';
$lang['tooltip_preg_tempenchants']='/(.+\s\(\d+\s(min|sec)\))\n/';

$lang['tooltip_chance_hit']='Chances quand vous touchez...'; // needs to find 'chance on|to hit:'
$lang['tooltip_reg_requires']='Niveau|requis|Requiert'; // À une main
$lang['tooltip_reg_onlyworksinside']='Ne fonctionne qu\'à l\'intérieur du Donjon de la Tempête';
$lang['tooltip_reg_conjureditems']='Objet invoqué disparaissant'; // cas d'un objet invoqué qui disparait après 15 minutes de déconnexion
$lang['tooltip_reg_weaponorbulletdps']='^\(|^Ajoute ';

$lang['tooltip_armor_types']='Tissu|Cuir|Mailles|Plaques';  // the types of armor
$lang['tooltip_weapon_types']='Hache|Arc|Arbaléte|Dague|Canne à pêche|Arme de pugilat|Arme à feu|À une main|Masse|Main droite|Arme d\'hast|Bâton|Epée|Armes de jet|Baguette|Tenu\(e\) en main gauche|Flèche|Balle';
$lang['tooltip_bind_types']='Lié|Lié quand équipé|Objet de quête|Lié quand utilisé';
$lang['tooltip_misc_types']='Doigt|Cou|Dos|Chemise|Bijou|Tabard|Tête|Torse|Jambes|Pieds';
$lang['tooltip_garbage']='Maj clic-droit pour sertir|Temps de recharge';  // these are texts that we really do not need to show in WoWRoster's tooltip so we'll strip them out

//CP v2.1.1+ Gems info
//uses preg_match() to find the type and color of the gem
$lang['gem_preg_singlecolor'] = '/Correspond à une châsse (.+)\./';
$lang['gem_preg_multicolor'] = '/Correspond à une châsse (.+) ou (.+)\./';
$lang['gem_preg_meta'] = '/Ne peut être serti que dans une châsse de méta-gemme\./';
$lang['gem_preg_prismatic'] = '/Correspond à une châsse rouge, jaune ou bleue\./';

//Gem color Array
$lang['gem_colors'] = array(
	'red' => 'rouge',
	'blue' => 'bleue',
	'yellow' => 'jaune',
	'green' => 'verte',
	'orange' => 'orange',
	'purple' => 'pourpre',
	'prismatic' => 'prismatique',
	'meta' => 'Méta' //verify translation
	);
// -- end tooltip parsing

// Warlock pet names for icon displaying
$lang['Imp']='Diablotin';
$lang['Voidwalker']='Marcheur du Vide';
$lang['Succubus']='Succube';
$lang['Felhunter']='Chasseur corrompu';
$lang['Infernal']='Infernal';
$lang['Felguard']='Gangregarde';

// Max experiance for exp bar on char page
$lang['max_exp']='XP maximum';

// Error messages
$lang['CPver_err']='La version du CharacterProfiler utilisée pour capturer les données pour ce personnage est plus ancienne que la version minimum autorisée pour le téléchargement.<br />SVP assurez vous que vous fonctionnez avec la v%1$s et que vous vous êtes connecté sur ce personnage et avez sauvé les données en utilisant cette version.';
$lang['GPver_err']='La version du GuildProfiler utilisée pour capturer les données pour ce personnage est plus ancienne que la version minimum autorisée pour le téléchargement.<br />SVP assurez vous que vous fonctionnez avec la v%1$s';

// Menu titles
$lang['menu_upprofile']='Mise à jour du profil|Mettez à jour votre profil sur ce site';
$lang['menu_search']='Recherche|Rechercher des objets et des recettes dans la base de donnée';
$lang['menu_roster_cp']='PC Roster|Panneau de configuration du Roster';
$lang['menu_credits']='Crédits|Les artisans du projet WoW Roster';

$lang['menuconf_sectionselect']='Zone de sélection';
$lang['menuconf_changes_saved']='Changes to %1$s saved';
$lang['menuconf_no_changes_saved']='No changes saved';
$lang['menuconf_add_button']='Add button';
$lang['menuconf_drag_delete']='Drag here to delete';
$lang['menuconf_addon_inactive']='Addon is inactive';
$lang['menuconf_unused_buttons']='Unused Buttons';

$lang['installer_install_0']='L\'installation de %1$s a réussi';
$lang['installer_install_1']='L\'installation de %1$s a échoué mais le retour à l\'état précédent a réussi';
$lang['installer_install_2']='L\'installation de %1$s a échoué et il n\'a pas été possible de revenir à l\'état précédent la tentative d\'installation';
$lang['installer_uninstall_0']='La désinstallation de %1$s a réussi';
$lang['installer_uninstall_1']='La désinstallation de %1$s a échoué mais le retour à l\'état précédent a réussi';
$lang['installer_uninstall_2']='La désinstallation de %1$s a échoué et il n\'a pas été possible de revenir à l\'état précédent la tentative de désinstallation';
$lang['installer_upgrade_0']='La mise à jour de %1$s a réussi';
$lang['installer_upgrade_1']='La mise à jour de %1$s a échoué mais le retour à l\'état précédent a réussi';
$lang['installer_upgrade_2']='La mise à jour de %1$s a échoué et il n\'a pas été possible de revenir à l\'état précédent la tentative de mise à jour';

$lang['installer_icon'] = 'Icône';
$lang['installer_addoninfo'] = 'Informations du greffon';
$lang['installer_status'] = 'Status';
$lang['installer_installation'] = 'Installation';
$lang['installer_author'] = 'Auteur';
$lang['installer_log'] = 'Journal du gestionnaire de greffon';
$lang['installer_activated'] = 'Activé';
$lang['installer_deactivated'] = 'Désactivé';
$lang['installer_installed'] = 'Installé';
$lang['installer_upgrade_avail'] = 'Une mise à jour est disponible';
$lang['installer_not_installed'] = 'Non installé';

$lang['installer_turn_off'] = 'Cliquez pour désactiver';
$lang['installer_turn_on'] = 'Cliquez pour activer';
$lang['installer_click_uninstall'] = 'Cliquez pour désintaller';
$lang['installer_click_upgrade'] = 'Cliquez pour mettre à jour %1$s de %2$s';
$lang['installer_click_install'] = 'Cliquez pour installer';
$lang['installer_overwrite'] = 'Ecrasement de l\'ancienne version';
$lang['installer_replace_files'] = 'Vous avez écrasé la version actuelle du greffon avec une version plus ancienne.<br />Mettez à jour les fichiers avec la version la plus récente.';

$lang['installer_error'] = 'Erreurs relatives au programme d\'installation';
$lang['installer_invalid_type'] = 'Type d\'installation invalide';
$lang['installer_no_success_sql'] = 'Les requêtes n\'ont pas été ajoutées avec succès au programme d\'installation';
$lang['installer_no_class'] = 'Le fichier contenant les définitions du programme d\'installation pour %1$s ne contient pas de classes d\'installation correctes';
$lang['installer_no_installdef'] = 'inc/install.def.php pour %1$s n\'est pas trouvable';

$lang['installer_no_empty'] = 'Installation impossible avec un nom de greffon vide';
$lang['installer_fetch_failed'] = 'Echec de récupération des données du greffon %1$s';
$lang['installer_addon_exist'] = '%1$s contient déjà %2$s. Vous pouvez revenir en arrère et d\'abord supprimer ce greffon, ou le mettre à jour, ou installer ce greffon sous un nom différent.';
$lang['installer_no_upgrade'] = '%1$s ne contient pas de données à mettre à jour';
$lang['installer_not_upgradable'] = '%1$s ne peut pas mettre à jour %2$s car son nom %3$s n\'est pas dans la liste des greffons pouvant être mis à jour.';
$lang['installer_no_uninstall'] = '%1$s ne contient pas de greffon pouvant être désinstallé.';
$lang['installer_not_uninstallable'] = '%1$s contient le greffon %2$s qui doit être supprimé avec ce programme de désinstallation de greffon.';

// Password Stuff
$lang['password'] = 'Mot de passe';
$lang['changeadminpass'] = 'Changer le mot de passe administrateur';
$lang['changeofficerpass'] = 'Changer le mot de passe de mise à jour';
$lang['changeguildpass'] = 'Changer le mot de passe de guilde';
$lang['old_pass'] = 'Ancien mot de passe';
$lang['new_pass'] = 'Nouveau mot de passe';
$lang['new_pass_confirm'] = 'Confirmation du nouveau mot de passe';
$lang['pass_old_error'] = 'Mot de passe erroné. Merci de fournir le bon mot de passe d\'origine.';
$lang['pass_submit_error'] = 'Erreur d\'envoi. L\'ancien, le nouveau et la confirmation du nouveau mot de passe doivent être fournis.';
$lang['pass_mismatch'] = 'Erreur de mot de passe de confirmation. Merci de saisir le même mot de passe dans les champs nouveau mot de passe et confirmation du nouveau mot de passe';
$lang['pass_blank'] = 'Pas de mot de passe vide. Merci de saisir un mot de passe dans les deux champs. Les mots de passe vides ne sont pas autorisés';
$lang['pass_isold'] = 'Le mot de passe n\'a pas été modifié. Le nouveau mot de passe et l\'ancien sont exactement les mêmes.';
$lang['pass_changed'] = 'Le mot de passe a été modifié. Votre nouveau mot de passe est [ %1$s ].<br /> Ne l\'oubliez pas, il n\'est pas stocké de façon lisible.';
$lang['auth_req'] = 'Autorisation requise';

// Upload Rules
$lang['upload_rules_error'] = 'Vous ne pouvez pas laisser un des champs vide quand vous ajouter une règle.';
$lang['upload_rules_help'] = 'Les règles sont séparées en deux blocs.<br />Pour chaque guilde/personnage envoyé, le premier bloc est pris en compte en premier.<br />Si le couple nom@serveur correspond à l\'une des règles de rejet, celui-ci sera rejeté.<br />Ensuite le second bloc est vérifié.<br />Si le couple nom@serveur correspond à l\'une des règles d\'acceptation, celui-ci sera accepté.<br />Si aucune règle n\'est vérifiée, celui-ci est alors rejeté.';

// Config Reset
$lang['config_is_reset'] = 'La configuration a été remise à zéro. Merci de ne pas oublier de re-configurer tous vos paramètres avant de renvoyer vos données.';
$lang['config_reset_confirm'] = 'Cette action est irréversible. Êtes-vous sûr de vouloir continuer ?';
$lang['config_reset_help'] = 'Ceci va complètement remettre à zéro la configuration du roster.<br />
Toutes les données relatives à la configuration du roster vont être détruites et les valeurs par défaut vont être remises.<br />
Les données relative aux guildes, aux personnages, à la configuration des greffons, aux greffons, aux boutons des menus, et aux règles de mise à jour seront conservées.<br />
Les mots de passe de guilde, d\'officiers et d\'administrateur seront aussi conservés.<br />
<br />
Afin de continuer, saisissez votre mot de passe administrateur et cliquez sur \'Valider\'.';

/******************************
 * Roster Admin Strings
 ******************************/

$lang['pagebar_function'] = 'Fonctions';
$lang['pagebar_rosterconf'] = 'Configuration principale du Roster';
$lang['pagebar_uploadrules'] = 'Règles de mise à jour';
$lang['pagebar_changepass'] = 'Changer le mot de passe';
$lang['pagebar_addoninst'] = 'Gestion des greffons';
$lang['pagebar_update'] = 'Mise à jour';
$lang['pagebar_rosterdiag'] = 'Diagnostic du Roster';
$lang['pagebar_menuconf'] = 'Configuration des menus';
$lang['pagebar_configreset'] = 'Remise à zéro de la configuration';

$lang['pagebar_addonconf'] = 'Greffons';

$lang['roster_config_menu'] = 'Menu de configuration';

// Submit/Reset confirm questions
$lang['config_submit_button'] = 'Sauvegarder les modifications';
$lang['config_reset_button'] = 'Remise à zéro du formulaire';
$lang['confirm_config_submit'] = 'Ceci va sauver vos modifications dans la base de données. Êtes-vous sûr ?';
$lang['confirm_config_reset'] = 'Ceci va remettre le formulaire dans l\'état où il était avant vos modifications. Êtes-vous sûr ?';

// All strings here
// Each variable must be the same name as the config variable name
// Example:
//   Assign description text and tooltip for $roster->config['sqldebug']
//   $lang['admin']['sqldebug'] = "Desc|Tooltip";

// Each string is separated by a pipe ( | )
// The first part is the short description, the next part is the tooltip
// Use <br /> to make new lines!
// Example:
//   "Controls Flux-Capacitor|Turning this on may cause serious temporal distortions<br />Use with care"


// Main Menu words
$lang['admin']['main_conf'] = 'Fondamentaux|Paramètres principaux du roster<br />Ceci comprend l\'adresse du roster, l\'emplacement des images de l\'interface et d\'autres paramètres fondamentaux';
$lang['admin']['defaults_conf'] = 'Divers|Définissez divers options du roster';
$lang['admin']['index_conf'] = 'Accueil|Options pour ce qu\'affiche la page d\'accueil';
$lang['admin']['menu_conf'] = 'Menu|Contrôlez ce qu\'affiche le menu principal du roster';
$lang['admin']['display_conf'] = 'Affichage|Différents paramètres de configuration<br />css, javascript, motd, etc...';
$lang['admin']['realmstatus_conf'] = 'Etats des royaumes|Paramètres pour l\'état des royaumes<br /><br />Pour le désactiver, référez-vous à la section menu';
$lang['admin']['data_links'] = 'Liens annexes|Liens externes';
$lang['admin']['update_access'] = 'Accréditations|Définissez les accrèditations pour les différents composants du panneau de contrôle du roster';

$lang['admin']['documentation'] = 'Documentation|Documentation de WoWRoster via wiki de WoWRoster.net';

// main_conf
$lang['admin']['roster_dbver'] = "Version de la base de données Roster|La version de la base de données";
$lang['admin']['version'] = "Version du Roster|Version actuelle du Roster";
//$lang['admin']['sqldebug'] = "Affichage SQL de debug|Afficher les informations de contrôles de MySQL en format HTML";
$lang['admin']['debug_mode'] = "Debuggage|Debug complet en cas d'erreur";
$lang['admin']['sql_window'] = "Affichage SQL|Affiche les requêtes SQL dans le pied de page";
$lang['admin']['minCPver'] = "Version Minimum CP|Version minimale de CharacterProfiler autorisée";
$lang['admin']['minGPver'] = "Version Minimum GP|Version minimale de GuildProfiler autorisée";
$lang['admin']['locale'] = "Langue du Roster|Le code langue principal du Roster";
$lang['admin']['default_page'] = "Page d'accueil|Page à afficher si aucune n'est spécifiée dans l'adresse";
$lang['admin']['website_address'] = "Adresse du site Web|Utilisé pour le lien sur le logo et le lien sur le menu principal<br />Certains addon pour le roster peuvent également l'utiliser";
$lang['admin']['interface_url'] = "Répertoire des images de l'interface|Répertoire où les images de l'interface sont situés<br />La valeur par défaut est &quot;img/&quot;<br /><br />Vous pouvez utiliser un chemin relatif ou une URL absolue";
$lang['admin']['img_suffix'] = "Extension des images de l'interface|Le type des images de l'interface";
$lang['admin']['alt_img_suffix'] = "Extension alternative des images d'interface|Le type alternatif d'images pour les images de l'interface";
$lang['admin']['img_url'] = "URL du répertoire des images du roster|Répertoire où les images du roster sont situés<br />La valeur par défaut est &quot;img/&quot;<br /><br />Vous pouvez utiliser un chemin relatif ou une URL absolue";
$lang['admin']['timezone'] = "Fuseau horaire|Affiché après les dates et heures afin de savoir à quel fuseau horaire l'heure fait référence";
$lang['admin']['localtimeoffset'] = "Décalage horaire|Le décalage horaire par rapport à l'heure UTC/GMT<br />Les heures sur le roster seront affichées avec ce décalage";
$lang['admin']['use_update_triggers'] = "Permettre le déclenchement de mise à jour d'AddOn|Le déclenchement de mise à jour d'AddOn est nécessaire pour les AddOns qui ont besoin de fonctionner lors d'une mise à jour d'un profil<br />Quelques AddOns ont besoin de ce paramètre à on pour fonctionner correctement";
$lang['admin']['check_updates'] = "Vérification des mises à jour|Ceci permet au site de vérifier si une nouvelle version du roster (ou des greffons possèdant cette fonctionalité) est disponible et si vous avez la dernière version d\'installée";
$lang['admin']['seo_url'] = "Adressage alternatif|Utilise la forme /autre/page/ici.html?param=valeur en lieu et place de /?p=autre-page-ici&param=valeur";
$lang['admin']['local_cache']= "Cache des fichiers du système|Utilise le système de fichier local comme cache pour permettre un accroissement de performance.";

// defaults_conf
$lang['admin']['default_name'] = "Nom du roster|Saisissez un nom qui sera affiché quand vous ne serez pas sur une page de guilde ou de personnage";
$lang['admin']['default_desc'] = "Description|Saisissez une courte description du site qui sera affichée quand vous ne serez pas sur une page de guilde ou de personnage";
$lang['admin']['alt_type'] = "Identification des rerolls|Textes identifiant les rerolls pour le décompte dans le menu principal";
$lang['admin']['alt_location'] = "Identification des rerolls (champ)|Où faut-il rechercher l'identification des rerolls";

// menu_conf
$lang['admin']['menu_conf_left'] = "Panneau gauche|";
$lang['admin']['menu_conf_right'] = "Panneau droit|";

$lang['admin']['menu_top_pane'] = "Panneau supérieur|Contrôle les affichages du panneau supérieur du menu principal du roster<br />Cette zone contient le nom de la guilde, le nom du serveur, la date de la dernière mise à jour, etc.";
$lang['admin']['menu_top_faction'] = "Icône de faction|Contrôle l'affichage de l'icône de faction du panneau supérieur du menu principal du roster";
$lang['admin']['menu_top_locale'] = "Sélection de la langue|Contrôle l'affichage de la zone de sélection de la langue du panneau supérieur du menu principal du roster";

$lang['admin']['menu_left_type'] = "Type d'affichage|Contrôle l'affichage du résumé par niveau, par classe, ou le status du royaume ou rien du tout";
$lang['admin']['menu_left_level'] = "Niveau minimum|Niveau minimum pour apparaitre dans le résumé niveau ou classe";
$lang['admin']['menu_left_style'] = "Style d'affichage|Affiche une liste, un graphe en barre linéaire ou en barre logarythmique";
$lang['admin']['menu_left_barcolor'] = "Couleur de barre|Couleur de la barre montrant le nombre personnage de ce groupe de niveau ou de cette classe";
$lang['admin']['menu_left_bar2color'] = "Couleur de barre 2|Couleur de la barre montrant le nombre de personnages secondaires de ce groupe de niveau ou de cette classe";
$lang['admin']['menu_left_textcolor'] = "Couleur du texte|Couleur utilisée pour les étiquettes du groupe de niveau ou de classe (Les graphes de classe utilisent la couleur de classe pour ses étiquettes)";
$lang['admin']['menu_left_outlinecolor'] = "Couleur du contour du texte |La couleur de contour utilisée pour les étiquettes du groupe niveau/classe<br />Videz cette case pour désactiver cette fonction";
$lang['admin']['menu_left_text'] = "Police de caractère|Police de caractère utilisée pour les étiquettes du groupe de niveau ou de classe";

$lang['admin']['menu_right_type'] = "Type d'affichage|Contrôle l'affichage du résumé par niveau, par classe, ou le status du royaume ou rien du tout";
$lang['admin']['menu_right_level'] = "Niveau minimum|Niveau minimum pour apparaitre dans le résumé niveau ou classe";
$lang['admin']['menu_right_style'] = "Style d'affichage|Affiche une liste, un graphe en barre linéaire ou en barre logarythmique";
$lang['admin']['menu_right_barcolor'] = "Couleur de barre|Couleur de la barre montrant le nombre personnage de ce groupe de niveau ou de cette classe";
$lang['admin']['menu_right_bar2color'] = "Couleur de barre 2|Couleur de la barre montrant le nombre de personnages secondaires de ce groupe de niveau ou de cette classe";
$lang['admin']['menu_right_textcolor'] = "Couleur du texte|Couleur utilisée pour les étiquettes du groupe de niveau ou de classe (Les graphes de classe utilisent la couleur de classe pour ses étiquettes)";
$lang['admin']['menu_right_outlinecolor'] = "Couleur du contour du texte |La couleur de contour utilisée pour les étiquettes du groupe niveau/classe<br />Videz cette case pour désactiver cette fonction";
$lang['admin']['menu_right_text'] = "Police de caractère|Police de caractère utilisée pour les étiquettes du groupe de niveau ou de classe";

$lang['admin']['menu_bottom_pane'] = "Panneau inférieur|Contrôle les affichages du panneau inférieur du menu principal du roster<br />Cette zone contient la boîte de recherche";

// display_conf
$lang['admin']['theme'] = "Thème du roster|Sélectionner l'apparence du roster<br /><span style=\"color:red;\">NOTE :</span> la matrice du roster n'a pas encore été complètement achevée<br />et l'utilisation de thèmes autres que celui par défaut peut donc avoir des conséquences sur l'affichage de celui-ci.";
$lang['admin']['logo'] = "URL pour le logo de l'entête|L'URL complète de l'image<br />Ou en laissant \"img/\" devant le nom, celà cherchera dans le répertoire img/ du roster";
$lang['admin']['roster_bg'] = "URL pour l'image de fond|L'URL absolue de l'image pour le fond principal<br />Ou en laissant &quot;img/&quot; devant le nom, celà cherchera dans le répertoire img/ du roster";
$lang['admin']['motd_display_mode'] = "Mode d'affichage du message du jour|Comment le message du jour sera affiché<br /><br />&quot;Text&quot; - Montre le message de du jour en rouge<br />&quot;Image&quot; - Montre le message du jour sous forme d'une image (nécesite GD!)";
$lang['admin']['signaturebackground'] = "Image de fond pour img.php|Support de l'ancien générateur de signature";
$lang['admin']['processtime'] = "Temps de génération de la page|Affiche &quot;<i>This page was created in XXX seconds with XX queries executed</i>&quot; en bas de page du roster";

// data_links
$lang['admin']['profiler'] = "Lien de téléchargement du CharacterProfiler|URL de téléchargement de CharacterProfiler";
$lang['admin']['uploadapp'] = "Lien de téléchargement d'UniUploader|URL de téléchargement d'UniUploader";

// realmstatus_conf
$lang['admin']['rs_display'] = "Mode d'information|&quot;full&quot; Affichera l'état et le nom du serveur, la population, and le type<br />&quot;half&quot; ne montrera que l'état";
$lang['admin']['rs_mode'] = "Mode d'affichage|Comment l'état du royaume sera affiché<br /><br />&quot;DIV Container&quot; - L'état du royaume sera affiché dans une balise DIV avec du texte et des images<br />&quot;Image&quot; - Le statut du royaume sera affiché comme une image (NECESSITE GD !)";
$lang['admin']['rs_timer'] = "Rafraîchissement|Temps que met le roster avant de récupérer à nouveau les données sur l'état de royaume";
$lang['admin']['rs_left'] = "Affichage|";
$lang['admin']['rs_middle'] = "Type de royaume|";
$lang['admin']['rs_right'] = "Population du royaume|";
$lang['admin']['rs_font_server'] = "Police du nom|Police de caractère pour l'affichage du nom du royaume<br />(en mode image uniquement !)";
$lang['admin']['rs_size_server'] = "Taille de police du nom|Taille de la police de caractère pour l'affichage du nom du royaume<br />(en mode image uniquement !)";
$lang['admin']['rs_color_server'] = "Couleur du nom|Couleur du nom du royaume";
$lang['admin']['rs_color_shadow'] = "Couleur de l'ombre|Couleur pour l'effet d'ombre du texte<br />(en mode image uniquement !)";
$lang['admin']['rs_font_type'] = "Police du type|Police pour le type de royaume<br />(en mode image uniquement !)";
$lang['admin']['rs_size_type'] = "Taille de police|Taille de police pour le type de royaume<br />(en mode image uniquement !)";
$lang['admin']['rs_color_rppvp'] = "Couleur JdR-JCJ|Couleur pour un serveur de type JdR-JCJ";
$lang['admin']['rs_color_pve'] = "Couleur Normal|Couleur pour un serveur de type Normal";
$lang['admin']['rs_color_pvp'] = "Couleur JCJ|Couleur pour un serveur de type JCJ";
$lang['admin']['rs_color_rp'] = "Couleur JdR|Couleur pour un serveur de type JdR";
$lang['admin']['rs_color_unknown'] = "Couleur inconnu|Couleur pour un serveur de type inconnu";
$lang['admin']['rs_font_pop'] = "Police de population|Police de caractère pour le niveau de peuplement du serveur<br />(en mode image uniquement !)";
$lang['admin']['rs_size_pop'] = "Taille de police|Taille de la police de caractère pour le niveau de peuplement du serveur<br />(en mode image uniquement !)";
$lang['admin']['rs_color_low'] = "Couleur Faible|Couleur pour un niveau de peuplement faible";
$lang['admin']['rs_color_medium'] = "Couleur Moyen|Couleur pour un niveau de peuplement moyen";
$lang['admin']['rs_color_high'] = "Couleur Haute|Couleur pour un niveau de peuplement élevé";
$lang['admin']['rs_color_max'] = "Couleur Max|Couleur pour un niveau de peuplement maximum";
$lang['admin']['rs_color_error'] = "Couleur hors-ligne|Couleur dans le cas d'un royaume hors-ligne";

// update_access
$lang['admin']['authenticated_user'] = "Accès à Update.php|Contrôle l'accès à update.php<br /><br />Passer ce paramètre à off désactive l'accès à TOUT LE MONDE";
$lang['admin']['gp_user_level'] = "Niveau d'accès aux données de guilde|Niveau requis pour mettre à jour les données fournies par GuildProfiler";
$lang['admin']['cp_user_level'] = "Niveau d'accès aux données des personnages|Niveau requis pour mettre à jour les données fournies par CharacterProfiler";
$lang['admin']['lua_user_level'] = "Niveau d'accès aux données des autres LUA|Niveau requis pour mettre à jour les données fournies par d'autres sources de données (LUA).<br />Ceci est valable pour TOUTES SOURCES AUTRES pouvant être envoyées au roster.";

// Character Display Settings
$lang['admin']['per_character_display'] = 'Affichage par personnage';

//Overlib for Allow/Disallow rules
$lang['guildname'] = 'Nom de la guilde';
$lang['realmname']  = 'Nom du royaume';
$lang['regionname'] = 'Région (i.e. US)';
$lang['charname'] = 'Nom du personnage';
