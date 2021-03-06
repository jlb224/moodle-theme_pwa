<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * PWA config.
 *
 * @package   theme_pwa
 * @copyright 2020 Jo Beaver
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/lib.php');

$THEME->name = 'pwa';
$THEME->sheets = []; // Stylesheets for the theme.
$THEME->editor_sheets = []; // Stylesheets for TinyMCE. Not required by ATTO.
$THEME->scss = function($theme) {
    return theme_pwa_get_main_scss_content($theme);
}; // Call main theme scss.
$THEME->parents = ['boost']; // Parent theme.
$THEME->enable_dock = false; // Docking is not currently supported in Boost family themes.
$THEME->yuicssmodules = array();
$THEME->rendererfactory = 'theme_overridden_renderer_factory'; // Override renderers from core.
$THEME->requiredblocks = '';
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
$THEME->iconsystem = \core\output\icon_system::FONTAWESOME;
$THEME->hidefromselector = false;

$THEME->layouts = [

    // My dashboard page.
    'mydashboard' => array(
        'file' => 'mydashboard.php',
        'regions' => array('side-pre', 'side-admin'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar' => true, 'langmenu' => true),
    )
];