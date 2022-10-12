<?php
session_start();
$pdo = require_once ('db.php');

$controller = $_REQUEST['controller'] ?? 'home';
$routes = require 'routes.php';

require_once $routes[$controller];
