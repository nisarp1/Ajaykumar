<?php
define('WP_USE_THEMES', false);
require('./wp-load.php');
echo 'Template Directory URI: ' . get_template_directory_uri() . "\n";
echo 'Theme Folder: ' . get_template_directory() . "\n";
echo 'hand.png path Check: ' . (file_exists(get_template_directory() . '/assets/images/new/hand.png') ? 'EXISTS' : 'MISSING') . "\n";
