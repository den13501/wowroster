<?php
/**
 * WoWRoster.net WoWRoster
 *
 * Roster plugin admin
 *
 *
 * @copyright  2002-2011 WoWRoster.net
 * @license    http://www.gnu.org/licenses/gpl.html   Licensed under the GNU General Public License v3.
 * @version    SVN: $Id$
 * @link       http://www.wowroster.net
 * @since      File available since Release 2.2.0
 * @package    WoWRoster
 * @subpackage RosterCP
 */

if( !defined('IN_ROSTER') || !defined('IN_ROSTER_ADMIN') )
{
	exit('Detected invalid access to this file!');
}

include(ROSTER_ADMIN . 'roster_config_functions.php');

include(ROSTER_LIB . 'install.lib.php');
$installer = new Install;


$op = ( isset($_POST['op']) ? $_POST['op'] : '' );

$id = ( isset($_POST['id']) ? $_POST['id'] : '' );

switch( $op )
{
	case 'deactivate':
		processActive($id,0);
		break;

	case 'activate':
		processActive($id,1);
		break;

	case 'process':
		$processed = processPlugin();
		break;

	default:
		break;
}
$roster->get_plugin_data();
/*
	function getPluginlist()
	{
		global $roster, $addon;
		$addons = $roster->plugin_data;
		$plugins = array();
		if( !empty($addons) )
		{
			foreach( $addons as $addon_name => $addonx )
			{
				$dirx = ROSTER_ADDONS . $addonx['basename'] . DIR_SEP . 'inc' . DIR_SEP . 'plugins' . DIR_SEP;
				if (is_dir($dirx))
				{
					$dir = opendir ($dirx);
					while (($file = readdir($dir)) !== false)
					{
						if (strpos($file, '.php',1))
						{
							$info = pathinfo($file);
							$file_name =  basename($file,'.'.$info['extension']);
							list($reqaddon, $scope, $name) = explode('-',$file_name);
							// duh this code used in addons onlu duh...
							//if ($scope == $roster->scope && $reqaddon == $addon['basename'])
							//
							require($dirx . $file);
							$addonstuff = new $name.'Install';
							if (isset($addonstuff->name))
							{
								$plugin = $addonstuff->name;
								if( array_key_exists($plugin,$roster->plugin_data) )
								{
									$plugins[$plugin]['id'] = $roster->plugin_data[$plugin]['addon_id'];
									$plugins[$plugin]['active'] = $roster->plugin_data[$plugin]['active'];
									$plugins[$plugin]['access'] = $roster->plugin_data[$plugin]['access'];
									$plugins[$plugin]['oldversion'] = $roster->plugin_data[$plugin]['version'];

									// -1 = overwrote newer version
									//  0 = same version
									//  1 = upgrade available
									$plugins[$plugin]['install'] = version_compare($addonstuff->version,$roster->plugin_data[$plugin]['version']);

								}
								else
								{
									$plugins[$plugin]['install'] = 3;
								}
								$plugins[$plugin]['filename'] = $addonstuff->filename;
								$plugins[$plugin]['basename'] = $plugin;
								$plugins[$plugin]['fullname'] = ( isset($roster->locale->act[$addonstuff->fullname]) ? $roster->locale->act[$addonstuff->fullname] : $addonstuff->fullname );
								$plugins[$plugin]['author'] = $addonstuff->credits[0]['name'];
								$plugins[$plugin]['version'] = $addonstuff->version;
								$plugins[$plugin]['parent'] = $addonstuff->parent;
								$plugins[$plugin]['icon'] = $addonstuff->icon;
								$plugins[$plugin]['description'] = ( isset($roster->locale->act[$addonstuff->description]) ? $roster->locale->act[$addonstuff->description] : $addonstuff->description );

							}
							unset($addonstuff);
						}
					}
				}
			}
		}
		return $plugins;
	}
*/	
function getPluginlist()
{
	global $roster, $installer;

	// Initialize output
	$addons = '';
	$output = '';

	if( $handle = @opendir(ROSTER_PLUGINS) )
	{
		while( false !== ($file = readdir($handle)) )
		{
			if( $file != '.' && $file != '..' && $file != '.svn' )
			{
				$addons[] = $file;
			}
		}
	}

	usort($addons, 'strnatcasecmp');

	if( is_array($addons) )
	{
		foreach( $addons as $addon )
		{
			$installfile = ROSTER_PLUGINS . $addon . DIR_SEP . 'install.def.php';
			$install_class = $addon . 'Install';

			if( file_exists($installfile) )
			{
				include_once($installfile);

				if( !class_exists($install_class) )
				{
					$installer->seterrors(sprintf($roster->locale->act['installer_no_class'],$addon));
					continue;
				}

				$addonstuff = new $install_class;

				if( array_key_exists($addon,$roster->plugin_data) )
				{
					$output[$addon]['id'] = $roster->plugin_data[$addon]['addon_id'];
					$output[$addon]['active'] = $roster->plugin_data[$addon]['active'];
					$output[$addon]['access'] = $roster->plugin_data[$addon]['access'];
					$output[$addon]['oldversion'] = $roster->plugin_data[$addon]['version'];

					// -1 = overwrote newer version
					//  0 = same version
					//  1 = upgrade available
					$output[$addon]['install'] = version_compare($addonstuff->version,$roster->plugin_data[$addon]['version']);

				}
				else
				{
					$output[$addon]['install'] = 3;
				}

				// Save current locale array
				// Since we add all locales for localization, we save the current locale array
				// This is in case one addon has the same locale strings as another, and keeps them from overwritting one another
				
				$output[$addon]['filename'] = $addonstuff->filename;
				$output[$addon]['basename'] = $addon;
				$output[$addon]['parent'] = $addonstuff->parent;
				$output[$addon]['scope'] = $addonstuff->scope;
				$output[$addon]['fullname'] = ( isset($roster->locale->act[$addonstuff->fullname]) ? $roster->locale->act[$addonstuff->fullname] : $addonstuff->fullname );
				$output[$addon]['author'] = $addonstuff->credits[0]['name'];
				$output[$addon]['version'] = $addonstuff->version;
				$output[$addon]['icon'] = $addonstuff->icon;
				$output[$addon]['description'] = ( isset($roster->locale->act[$addonstuff->description]) ? $roster->locale->act[$addonstuff->description] : $addonstuff->description );

				unset($addonstuff);
			}
		}
	}
	return $output;
}

	function processActive( $id , $mode )
	{
		global $roster, $installer;

		$query = "SELECT `basename` FROM `" . $roster->db->table('plugin') . "` WHERE `addon_id` = " . $id . ";";
		$basename = $roster->db->query_first($query);

		$query = "UPDATE `" . $roster->db->table('plugin') . "` SET `active` = '$mode' WHERE `addon_id` = '$id' LIMIT 1;";
		$result = $roster->db->query($query);
		if( !$result )
		{
			$installer->seterrors('Database Error: ' . $roster->db->error() . '<br />SQL: ' . $query);
		}
		else
		{
			$installer->setmessages(sprintf($roster->locale->act['installer_activate_' . $mode] ,$basename));
		}
	}

	function processPlugin()
	{
		global $roster, $installer;

		$addon_name = $_POST['addon'];
		$addon_parent = $_POST['addonparent'];
		$addon_file = $_POST['addonfile'];

		if( preg_match('/[^a-zA-Z0-9_]/', $addon_name) )
		{
			$installer->seterrors($roster->locale->act['invalid_char_module'],$roster->locale->act['installer_error']);
			return;
		}

		// Check for temp tables
		//$old_error_die = $roster->db->error_die(false);
		if( false === $roster->db->query("CREATE TEMPORARY TABLE `test` (id int);") )
		{
			$installer->temp_tables = false;
			$roster->db->query("UPDATE `" . $roster->db->table('config') . "` SET `config_value` = '0' WHERE `id` = 1180;");
		}
		else
		{
			$installer->temp_tables = true;
		}
		//$roster->db->error_die($old_error_die);

		// Include addon install definitions
		$addonDir = ROSTER_PLUGINS . $addon_name . DIR_SEP;
		$addon_install_file = $addonDir . 'install.def.php';
		echo $addon_install_file.'<br>';
		$install_class = $addon_name.'Install';

		if( !file_exists($addon_install_file) )
		{
			$installer->seterrors(sprintf($roster->locale->act['installer_no_installdef'],$addon_name),$roster->locale->act['installer_error']);
			return;
		}

		require($addon_install_file);

		$addon = new $install_class();
		$addata = escape_array((array)$addon);
		$addata['basename'] = $addon_name;

		if( $addata['basename'] == '' )
		{
			$installer->seterrors($roster->locale->act['installer_no_empty'],$roster->locale->act['installer_error']);
			return;
		}

		// Get existing addon record if available
		$query = 'SELECT * FROM `' . $roster->db->table('plugin') . '` WHERE `basename` = "' . $addata['basename'] . '";';
		$result = $roster->db->query($query);
		if( !$result )
		{
			$installer->seterrors(sprintf($roster->locale->act['installer_fetch_failed'],$addata['basename']) . '.<br />MySQL said: ' . $roster->db->error(),$roster->locale->act['installer_error']);
			return;
		}
		$previous = $roster->db->fetch($result);
		$roster->db->free_result($result);

		// Give the installer the addon data
		$installer->addata = $addata;

		$success = false;

		// Collect data for this install type
		switch( $_POST['type'] )
		{
			case 'install':
				if( $previous )
				{
					$installer->seterrors(sprintf($roster->locale->act['installer_addon_exist'],$installer->addata['basename'],$previous['fullname']));
					break;
				}
				$query = 'INSERT INTO `' . $roster->db->table('plugin') . '` VALUES 
				(NULL,"' . $installer->addata['basename'] . '",
				"' . $installer->addata['parent'] . '",
				"' . $installer->addata['scope'] . '",
				"' . $installer->addata['version'] . '",
				"' . (int)$installer->addata['active'] . '",
				0,
				"' . $installer->addata['fullname'] . '",
				"' . $installer->addata['description'] . '",
				"' . $roster->db->escape(serialize($installer->addata['credits'])) . '",
				"' . $installer->addata['icon'] . '",
				"' . $installer->addata['wrnet_id'] . '",NULL);';
				$result = $roster->db->query($query);
				if( !$result )
				{
					$installer->seterrors('DB error while creating new addon record. <br /> MySQL said:' . $roster->db->error(),$roster->locale->act['installer_error']);
					break;
				}
				$installer->addata['addon_id'] = $roster->db->insert_id();

				// We backup the addon config table to prevent damage
				$installer->add_backup($roster->db->table('addon_config'));

				$success = $addon->install();

				// Delete the addon record if there is an error
				if( !$success )
				{
					$query = 'DELETE FROM `' . $roster->db->table('plugin') . "` WHERE `addon_id` = '" . $installer->addata['addon_id'] . "';";
					$result = $roster->db->query($query);
				}
				else
				{
					$installer->sql[] = 'UPDATE `' . $roster->db->table('plugin') . '` SET `active` = ' . (int)$installer->addata['active'] . " WHERE `addon_id` = '" . $installer->addata['addon_id'] . "';";
				}
				break;

			case 'upgrade':
				if( !$previous )
				{
					$installer->seterrors(sprintf($roster->locale->act['installer_no_upgrade'],$installer->addata['basename']));
					break;
				}
				/* Carry Over from AP branch
				if( !in_array($previous['basename'],$addon->upgrades) )
				{
					$installer->seterrors(sprintf($roster->locale->act['installer_not_upgradable'],$addon->fullname,$previous['fullname'],$previous['basename']));
					break;
				}
				*/

				$query = "UPDATE `" . $roster->db->table('plugin') . "` SET `basename`='" . $installer->addata['basename'] . "', `version`='" . $installer->addata['version'] . "', `active`=" . (int)$installer->addata['active'] . ", `fullname`='" . $installer->addata['fullname'] . "', `description`='" . $installer->addata['description'] . "', `credits`='" . serialize($installer->addata['credits']) . "', `icon`='" . $installer->addata['icon'] . "', `wrnet_id`='" . $installer->addata['wrnet_id'] . "' WHERE `addon_id`=" . $previous['addon_id'] . ';';
				$result = $roster->db->query($query);
				if( !$result )
				{
					$installer->seterrors('DB error while updating the addon record. <br /> MySQL said:' . $roster->db->error(),$roster->locale->act['installer_error']);
					break;
				}
				$installer->addata['addon_id'] = $previous['addon_id'];

				// We backup the addon config table to prevent damage
				$installer->add_backup($roster->db->table('addon_config'));

				$success = $addon->upgrade($previous['version']);
				break;

			case 'uninstall':
				if( !$previous )
				{
					$installer->seterrors(sprintf($roster->locale->act['installer_no_uninstall'],$installer->addata['basename']));
					break;
				}
				if( $previous['basename'] != $installer->addata['basename'] )
				{
					$installer->seterrors(sprintf($roster->locale->act['installer_not_uninstallable'],$installer->addata['basename'],$previous['fullname']));
					break;
				}
				$query = 'DELETE FROM `' . $roster->db->table('plugin') . '` WHERE `addon_id`=' . $previous['addon_id'] . ';';
				$result = $roster->db->query($query);
				if( !$result )
				{
					$installer->seterrors('DB error while deleting the addon record. <br /> MySQL said:' . $roster->db->error(),$roster->locale->act['installer_error']);
					break;
				}
				$installer->addata['addon_id'] = $previous['addon_id'];

				// We backup the addon config table to prevent damage
				$installer->add_backup($roster->db->table('addon_config'));

				$success = $addon->uninstall();
				break;

			case 'purge':
				$success = purge($installer->addata['basename']);
				break;

			default:
				$installer->seterrors($roster->locale->act['installer_invalid_type']);
				$success = false;
				break;
		}

		if( !$success )
		{
			$installer->seterrors($roster->locale->act['installer_no_success_sql']);
			return false;
		}
		else
		{
			$success = $installer->install();
			$installer->setmessages(sprintf($roster->locale->act['installer_' . $_POST['type'] . '_' . $success],$installer->addata['basename']));
		}
		unset($addon);
		// Restore our locale array
		$roster->locale->wordings = $localetemp;
		unset($localetemp);

		return true;
	}

