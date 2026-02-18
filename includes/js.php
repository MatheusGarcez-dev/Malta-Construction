<?php
$jsDir = __DIR__ . '/../assets/js/';
$jsFiles = [];

if (is_dir($jsDir)) {
    $files = scandir($jsDir);
    foreach ($files as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'js') {
            $jsFiles[] = 'assets/js/' . $file;
        }
    }
    sort($jsFiles);
}

foreach ($jsFiles as $jsFile) {
    echo '<script src="' . htmlspecialchars($jsFile) . '"></script>' . "\n";
}
?>

