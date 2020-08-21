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
 * PWA theme callbacks.
 *
 * @package    theme_pwa
 * @copyright  2020 Jo Beaver
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Load the main SCSS.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_pwa_get_main_scss_content($theme) {
    global $CFG;

    $scss = '';
    $scss .= file_get_contents("$CFG->dirroot/theme/pwa/scss/defaultvariables.scss");
    $scss .= file_get_contents("$CFG->dirroot/theme/pwa/scss/styles.scss");

    return $scss;
}