$plugins = getPluginList();
if( !empty($plugins) )
{
	$roster->tpl->assign_vars(array(
		'S_ADDON_LIST' => true,

		'L_TIP_STATUS_ACTIVE' => makeOverlib($roster->locale->act['installer_turn_off'],$roster->locale->act['installer_activated']),
		'L_TIP_STATUS_INACTIVE' => makeOverlib($roster->locale->act['installer_turn_on'],$roster->locale->act['installer_deactivated']),
		'L_TIP_INSTALL_OLD' => makeOverlib($roster->locale->act['installer_replace_files'],$roster->locale->act['installer_overwrite']),
		'L_TIP_INSTALL' => makeOverlib($roster->locale->act['installer_click_uninstall'],$roster->locale->act['installer_installed']),
		'L_TIP_UNINSTALL' => makeOverlib($roster->locale->act['installer_click_install'],$roster->locale->act['installer_not_installed']),
		)
	);

	foreach( $plugins as $addon )
	{
		if( !empty($addon['icon']) )
		{
			if( strpos($addon['icon'],'.') !== false )
			{
				$addon['icon'] = ROSTER_PATH . 'addons/' . $addon['basename'] . '/images/' . $addon['icon'];
			}
			else
			{
				$addon['icon'] = $roster->config['interface_url'] . 'Interface/Icons/' . $addon['icon'] . '.' . $roster->config['img_suffix'];
			}
		}
		else
		{
			$addon['icon'] = $roster->config['interface_url'] . 'Interface/Icons/inv_misc_questionmark.' . $roster->config['img_suffix'];
		}

		$roster->tpl->assign_block_vars('addon_list', array(
			'ROW_CLASS'   => $roster->switch_row_class(),
			'ID'          => ( isset($addon['id']) ? $addon['id'] : '' ),
			'ICON'        => $addon['icon'],
			'FULLNAME'    => $addon['fullname'],
			'BASENAME'    => $addon['basename'],
			'FILENAME'    => $addon['filename'],
			'PARENT'	  => $addon['parent'],
			'VERSION'     => $addon['version'],
			'OLD_VERSION' => ( isset($addon['oldversion']) ? $addon['oldversion'] : '' ),
			'DESCRIPTION' => $addon['description'],
			'AUTHOR'      => $addon['author'],
			'ACTIVE'      => ( isset($addon['active']) ? $addon['active'] : '' ),
			'INSTALL'     => $addon['install'],
			'L_TIP_UPGRADE' => ( isset($addon['active']) ? makeOverlib(sprintf($roster->locale->act['installer_click_upgrade'],$addon['oldversion'],$addon['version']),$roster->locale->act['installer_upgrade_avail']) : '' ),
			'ACCESS'      => ''
			)
		);
	}
}
else
{
	$installer->setmessages('No addons available!');
}

$errorstringout = $installer->geterrors();
$messagestringout = $installer->getmessages();
$sqlstringout = $installer->getsql();

// print the error messages
if( !empty($errorstringout) )
{
	$roster->set_message($errorstringout, $roster->locale->act['installer_error'], 'error');
}

// Print the update messages
if( !empty($messagestringout) )
{
	$roster->set_message($messagestringout, $roster->locale->act['installer_log']);
}

$roster->tpl->set_filenames(array('body' => 'admin/plugin_install.html'));
$body = $roster->tpl->fetch('body');
