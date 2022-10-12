<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
            crossorigin="anonymous">
    <style>
        body {
            margin: 0 auto;
            text-align: center;
        }

        .sign-in-form {
            margin: auto;
        }

        #task {
            margin: auto;
        }

        #controller, #action {
            visibility: hidden;
        }
    </style>
</head>
<body>
<h1><?=$pageHeader?></h1>
<?php if ($username !== null) : ?>
    <p>Рады вас приветствовать, <?=$username?></p>
    <form method="post" class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
        <button class="w-75 btn btn-lg btn-primary mt-1" type="submit">Выйти</button>
        <input type="text" id="action" name="action" value="logout" class="form-control mt-3">
        <input type="text" id="controller" name="controller" value="security" class="form-control mt-3">
    </form>
    <div id="task" class="mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
        <a href="/?controller=task" class="w-75 btn btn-lg btn-primary mt-1">Задачи</a>
    </div>

<?php else : ?>
    <form method="post"  class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
        <h3>Вам надо авторизироваться в системе</h3>
        <button class="w-75 btn btn-lg btn-primary mt-1" type="submit">Войти</button>
        <input type="text" id="controller" name="controller" value="security" class="form-control mt-3">
    </form>
<?php endif ?>
</body>
