<?php 
include("include/db_connect.php");
    $data = $_POST;
     if(isset($data['do_login']))
        {
          $errors = array();
          $user = R::findOne('users', 'login = ?', array($data['login']));
          if($user){
            if(password_verify($data['password'], $user->password) )
            {
              $_SESSION['logged_user'] = $user->id;
               header( 'Location: order.php' ) ;
             }
            else{
             $errors[] = 'Неверно введён пароль!';

            }
          }else{
            $errors[] = 'Пользователь с таким логином и паролем не найден!';
          }
           if(!empty($errors)){
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

      <form class="form-signin" action="login.php" method="post">
        <h2 class="form-signin-heading">Панель vpilot.by</h2>
        <div class="login-wrap">
            <div class="user-login-info">
                <input type="text" class="form-control" value="<?php echo @$data['login'] ?>" name="login"  placeholder="Логин" autofocus required>
                <input type="password" class="form-control" value="<?php echo @$data['password'] ?>" id="password" name="password"  placeholder="Пароль" required>
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me">Запомнить меня
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal">Забыл пароль?</a>

                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" name="do_login"  type="submit">Войти</button>

            <div class="registration">
                У меня нету акканута.
                <a class="" href="registration.php">
                    Создать аккаунт
                </a>
            </div>

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Забыли пароль?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Впишите вашу почту, чтобы восстановить доступ к вашей учётной записи. Ваше требование будет выслано администратору на рассмотрение.</p>
                          <input type="text" name="email" placeholder="Ваша почта" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Отмена</button>
                          <button class="btn btn-success"  type="button">Выслать запрос</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>

    </div>



    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="js/jquery.js"></script>
    <script src="bs3/js/bootstrap.min.js"></script>

  </body>
</html>
