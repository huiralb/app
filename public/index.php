<?php
// Sets the default timezone used by all date/time. Adjust to your location
date_default_timezone_set('Asia/Jakarta');

// Sets folder maps where the source code located
$dir = dirname(__DIR__);

// Application folder
$app = $dir.'/src/';

// Composer's vendor folder
$vendor = $dir.'/vendor/';

// Include the autoloader class handler
require $vendor.'panada/resource/Loader.php';

// Instantiate autoloader class
new Panada\Resource\Loader([
    'Controller' => $app,
    'Panada' => $vendor.'panada/',
    'Model' => $app,
    'Library' => $app,
    'Module' => $app,
    'vendor' => $vendor
]);

Panada\Resource\Gear::send();