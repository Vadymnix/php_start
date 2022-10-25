<?php
require_once('model/UserProvider.php');
//$pdo = require_once('db.php'); //Почему не работает это подключение?!!!
$pdo = new PDO(
    'sqlite:database.db',
    null,
    null,
    [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC],
);

$error = null;
if (isset($_POST['username'], $_POST['password'], $_POST['name'])) {
    [
        'username' => $username,
        'password' => $password,
        'name' => $name,
    ] = $_POST;

    $userProvider = new UserProvider($pdo);

    $user = $userProvider->registerUser( new User($username, $name), $password);

    if ($user === null) {
        $error = 'Пользователь с указанными учетными данными не найден';
        header('Location: /?controller=security');
    } else {
        $_SESSION['username'] = $user->getUsername();
    }

//    var_dump($_SESSION['username']);
//    die();

    if (isset($_SESSION['username'])) {
        header('Location: /?controller=home');
    }
} else {
    echo "<h1>------ Нужна регистрация ------<h1>";
}

require_once 'view/registration.php';