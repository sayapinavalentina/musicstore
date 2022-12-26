<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- ИЗМЕНИТЬ ИКОНКУ -->
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Music Shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>Ваш заказ принят. Спасибо за заказ в нашем магазине. <a href="products.php">Нажмите сюда</a> для покупки других товаров.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
               <div class="container">
               <center>
                   <p>Music Shop. Все права защищены. | Позвоните мне: +8 (985) 570-33-00</p>
                   <p>Этот сайт был создан Саяпиной Валентиной при поддержке всевышних сил.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
