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
$german_array = array(
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Schwarzmagier',
		2	=> 'Krieger',
		3	=> 'Dragoon',
		4	=> 'Mönch',
		5	=> 'Paladin',
		6	=> 'Barde',
		7	=> 'Weißmagier',
		8	=> 'Beschwörer',
		9	=> 'Gelehrter',
		10	=> 'Ninja',
		//11	=> 'Dunkler Ritter',
		//12	=> 'Astrologe',
		//13	=> 'Maschinist',
	),
	'races' => array(
		0	=> 'Unbekannt',
		1	=> 'Elezen',
		2	=> 'Roegadyn',
		3	=> 'Hyuran',
		4	=> 'Miqote',
		5	=> 'Lalafell',
		//6	=> 'Au Ra',
	),
	'factions' => array(
		'gridania'	=> 'Gridania',
		'limsa'		=> 'Limsa Lominsa',
		'uldah'		=> 'Uldah',
	),
	'lang' => array(
		'ffxiv'							=> 'Final Fantasy XIV',
		'tank'							=> 'Tank',
		'support'						=> 'Heiler',
		'damage_dealer'					=> 'Damage Dealer',

		// Profile information
		'uc_gender'						=> 'Geschlecht',
		'uc_male'						=> 'Männlich',
		'uc_female'						=> 'Weiblich',
		'uc_guild'						=> 'Gilde',
		'uc_race'						=> 'Rasse',
		'uc_class'						=> 'Klasse',

		// Admin Settings
		'core_sett_fs_gamesettings'		=> 'Final Fantasy XIV Einstellungen',
		'uc_faction'					=> 'Fraktion',
		'uc_faction_help'				=> 'Wähle die Standard-Fraktion',
	),
);
?>