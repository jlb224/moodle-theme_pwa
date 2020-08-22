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


// function theme_pwa_get_main_scss_content($theme) {
//     global $CFG;

//     $scss = '';
//     $filename = !empty($theme->settings->preset) ? $theme->settings->preset : null;
//     $fs = get_file_storage();

//     $context = context_system::instance();
//     if ($filename == 'default.scss') {
//         // We still load the default preset files directly from the boost theme. No sense in duplicating them.
//         $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');
//     } else if ($filename == 'plain.scss') {
//         // We still load the default preset files directly from the boost theme. No sense in duplicating them.
//         $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/plain.scss');
//     } else if ($filename && ($presetfile = $fs->get_file($context->id, 'theme_pwa', 'preset', 0, '/', $filename))) {
//         // This preset file was fetched from the file area for theme_pwa and not theme_boost (see the line above).
//         $scss .= $presetfile->get_content();
//     } else {
//         // Safety fallback - maybe new installs etc.
//         $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');
//     }

//     // pwa scss.
//     $pwavariables = file_get_contents("$CFG->dirroot/theme/pwa/scss/defaultvariables.scss");
//     $pwa = file_get_contents("$CFG->dirroot/theme/pwa/scss/styles.scss");

//     // Combine them together.
//     return $pwavariables . "\n" . $scss . "\n" . $pwa;
// }