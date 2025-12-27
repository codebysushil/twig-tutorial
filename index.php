<?php
require __DIR__ . '/bootstrap.php';

echo $twig->render('home.html.twig', [
    'title' => 'Home Page',
    'user'  => 'Twig',
]);

