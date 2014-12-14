<?php
/*	Project:	EQdkp-Plus
 *	Package:	Final Fantasy IV game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array = array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Blackmage',
		2	=> 'Warrior',
		3	=> 'Dragoon',
		4	=> 'Monk',
		5	=> 'Paladin',
		6	=> 'Bard',
		7	=> 'Whitemage',
		8 	=> 'Summoner',
		9	=> 'Scholar',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Elezen',
		2	=> 'Roegadyn',
		3	=> 'Hyuran',
		4	=> 'Miqote',
		5	=> 'Lalafell',
	),
	'factions' => array(
		'gridania'	=> 'Gridania',
		'limsa'		=> 'Limsa Lominsa',
		'uldah'		=> 'Uldah',
	),
	'lang' => array(
		'ffxiv'							=> 'Final Fantasy XIV',
		'tank'							=> 'Tank',
		'support'						=> 'Healer',
		'damage_dealer'					=> 'Damage Dealer',

		// Profile information
		'uc_gender'						=> 'Gender',
		'uc_male'						=> 'Male',
		'uc_female'						=> 'Female',
		'uc_guild'						=> 'Guild',
		'uc_race'						=> 'Race',
		'uc_class'						=> 'Class',

		// Admin Settings
		'core_sett_fs_gamesettings'	=> 'Final Fantasy XI Settings',
		'uc_faction'				=> 'Faction',
		'uc_faction_help'			=> 'Select the default faction',
	),
);
?>
