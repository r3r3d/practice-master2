
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pop it MVC</title>
    <style>
        *{
            margin: auto;
            text-decoration: none;
            color: black;
        }
        nav{
            margin: auto;
            background-color: beige ;
            display: flex;
            height: 70px;

        }
        .link {
            margin-left: 10px;
            display: flex;
            margin-top: 15px;

        }
        .link:hover{
            background-color: whitesmoke;
            display: flex;
        }
        .link>a{
            padding-right: 15px;
        }
        .header{
            display: flex;
            float: left;
            gap: 10px;

        }

    </style>
</head>
<body>
    <nav>
    <div class="header">
        <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
        <div class="buttons">
            <?php
            if (!app()->auth::check()):
            ?>
            <a href="<?= app()->route->getUrl('/login') ?>" class="login">Вход</a>
<!--            <a href="--><?php //= app()->route->getUrl('/signup') ?><!--" class="registration">Регистрация</a>-->
        </div>
        <div class="link">



            <?php
        else:
            ?>
            <a href="<?= app()->route->getUrl('/books') ?>">Выбор книги</a>
            <?php
            if (app()->auth::User()->id_role === 1):
                ?>
            <a href="<?= app()->route->getUrl('/add_user') ?>">Добавить читателя</a>
            <?php
            endif;
            ?>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход</a>
            <?php
            endif;
            ?>
        </div>

    </div>
    </nav>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>
