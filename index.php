<?php

require_once('./vendor/autoload.php');

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, ['cache' => false]);

// Routing
$route = each($_GET);
$route = $route[0];

$template = isset($route) ? $route : 'home_page';
$template = in_array($template, 
    ['home_page', 'find_out_tips', 'tipsters_ranking', 'history', 'pronostic', 'bookmakers_benchmark', 'sport', 'register', 'login', 'recovery'])
    ? $template : '404';

echo $twig->render($template . '.html.twig', [
    'period_selected'   => '2019-11',
    'period_last'       => '2019-12',
    'statistics'        => ['2019-09', '2019-10', '2019-11', '2019-12']
]);
