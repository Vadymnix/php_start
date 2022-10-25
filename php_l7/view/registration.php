<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Регистрация</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous">
    <style>
        .sign-in-form {
            margin: auto;
        }

        input {
            margin-bottom: 20px;
        }

        input#controller {
            visibility: hidden;
        }

        h1 {
            text-align: center;
        }

        .row {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }
    </style>
</head>
<body>
<div class="container text-center">
    <div class="row">
        <form method="post" class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8" autocomplete="fdsfdsdf">
            <h3>Регистрация</h3>
            <div class="alert alert-danger <?=$error === null ? 'visually-hidden' : ''?>">
                <?=$error?>
            </div>
<!--            <label for="name" class="visually-hidden">Имя</label>-->
            <input type="text" id="controller" name="controller" value="registration">
            <input type="text" id="name" name="name" class="form-control mt-3" placeholder="Имя" autocomplete="sdfssf">
<!--            <label for="username" class="visually-hidden">Имя пользователя</label>-->
            <input type="text" id="username" name="username" class="form-control mt-3" placeholder="Имя пользователя" autocomplete="sadfsfsdf">
<!--            <label for="password" class="visually-hidden">Пароль</label>-->
            <input type="password" id="password" name="password" class="form-control" placeholder="Пароль" autocomplete="sdfsdfdsfds">
            <button class="w-75 btn btn-lg btn-primary mt-1" type="submit">Зарегистрировать</button>
        </form>
        <form class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
            <a href="/" class="w-75 btn btn-lg btn-primary mt-1">Главная</a>
        </form>
    </div>
</div>
</body>
