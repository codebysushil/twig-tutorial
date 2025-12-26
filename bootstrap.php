<?php
require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/views');

$twig = new Environment($loader, [
    'cache' => __DIR__ . '/storage/cache/twig', // false in dev
    'debug' => true,
    'auto_reload' => true,
]);
