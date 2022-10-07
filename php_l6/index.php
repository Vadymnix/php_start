<?php
session_start();

$controller = $_REQUEST['controller'] ?? 'home';
$routes = require 'routes.php';

require_once $routes[$controller];
