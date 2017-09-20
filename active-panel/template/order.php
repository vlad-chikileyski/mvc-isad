<?php 
include("include/db_connect.php");
 if(isset($_SESSION['logged_user'])){
    $id_user = $_SESSION['logged_user'];
    $user = R::findOne('users',' id = ?', array( $id_user ));
}else{
    header( 'Location: login.php' ) ;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Blank page</title>

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

<body>

<section id="container" >
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.html" class="logo">
        <img src="images/logo.png" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="#">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/avatar-mini.jpg"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/avatar-mini-2.jpg"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/avatar-mini-3.jpg"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/avatar-mini.jpg"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>


<!-- <?php if(isset($_SESSION['logged_user'])): ?>
 Авторизован! <br> 
<a href= "logout.php"> Выйти из аккаунта </a>
<?php else : ?>
<a href="login.php">Авторизироваться</a><br>
<a href="registration.php">Регистрация</a>
<?php endif; ?>  -->


<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
       
        <!-- if logger ok  START-->
        <?php if(isset($_SESSION['logged_user'])): ?>
            <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle icon-user" href="#">
                <!--<img alt="" src="images/avatar1_small.jpg"> ECHO USER NAME-->
                <i class="fa fa-user"></i> 
                <span class="username"> <?php echo $user->name_lastname; ?> </span> 

                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="logout.php"><i class="fa fa-key"></i>Выйти из аккаунта</a></li>
            </ul>
        </li>
                <!-- if logger ok END-->
        <?php else :  ?>


        <?php endif; ?> 
            
        
        <!-- user login dropdown end -->
        <li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li>
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->            <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>Каталог</span>
                </a>
                <ul class="sub">
                    <li><a href="form_component.html">Категории</a></li>
                    <li><a href="advanced_form.html">Товары</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>Импорт прайсов</span>
                </a>
                <ul class="sub">
                    <li><a href="pricelist.php">Импорт</a></li>
                    <li><a href=".html">Ключевые слова</a></li>
                    <li><a href="providers.php">Поставщики</a></li>
                </ul>
            </li>
             <li class="sub-menu">
                <a class="active" href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>Продажи</span>
                </a>
                <ul class="sub">
                    <li class="active"><a href="order.php">Заказы</a></li>
                    <li><a href="#">Покупатели</a></li>
                    <li><a href="#">Купоны</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>Отчёты</span>
                </a>
                <ul class="sub">
                    <li><a href="#">Продажи</a></li>
                    <li><a href="#">Товары</a></li>
                    <li><a href="#">Покупатели</a></li>

                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>SEO</span>
                </a>
                <ul class="sub">
                    <li><a href="#">Ключевые слова</a></li>
                    <li><a href="#">Описание</a></li>
                    <li><a href="#">Статистика посещений</a></li>

                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>Система</span>
                </a>
                <ul class="sub">
                    <li><a href="#">Пользователи</a></li>
                    <li><a href="#">Привилегии</a></li>
                </ul>
            </li>
            
            
        </ul></div>        
<!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                 <!--tab nav start-->
            <section class="panel">
                <header class="panel-heading tab-bg-dark-navy-blue">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#home-2">
                                <i class="fa fa-home"></i>
                                Детали заказа
                            </a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#about-2">
                                <i class="fa fa-user"></i>
                              Информация
                              о покупателе
                            </a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#contact-2">
                                <i class="fa fa-shopping-cart"></i>
                                Продукты
                            </a>
                        </li>
                         <li class="">
                            <a data-toggle="tab" href="#hist">
                                <i class="fa fa-book"></i>
                                История
                            </a>
                        </li>
                    </ul>
                </header>
               
                <div class="panel-body">
                    <div class="tab-content">
                        <div id="home-2" class="tab-pane active">
                                <div class="row">
                                        <div class="col-sm-12">
                                            <section class="panel">
                                                <div class="panel-body">
                                                    <table class="table  table-hover general-table">
                                                        <thead>
                                                        </thead>
<?php 

    $items_order = R::findOne( 'items_order' );

     
            echo ' 
                                                        <tbody>
                                                        <tr>
                                                            <td><a href="#">№ заказа:</a></td>
                                                            <td class="hidden-phone">'.$items_order->name_lastname.'</td> 
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                    Название магазина:
                                                                </a>
                                                            </td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                    Url магазина:
                                                                </a>
                                                            </td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                    Покупатель:
                                                                </a>
                                                            </td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">E-Mail:</a></td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                    Телефон:
                                                                </a>
                                                            </td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                    Статус заказа:
                                                                </a>
                                                            </td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                    Комментарий:
                                                                </a>
                                                            </td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                    IP адрес:
                                                                </a>
                                                            </td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                   Forwarded IP:
                                                                </a>
                                                            </td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                   Браузер (User Agent):
                                                                </a>
                                                            </td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                   Accept Language:
                                                                </a>
                                                            </td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                    Дата добавления:
                                                                </a>
                                                            </td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                    Дата изменения:
                                                                </a>
                                                            </td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                        </tr>



                                                        </tbody>
                                                    </table>
                                                </div>
                                            </section>
                                        </div>
                                    </div>

                        </div>
                        <div id="about-2" class="tab-pane">
                            
                             <div class="row">
                                        <div class="col-sm-12">
                                            <section class="panel">
                                                <div class="panel-body">
                                                    <table class="table  table-hover general-table">
                                                        <thead>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><a href="#">Имя, Отчество:</a></td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                    Адрес :
                                                                </a>
                                                            </td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                   Почтовый индекс:
                                                                </a>
                                                            </td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                   Область:
                                                                </a>
                                                            </td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">Код области:</a></td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                   Страна:
                                                                </a>
                                                            </td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                    Способ оплаты:
                                                                </a>
                                                            </td>
                                                            <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                        </div>
                        <div id="contact-2" class="tab-pane ">
                            
                            <div class="row">
                                                                  <div class="col-sm-12">
                                              <section class="panel">
                                                  <div class="panel-body">
                                                      <table class="table table-hover">
                                                          <thead>
                                                          <tr>
                                                          <th></th>
                                                            <th>Товар</th>
                                                            <th>Поставщик Артикул</th>
                                                            <th>Количество</th>
                                                            <th>Цена клиента</th>
                                                            <th>Цена поставщика</th>
                                                            <th>Итого с наценкой</th>

                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                          <tr>
                                                              <td>1</td>
                                                              <td>4Gb <PCI-E> HBM Sapphire <RADEON R9 FURYNitroTri-X OC+>(RTL)DVI+HDMI+3xDP</td>
                                                              <td>nix_ru_219970</td>
                                                              <td>1</td>
                                                              <td>$470.4 | 1 077.22 р. </td>
                                                              <td>$420.0000 | 961.80 р.</td>
                                                              <td>$470.4 | 1 077.22 р.</td>

                                                          </tr>
                                                          <tr>
                                                              <td></td>
                                                              <td></td>
                                                              <td></td>
                                                              <td></td>
                                                              <td></td>
                                                              <td>Итого:</td>
                                                              <td>$470.4 | 1 077.22 р.</td>
                                                          </tr>
                                                          </tbody>
                                                      </table>
                                                  </div>
                                              </section>
                                          </div>
                                 </div>
                        </div>
                        <div id="hist" class="tab-pane ">Contacыt</div>
                    </div>
                </div>
                '  ;
       
  

  ?> 
            </section>
            <!--tab nav end-->

            </div>
        </div>
        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
<!--right sidebar start-->
<div class="right-sidebar">
<div class="search-row">
    <input type="text" placeholder="Search" class="form-control">
</div>
<div class="right-stat-bar">
<ul class="right-side-accordion">
<li class="widget-collapsible">
    <a href="#" class="head widget-head red-bg active clearfix">
        <span class="pull-left">work progress (5)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row side-mini-stat clearfix">
                <div class="side-graph-info">
                    <h4>Target sell</h4>
                    <p>
                        25%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="target-sell">
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="side-graph-info">
                    <h4>product delivery</h4>
                    <p>
                        55%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="p-delivery">
                        <div class="sparkline" data-type="bar" data-resize="true" data-height="30" data-width="90%" data-bar-color="#39b7ab" data-bar-width="5" data-data="[200,135,667,333,526,996,564,123,890,564,455]">
                        </div>
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="side-graph-info payment-info">
                    <h4>payment collection</h4>
                    <p>
                        25%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="p-collection">
						<span class="pc-epie-chart" data-percent="45">
						<span class="percent"></span>
						</span>
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="side-graph-info">
                    <h4>delivery pending</h4>
                    <p>
                        44%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="d-pending">
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="col-md-12">
                    <h4>total progress</h4>
                    <p>
                        50%, Deadline 12 june 13
                    </p>
                    <div class="progress progress-xs mtop10">
                        <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                            <span class="sr-only">50% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>
<li class="widget-collapsible">
    <a href="#" class="head widget-head terques-bg active clearfix">
        <span class="pull-left">contact online (5)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="images/avatar1_small.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">Jonathan Smith</a></h4>
                    <p>
                        Work for fun
                    </p>
                </div>
                <div class="user-status text-danger">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="images/avatar1.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">Anjelina Joe</a></h4>
                    <p>
                        Available
                    </p>
                </div>
                <div class="user-status text-success">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="images/chat-avatar2.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">John Doe</a></h4>
                    <p>
                        Away from Desk
                    </p>
                </div>
                <div class="user-status text-warning">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="images/avatar1_small.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">Mark Henry</a></h4>
                    <p>
                        working
                    </p>
                </div>
                <div class="user-status text-info">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="images/avatar1.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">Shila Jones</a></h4>
                    <p>
                        Work for fun
                    </p>
                </div>
                <div class="user-status text-danger">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <p class="text-center">
                <a href="#" class="view-btn">View all Contacts</a>
            </p>
        </li>
    </ul>
</li>
<li class="widget-collapsible">
    <a href="#" class="head widget-head purple-bg active">
        <span class="pull-left"> recent activity (3)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        just now
                    </p>
                    <p>
                        <a href="#">Jim Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        2 min ago
                    </p>
                    <p>
                        <a href="#">Jane Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        1 day ago
                    </p>
                    <p>
                        <a href="#">Jim Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
        </li>
    </ul>
</li>
<li class="widget-collapsible">
    <a href="#" class="head widget-head yellow-bg active">
        <span class="pull-left"> shipment status</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="col-md-12">
                <div class="prog-row">
                    <p>
                        Full sleeve baby wear (SL: 17665)
                    </p>
                    <div class="progress progress-xs mtop10">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="prog-row">
                    <p>
                        Full sleeve baby wear (SL: 17665)
                    </p>
                    <div class="progress progress-xs mtop10">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                            <span class="sr-only">70% Completed</span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>
</ul>
</div>
</div>
<!--right sidebar end-->

</section>

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


<!--common script init for all pages-->
<script src="js/scripts.js"></script>

</body>
</html>
