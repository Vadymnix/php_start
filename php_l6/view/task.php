<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task</title>
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

        #controller, #action{
            visibility: hidden;
        }

        form {
            display: block;
        }

        span {
            padding: 5px;
        }

        .task__item {
            padding: 10px;
            background-color: lightblue;
            border: 1px solid darkgrey;
        }
    </style>
</head>
<body>
<div class="container text-center">
    <div class="row">
        <form method="post" class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
            <?php
            $provider = new TaskProvider();
            $arrTask = $provider->getUndoneList();
            foreach ($arrTask as $task) {
            ?>
            <div class="task__item">
                <span><?= $task->getDescription() ?></span>
                <a href="/?controller=task&action=delete&id=А НЕТУ ID" class="w-75 btn btn-lg btn-primary mt-1">Выполнить</a>
            </div>
            <?php
            } //end foreach
            ?>
        </form>
        <form method="post" class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
            <h3>Задачи</h3>
            <label for="username" class="visually-hidden">Задача</label>
            <input type="text" id="task" name="task"
                   class="form-control mt-3" placeholder="описание задачи"
                   minlength="10"
            >
            <input type="text" id="controller" name="controller" value="task">
            <input type="text" id="action" name="action" value="addtask">
            <button class="w-75 btn btn-lg btn-primary mt-1" type="submit">Добавить задачу</button>
            <div class="class="mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8"">
                <a href="/" class="w-75 btn btn-lg btn-primary mt-1">Главная</a>
            </div>
        </form>
    </div>
</div>
</body>
