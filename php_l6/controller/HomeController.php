<?php
$pageHeader = 'Привет всем';
$userName = isset($_POST['username']) && !empty($_POST['username']) ?
            $_POST['username'] : null;

require_once('view/home.php');
