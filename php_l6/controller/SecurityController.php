<?php
require_once ('model/UserProvider.php');

if (isset($_REQUEST['action']) && $_REQUEST['action'] === 'logout') {
    unset($_SESSION['username']);
}

$error = null;
if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;

    $userProvider = new UserProvider();
    $user = $userProvider->getByUsernameAndPassword($username, $password);

    if ($user === null) {
        $error = 'Пользователь с указанными учетными данными не найден';
    } else {
        $_SESSION['user'] = $user;
    }

    if (isset($_SESSION['user'])) {
        header('Location: /?controller=home');
    }
}

require_once 'view/signin.php';