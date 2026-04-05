<?php
require_once('./wp-load.php');

$pages = [
    ['post_title' => 'About Us', 'post_name' => 'about-us', 'template' => 'page-about-us.php'],
    ['post_title' => 'Political Journey', 'post_name' => 'political-journey', 'template' => 'page-political-journey.php'],
    ['post_title' => 'Bagalkot', 'post_name' => 'bagalkot', 'template' => 'page-bagalkot.php'],
    ['post_title' => 'Join the Movement', 'post_name' => 'join-movement', 'template' => 'page-join-movement.php'],
    ['post_title' => 'Volunteer', 'post_name' => 'volunteer', 'template' => 'page-volunteer.php'],
    ['post_title' => 'Voice of the People', 'post_name' => 'voice-of-the-people', 'template' => 'page-voice-of-the-people.php'],
    ['post_title' => 'Associations', 'post_name' => 'associations', 'template' => 'page-associations.php'],
    ['post_title' => 'Campaigns', 'post_name' => 'campaigns', 'template' => 'page-campaigns.php'],
    ['post_title' => 'Contact Us', 'post_name' => 'contact', 'template' => 'page-contact.php'],
];

foreach ($pages as $p) {
    $existing = get_page_by_path($p['post_name']);
    if (!$existing) {
        $post_id = wp_insert_post([
            'post_title'    => $p['post_title'],
            'post_name'     => $p['post_name'],
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_content'  => '',
        ]);
        if ($post_id) {
            update_post_meta($post_id, '_wp_page_template', $p['template']);
            echo "Created page: {$p['post_title']} (ID: $post_id)\n";
        }
    } else {
        echo "Updating template for: {$p['post_title']}\n";
        update_post_meta($existing->ID, '_wp_page_template', $p['template']);
    }
}
echo "All internal page structural mappings are complete.\n";
