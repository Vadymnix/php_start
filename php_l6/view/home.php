<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<h1><?=$pageHeader?></h1>
<?php if ($username !== null) : ?>
    <p>Рады вас приветствовать, <?=$username?></p>
    <a href="?action=logout">Выйти</a>
<?php else : ?>
    <form method="post">
        <input type="text" name="username" placeholder="Введите ваше имя" />
        <input type="submit" value="Отправить" />
    </form>
<?php endif ?>
</body>
