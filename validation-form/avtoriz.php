<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="icon" href="/img/favicon.png" type="image/x-icon">
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

    <?php
    $connect = mysqli_connect("localhost", "root", "", "taxibase");
    if (!$connect) {
        die ('Error connect to database');
    }
    ?>

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
            <?php
                if($_COOKIE['user']==''):
            ?>
        <div class="container">   
            <div class="form__inner">
                <div class="form__content">
                    <div class="title">
                        Зарегистрируйтесь
                    </div>
                    <div class="title-min">
                        <a href="log_in.php">Есть аккаунт? Войти...</a>
                    </div>
                    <div class="form__box">
                        <form action="check.php" method="post">
                            <div class="form__box-inner">
                            <label> Имя:
                        <input type="text" class="form-control" name="name"
                                id="name" placeholder="Введите имя..."><br>
                            </label>
                            <label> Логин:
                        <input type="text" class="form-control" name ="login"
                                id="login" placeholder="Введите логин..."><br>
                            </label>
                            <label>Пароль:  
                        <input type="password" class="form-control" name="pass"
                                id="pass" placeholder="Введите пароль..."><br>
                            </label>    
                            <button class="btn btn-success" type="submit">Зарегистрироваться</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <section>
    <?php else: ?>
    <div class="container">
        <div class="title1">
            Здравствуйте, <?=$_COOKIE['user']?>. Чтобы выйти, нажмите <a href = "exit.php">здесь</a>. 
            <br><br>Вы получили доступ к базе данных заказов наших клиентов.
        </div>
        <div class="orders">
            <b>Список заказов:</b>
        </div> 
        <table>
        <tr>
            <th>ID</th>
            <th>Откуда</th>
            <th>Куда</th>
            <th>Номер телефона</th>
            <th>Время</th>
            <th>Комментарий</th>
            <th></th>
        </tr>

        <?php
            $ordertaxi = mysqli_query($connect,"SELECT * FROM `ordertaxi`");
            $ordertaxi = mysqli_fetch_all($ordertaxi);
            foreach($ordertaxi as $ordertaxi){ ?>
            <tr>
                <td><?= $ordertaxi[0]?></td>
                <td><?= $ordertaxi[1]?></td>                
                <td><?= $ordertaxi[2]?></td>
                <td><?= $ordertaxi[3]?></td>
                <td><?= $ordertaxi[4]?></td>
                <td><?= $ordertaxi[5]?></td>
                <td><b><a style="color: red" href="delete.php?id=<?=$ordertaxi[0]?>">Удалить</td>
            </tr>
            
            <?php
            }
    ?>

       
    </table> 
   
    </div>  
    
    <?php endif;?>
    <style>
        


        .title1{
            text-decoration: none;
            padding:35px 0px 15px;
            font-size: 30px;
            text-align: center;
            border-bottom: 1px solid #ffc222;
            font-style: italic;
        }
        .orders{
            padding: 30px 0px 20px;
            font-size: 25px;
        }
        table{
            border-collapse: collapse;
            border: 0.3px solid #000;
            width: 100%;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
           
        }
        th,td{
            border: 0.3px solid #000;
            padding: 20px;
            
        }
        th{
           
            background: #606060;
            color: #fff;
        }
        </style>
    </section>
    
</body>