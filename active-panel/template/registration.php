
<?php 
include("include/db_connect.php");


    $data = $_POST;
    if(isset($data['do_registration']))
        {
          $errors = array();
          if( trim($data['password']) != trim($data['confirm_password']) ){
            $errors[] = 'Пароли не совпадают!';
          }

          if( R::count('users', "email = ?", array($data['email'])) > 0 )
          {
            $errors[] = "Пользователь с такой почтой уже существует!";
          }

          if( R::count('users', "login = ?", array($data['login'])) > 0 )
          {
            $errors[] = "Пользователь с таким логином уже существует! ";
          }

          if(empty($errors)){
           $user = R::dispense('users');
           $user ->name_lastname = $data['name_lastname'];
           $user ->address = $data['address'];
           $user ->email = $data['email'];
           $user ->city = $data['city'];
           $user ->login = $data['login'];
           $user ->password = password_hash($data['password'], PASSWORD_DEFAULT);
           R::store($user);
           echo '<div style="color: green;">Вы успешно Зарегистрировались!</div><hr>';

          }else {
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
          }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Login</title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="registration.php" method="post">
        <h2 class="form-signin-heading">Регистрация</h2>
        <div class="login-wrap">
            <p>Впишите ваши персональные данные</p>
            <input type="text" class="form-control" value="<?php echo @$data['name_lastname'] ?>" name="name_lastname" placeholder="Полное имя и фамилия" autofocus required >

            <input type="text" class="form-control" value="<?php echo @$data['address'] ?>" name="address"  placeholder="Адрес" autofocus required>

            <input type="text" class="form-control"  value="<?php echo @$data['email'] ?>" name="email" id="email" placeholder="Почта" autofocus required>

            <input type="text" class="form-control" value="<?php echo @$data['city'] ?>" name="city" placeholder="Город/область" autofocus required>

            <p>Конфигурация аккаунта</p>
            <input type="text" class="form-control" value="<?php echo @$data['login'] ?>" name="login" placeholder="Логин" autofocus required>

            <input type="password" class="form-control" value="<?php echo @$data['password'] ?>" id="password" name="password" placeholder="Пароль" required>
            <input type="password" class="form-control" value="<?php echo @$data['confirm_password'] ?>" id="confirm_password" name="confirm_password" placeholder="Повторите пароль" required>
            <label class="checkbox">
                <input type="checkbox" name="agree_check" value="agree this condition" required>Я согласен с условиями предоставления услуг и политикой конфиденциальности
            </label>
            <button class="btn btn-lg btn-login btn-block" name="do_registration" type="submit">Зарегистрировать</button>

            <div class="registration">
                Уже есть аккаунт.
                <a class="" href="login.php">
                    Войти
                </a>
            </div>

        </div>

      </form>

    </div>


    <!-- Placed js at the end of the document so the pages load faster -->

   <!--Core js-->
<script src="js/jquery.js"></script>
<script src="bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--Easy Pie Chart-->
<script src="js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="js/flot-chart/jquery.flot.js"></script>
<script src="js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="js/flot-chart/jquery.flot.resize.js"></script>
<script src="js/flot-chart/jquery.flot.pie.resize.js"></script>


<script type="text/javascript" src="js/jquery.validate.min.js"></script>

<!--common script init for all pages-->
<script src="js/scripts.js"></script>
<!--this page script-->
<script src="js/validation-init.js"></script>

  </body>
</html>