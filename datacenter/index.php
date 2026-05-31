<?php
require_once("../include/initialize.php");



/* =========================
   AUTH CHECK
   ========================= */
if (empty($sess_id) || empty($phone)) {
    header("Location: ../index");
    exit;
}


/* =========================
   GET ROUTE
   ========================= */
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');

$segments = explode('/', $uri);
$route = end($segments);
/* Default route */
if ($route === 'finance' || $route === '') { 
    $route = 'home';
}

/* =========================
   ROUTING
   ========================= */
switch ($route) {

    case 'home':
        $title   = "Dashboard";
        $content = "dashboard.php";
        break;

    case 'statistics':
        $title   = "Statistics";
        $content = "../datacenter/base/statistics.php";
        break;
    case 'audit-history':
        $title   = "logs monitoring";
        $content = "../datacenter/base/logs.php";
        break;
    case 'predictions':
         $title   = "Hourly Predictions";
        $content = "../datacenter/base/predictions.php";
        break;
        
        
   

    default:
        $title = "Dashboard";
        $content = "dashboard.php";
        break; 
}

/* =========================
   LOAD LAYOUT
   ========================= */
require_once("../theme/navigation.php");
