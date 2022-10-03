<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<h1><?=$pageHeader?></h1>
<<?php if ($username !== null) : ?>
    <p>Рады вас приветствовать, <?=$username?></p>
<?php else : ?>
    <form>
        <input type="text" name="username" placeholder="Введите ваше имя" />
        <input type="submit" value="Отправить" />
    </form>
<?php endif ?>

</body>
