<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/jquery.formstyler.css">
    <link rel="stylesheet" href="/css/jquery.formstyler.theme.css">
  
    <link rel="stylesheet" href="/css/style2.css">
</head>
<body>
    <header class="header" id="a1">
        <div class="header__content">
            <div class="container">
                <div class="header__content-inner">
                    <div class="header__logo">
                        <img src="/img/logo.png" width="230" height="70" alt="логотип" id="a5">
                    </div>
                    <div class="menu">
                            <br><a href="/index.html">Вернуться на главную</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="form">
        <div class="container">
        <div class="form__inner">
            <div class="form__content">
                <div class="title">
                    Вход в систему
                </div>
                <div class="title-min">
                    <a href="avtoriz.php">Вернуться к регистрации...</a>
                </div>
                <div class="form__box">
                    
                    <form action="auth.php" method="post">
                        <div class="form__box-inner">
                            <label> Логин:
                    <input type="text" class="form-control" name ="login"
                    id="login" placeholder="Введите логин..."><br>
                            </label>
                     
                            <label>Пароль:  
                    <input type="password" class="form-control" name="pass"
                    id="pass" placeholder="Введите пароль..."><br>
                            </label>  
                            <button class="btn btn-success" type="submit">Войти</button>  
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>
</body>