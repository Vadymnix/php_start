<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизация</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous">
    <style>
        .sign-in-form {
            margin: auto;
        }
        #username {
            margin-bottom: 10px;
        }
        #password {
            margin-bottom: 20px;
        }
        #controller {
            visibility: hidden;
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
        <form method="post" class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
            <h3>Авторизация</h3>
            <div class="alert alert-danger <?=$error === null ? 'visually-hidden' : ''?>">
                <?=$error?>
            </div>
            <label for="username" class="visually-hidden">Имя пользователя</label>
            <input type="text" id="username" name="username" class="form-control mt-3" placeholder="Имя пользователя" required="" autofocus="">
            <label for="password" class="visually-hidden">Пароль</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Пароль" required="">
            <button class="w-75 btn btn-lg btn-primary mt-3" type="submit">Войти</button>
        </form>
        <form class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
            <a href="/" class="w-75 btn btn-lg btn-primary mt-1">Главная</a>
        </form>
        <form method="post" class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
            <input type="text" id="controller" name="controller" class="form-control mt-3" value="registration">
            <button class="w-75 btn btn-lg btn-primary mt-1" type="submit">Регистрация</button>
        </form>
    </div>
</div>
</body>
