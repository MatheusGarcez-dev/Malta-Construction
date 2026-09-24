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
    $version = filemtime(__DIR__ . '/../' . $jsFile);
    echo '<script src="' . htmlspecialchars($jsFile) . '?v=' . $version . '"></script>' . "\n";
}
?>

