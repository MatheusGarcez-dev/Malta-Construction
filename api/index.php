<?php
$pages = [
    'home' => 'home.php',
    'about' => 'about.php',
    'contact' => 'contact.php',
    'residential' => 'residential.php',
    'commercial' => 'commercial.php',
    'renovation' => 'renovation.php',
    'finish-carpentry' => 'finish-carpentry.php',
    'custom-closets' => 'custom-closets.php',
    'stair-renovation' => 'stair-renovation.php',
    'trim-work' => 'trim-work.php',
    'cabinet-installation' => 'cabinet-installation.php',
    'flooring' => 'flooring.php',
    'carpentry' => 'carpentry.php',
];

$page = $_GET['page'] ?? 'home';

if (!isset($pages[$page])) {
    http_response_code(404);
    echo 'Not found';
    return;
}

include __DIR__ . '/includes/pages/' . $pages[$page];
