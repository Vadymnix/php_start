<?php
$pageHeader = 'Добро пожаловать';

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['username']);
}

$username = null;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} elseif (isset($_REQUEST['username']) && !empty($_REQUEST['username'])) {
    $username = $_REQUEST['username'];
    $_SESSION['username'] = $username;
}

require_once('view/home.php');
