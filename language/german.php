<?php
/* Project: EQdkp-Plus
 * Package: Final Fantasy IV game package
 * Link: http://eqdkp-plus.eu
 *
 * Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

include_once(registry::get_const('root_path').'games/ffxiv/constants.php');

$german_array = array(
    'classes' => array(
        UNKNOWN => 'Unbekannt',
        BLACK_MAGE => 'Schwarzmagier',
        WARRIOR => 'Krieger',
        DRAGOON => 'Dragoon',
        MONK => 'Mönch',
        PALADIN => 'Paladin',
        BARD => 'Barde',
        WHITE_MAGE => 'Weißmagier',
        SUMMONER => 'Beschwörer',
        SCHOLAR => 'Gelehrter',
        NINJA => 'Ninja',
        DARK_KNIGHT => 'Dunkelritter',
        ASTROLOGIAN => 'Astrologe',
        MACHINIST => 'Maschinist',
        SAMURAI => 'Samurai',
        RED_MAGE => 'Rotmagier',
        GUNBREAKER => 'Revolverklinge',
        DANCER => 'Tänzer',
        BLUE_MAGE => 'Blaumagier',
    ),
    'races' => array(
        UNKNOWN => 'Unbekannt',
        ELEZEN => 'Elezen',
        ROEGADYN => 'Roegadyn',
        HYUR => 'Hyuran',
        MIQOTE => 'Miqo\'te',
        LALAFELL => 'Lalafell',
        AURA => 'Au Ra',
        VIERA => 'Viera',
        HROTHGAR => 'Hrothgar',
    ),
    'factions' => array(
        'twin_adder' => 'Bruderschaft der Morgenviper',
        'maelstrom' => 'Mahlstrom',
        'flames' => 'Legion der Unsterblichen',
    ),
    'lang' => array(
        'ffxiv' => 'Final Fantasy XIV',
        'tank' => 'Tank',
        'support' => 'Heiler',
        'damage_dealer' => 'Damage Dealer',

        // Profile information
        'uc_gender' => 'Geschlecht',
        'uc_male' => 'Männlich',
        'uc_female' => 'Weiblich',
        'uc_guild' => 'Freie Gesellschaft',
        'uc_race' => 'Rasse',
        'uc_class' => 'Klasse',
        'uc_cat_berufe' => 'Berufe',
        'uc_level' => 'Level',

        // Grand Company Information
        'uc_grandcompany' => 'Staatliche Gesellschaft',
        'uc_twinadder' => 'Bruderschaft der Morgenviper',
        'uc_maelstrom' => 'Mahlstrom',
        'uc_flames' => 'Legion der Unsterblichen',

        // City-State Information
        'uc_city' => 'Stadtstaat',
        'uc_uldah' => "Ul'dah",
        'uc_limsa' => 'Limsa Lominsa',
        'uc_gridania' => 'Gridania',

        // Profession information
        'up_alchemist' => 'Alchemist',
        'up_leatherworker' => 'Gerber',
        'up_goldsmith' => 'Goldschmied',
        'up_culinarian' => 'Gourmet',
        'up_blacksmith' => 'Grobschmied',
        'up_armorer' => 'Plattner',
        'up_weaver' => 'Weber',
        'up_carpenter' => 'Zimmerer',
        'up_fisher' => 'Fischer',
        'up_botanist' => 'Gärtner',
        'up_miner' => 'Minenarbeiter',

        // Admin Settings
        'core_sett_fs_gamesettings' => 'Final Fantasy XIV Einstellungen',
        'uc_faction' => 'Staatliche Gesellschaft',
        'uc_faction_help' => 'Wähle die Staatliche Gesellschaft der Freien Gesellschaft.',
    ),
);
