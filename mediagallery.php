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
 * Mediagallery selector popup.
 *
 * @package   tinymce_mediagallery
 * @copyright 2014 NetSpot Pty Ltd
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../../../../config.php');
require_once($CFG->dirroot.'/mod/mediagallery/locallib.php');

use \mod_mediagallery\collection;

require_login();
require_sesskey();

$PAGE->set_context(context_system::instance());
$PAGE->set_url('/lib/editor/tinymce/plugins/mediagallery/mediagallery.php');

$contextid = required_param('contextid', PARAM_INT);

$editor = get_texteditor('tinymce');
$plugin = $editor->get_plugin('mediagallery');

// Prevent https security problems.
$relroot = preg_replace('|^http.?://[^/]+|', '', $CFG->wwwroot);

$htmllang = get_html_lang();
header('Content-Type: text/html; charset=utf-8');
header('X-UA-Compatible: IE=edge');
?>
<!DOCTYPE html>
<html <?php echo $htmllang ?>>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php print_string('title', 'tinymce_mediagallery')?></title>
<script type="text/javascript" src="<?php echo $editor->get_tinymce_base_url(); ?>tiny_mce_popup.js"></script>
<script type="text/javascript" src="<?php echo $plugin->get_tinymce_file_url('js/mediagallery.js'); ?>"></script>
</head>
<body>
<form name="form" action="#">
<?php
echo html_writer::tag('p', get_string('select_desc', 'tinymce_mediagallery'));

$options = collection::get_my_galleries_by_contextid($contextid);
echo html_writer::tag('label', get_string('gallery', 'mediagallery'), array('for' => 'gallery_select')).':&nbsp;';
echo html_writer::select($options, 'gallery', '', array(), array('id' => 'gallery_select', 'style' => 'max-width: 270px;'));
$strins = get_string('common:insert', 'editor_tinymce');
$strcan = get_string('cancel');
?>
    <div class="mceActionPanel">
    <input type="submit" id="insert" name="insert" value="<?php echo $strins; ?>" onclick="return MediagalleryDialog.insert();" />
    <input type="button" id="cancel" name="cancel" value="<?php echo $strcan; ?>" onclick="return tinyMCEPopup.close();" />
    </div>
</form>
</body>
</html>
