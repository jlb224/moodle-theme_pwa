<?php
// This file is part of Ranking block for Moodle - http://moodle.org/
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
 * Theme pwa block settings file
 *
 * @package   theme_pwa
 * @copyright 2020 Jo Beaver
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $CFG;

require_once($CFG->dirroot . '/theme/pwa/pwa_admin_settings_styleguide.php');

if ($ADMIN->fulltree) {

    // Replace default $settings variable with Boost version that has tabs.
    $settings = new theme_boost_admin_settingspage_tabs('themesettingpwa', get_string('configtitle', 'theme_pwa'));

    // General tab.
    $page = new admin_settingpage('theme_pwa_general', get_string('generalsettings', 'theme_pwa'));

    $name = 'theme_pwa/textsetting';
    $title = get_string('textsetting','theme_pwa');
    $description = get_string('textsetting_desc', 'theme_pwa');
    $setting = new admin_setting_configtext($name, $title, $description, 'textsetting', PARAM_NOTAGS, 50);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);

    // Frontpage tab.
    $page = new admin_settingpage('theme_pwa_frontpage', get_string('frontpage', 'theme_pwa'));

    $settings->add($page);

    // Styleguide tab.
    $page = new admin_settingpage('theme_pwa_styleguide', get_string('styleguide', 'theme_pwa'));
    $setting = new pwa_admin_settings_styleguide('theme_pwa_styleguide',
    get_string('styleguide', 'theme_pwa'));
    $page->add($setting);

    $settings->add($page);

}

