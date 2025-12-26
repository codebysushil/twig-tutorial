<?php
require __DIR__ . '/bootstrap.php';

echo $twig->render('home.twig', [
    'title' => 'Home Page',
    'user'  => 'Twig',
]);
