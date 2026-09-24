<?php
$version = filemtime(__DIR__ . '/../../assets/js/main.js');
echo '<script src="/assets/js/main.js?v=' . $version . '"></script>' . "\n";
