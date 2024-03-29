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
 * Callback functions for tool_simpletool.
 *
 * @package tool_simpletool
 * @copyright 2018 Richard Jones <richardnz@outlook.com>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @see https://moodledev.moodle.school/mod/page/view.php?id=50
 */

function tool_simpletool_extend_navigation_course($navigation, $course, $context) {
    $navigation->add(
        get_string('pluginname', 'tool_simpletool'),
        new moodle_url('/admin/tool/simpletool/index.php',
        ['id' => $course->id]),
        navigation_node::TYPE_SETTING,
        get_string('pluginname', 'tool_simpletool'),
        'simpletool',
        new pix_icon('icon', '', 'tool_simpletool')
    );
}
