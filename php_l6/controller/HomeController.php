<?php
$pageHeader = 'Привет всем';
$userName = $_GET['username'] ?? null;

require_once('view/home.php');
