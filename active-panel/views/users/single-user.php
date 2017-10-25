<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="/template/images/favicon.png">

    <title>Profile</title>

    <!--Core CSS -->
    <link href="/template/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/css/bootstrap-reset.css" rel="stylesheet">
    <link href="/template/font-awesome/css/font-awesome.css" rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="/template/css/style.css" rel="stylesheet">
    <link href="/template/css/style-responsive.css" rel="stylesheet"/>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="/template/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">

            <a href="index.html" class="logo">
                <img src="/template/images/logo.png" alt="">
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
                                        <p>25% , Deadline 12 June’13</p>
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
                                        <p>45% , Deadline 12 June’13</p>
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
                                        <p>87% , Deadline 12 June’13</p>
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
                                        <p>33% , Deadline 12 June’13</p>
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
                                <span class="photo"><img alt="avatar" src="/template/images/avatar-mini.jpg"></span>
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
                                <span class="photo"><img alt="avatar" src="/template/images/avatar-mini-2.jpg"></span>
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
                                <span class="photo"><img alt="avatar" src="/template/images/avatar-mini-3.jpg"></span>
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
                                <span class="photo"><img alt="avatar" src="/template/images/avatar-mini.jpg"></span>
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
        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder=" Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="/template/images/avatar1_small.jpg">
                        <span class="username">John Doe</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
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
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a href="/panel">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Ads managment</span>
                        </a>
                        <ul class="sub">
                            <li><a href="general.html">General</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-glass"></i>
                            <span>Adult management</span>
                        </a>
                        <ul class="sub">
                            <li><a href="blank.html">Accept ads</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-bar-chart-o"></i>
                            <span>Payment</span>
                        </a>
                        <ul class="sub">
                            <li><a href="/payment/new">Create new Payment Method</a></li>
                            <li><a href="/payments/all">Edit Payment Method</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="/users/all-users" class="active">
                            <i class="fa fa-user"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-tasks"></i>
                            <span>SEO - optimisation</span>
                        </a>
                        <ul class="sub">
                            <li><a href="/seo/title">Title</a></li>
                            <li><a href="/seo/description">Description</a></li>
                            <li><a href="/seo/keywords">Keywords</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-envelope"></i>
                            <span>Mail sending</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->

            <div class="row">
                <div class="col-md-12">
                    <section class="panel">
                        <div class="panel-body profile-information">
                            <div class="col-md-3">
                                <div class="profile-pic text-center">
                                    <img src="/template/images/lock_thumb.jpg" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="profile-desk">
                                    <h1><?php echo $user["username"]; ?></h1>
                                    <span class="text-muted">User</span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor
                                        vestibulum imperdiet. Ut auctor accumsan erat, a vulputate metus tristique non.
                                        Aliquam aliquam vel orci quis sagittis.
                                    </p>
                                    <a href="#" class="btn btn-primary">View Profile</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="profile-statistics">
                                    <h1><?php echo $user["email"];?></h1>
                                    <p>User email</p>

                                    <h1><?php echo $user["username"];?></h1>
                                    <p>User name</p>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading tab-bg-dark-navy-blue">
                            <ul class="nav nav-tabs nav-justified ">
                                <li class="active">
                                    <a data-toggle="tab" href="#overview">
                                        Overview
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#job-history">
                                        Ads History
                                    </a>
                                </li>
                                <!--<li>
                                    <a data-toggle="tab" href="#contacts" class="contact-map">
                                        Contacts
                                    </a>
                                </li>-->
                                <!--  <li>
                                      <a data-toggle="tab" href="#settings">
                                          Settings
                                      </a>
                                  </li>-->
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content tasi-tab">
                                <div id="overview" class="tab-pane active">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="recent-act">
                                                <h1>Recent Activity</h1>
                                                <div class="activity-icon terques">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="activity-desk">
                                                    <h2>1 Hour Ago</h2>
                                                    <p>Purchased new stationary items for head office</p>
                                                </div>
                                                <div class="activity-icon red">
                                                    <i class="fa fa-beer"></i>
                                                </div>
                                                <div class="activity-desk">
                                                    <h2 class="red">2 Hour Ago</h2>
                                                    <p>Completed Coffee meeting with <a href="#" class="terques">Stive
                                                            Martin</a> regarding the Product Promotion</p>
                                                </div>
                                                <div class="activity-icon purple">
                                                    <i class="fa fa-tags"></i>
                                                </div>
                                                <div class="activity-desk">
                                                    <h2 class="purple">today evening</h2>
                                                    <p>3 photo Uploaded on facebook product page</p>
                                                    <div class="photo-gl">
                                                        <a href="#">
                                                            <img src="/template/images/sm-img-1.jpg" alt=""/>
                                                        </a>
                                                        <a href="#">
                                                            <img src="/template/images/sm-img-2.jpg" alt=""/>
                                                        </a>
                                                        <a href="#">
                                                            <img src="/template/images/sm-img-3.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="activity-icon green">
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                                <div class="activity-desk">
                                                    <h2 class="green">yesterday</h2>
                                                    <p>Outdoor visit at <a href="#" class="blue">California State
                                                            Route</a> 85 with <a href="#" class="terques">John
                                                            Boltana</a> & <a href="#" class="terques">Harry Piterson</a>
                                                        regarding to setup a new show room.</p>
                                                    <div class="loc-map">
                                                        location map goes here
                                                    </div>
                                                </div>

                                                <div class="activity-icon yellow">
                                                    <i class="fa fa-user-md"></i>
                                                </div>
                                                <div class="activity-desk">
                                                    <h2 class="yellow">12 december 2013</h2>
                                                    <p>Montly Regular Medical check up at Greenland Hospital.</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="job-history" class="tab-pane ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="timeline-messages">
                                                <h3>User ads activity</h3>
                                                <!-- Comment -->
                                                <?php foreach ($userProduct as $ads) : ?>

                                                    <div class="msg-time-chat">
                                                        <div class="message-body msg-in">
                                                            <span class="arrow"></span>
                                                            <div class="text">
                                                                <div class="first">
                                                                    <?php echo $ads[0]['date']; ?>
                                                                </div>
                                                                <div class="second  <?php
                                                                $input = array("bg-terques", "bg-red", "bg-purple", "bg-green", "bg-terques", "bg-blue", "bg-yellow");
                                                                $rand_keys = array_rand($input, 1);
                                                                echo $input[$rand_keys] . "\n";
                                                                ?>">
                                                                    <a href="#"><?php echo $ads[0]['title']; ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /comment -->
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--                                <div id="contacts" class="tab-pane ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="prf-contacts">
                                                <h2><span><i class="fa fa-map-marker"></i></span> location</h2>
                                                <div class="location-info">
                                                    <p>Postal Address<br>
                                                        PO Box 16122 Collins Street West<br>
                                                        Victoria 8007 Australia</p>
                                                    <p>Headquarters<br>
                                                        121 King Street, Melbourne<br>
                                                        Victoria 3000 Australia</p>
                                                </div>
                                                <h2><span><i class="fa fa-phone"></i></span> contacts</h2>
                                                <div class="location-info">
                                                    <p>Phone : +61 3 8376 6284 <br>
                                                        Cell : +61 3 8376 6284</p>
                                                    <p>Email : david@themebucket.net<br>
                                                        Skype : david.rojormillan</p>
                                                    <p>
                                                        Facebook : https://www.facebook.com/themebuckets <br>
                                                        Twitter : https://twitter.com/theme_bucket
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="map-canvas"></div>
                                        </div>
                                    </div>
                                </div>
-->                                <!--                                <div id="settings" class="tab-pane ">
                                                                    <div class="position-center">
                                                                        <div class="prf-contacts sttng">
                                                                            <h2>  Personal Information</h2>
                                                                        </div>
                                                                        <form role="form" class="form-horizontal">
                                                                            <div class="form-group">
                                                                                <label class="col-lg-2 control-label"> Avatar</label>
                                                                                <div class="col-lg-6">
                                                                                    <input type="file" id="exampleInputFile" class="file-pos">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-lg-2 control-label">Company</label>
                                                                                <div class="col-lg-6">
                                                                                    <input type="text" placeholder=" " id="c-name" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-lg-2 control-label">Lives In</label>
                                                                                <div class="col-lg-6">
                                                                                    <input type="text" placeholder=" " id="lives-in" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-lg-2 control-label">Country</label>
                                                                                <div class="col-lg-6">
                                                                                    <input type="text" placeholder=" " id="country" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-lg-2 control-label">Description</label>
                                                                                <div class="col-lg-10">
                                                                                    <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                        <div class="prf-contacts sttng">
                                                                            <h2> socail networks</h2>
                                                                        </div>
                                                                        <form role="form" class="form-horizontal">
                                                                            <div class="form-group">
                                                                                <label class="col-lg-2 control-label">Facebook</label>
                                                                                <div class="col-lg-6">
                                                                                    <input type="text" placeholder=" " id="fb-name" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-lg-2 control-label">Twitter</label>
                                                                                <div class="col-lg-6">
                                                                                    <input type="text" placeholder=" " id="twitter" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-lg-2 control-label">Google plus</label>
                                                                                <div class="col-lg-6">
                                                                                    <input type="text" placeholder=" " id="g-plus" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-lg-2 control-label">Flicr</label>
                                                                                <div class="col-lg-6">
                                                                                    <input type="text" placeholder=" " id="flicr" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-lg-2 control-label">Youtube</label>
                                                                                <div class="col-lg-6">
                                                                                    <input type="text" placeholder=" " id="youtube" class="form-control">
                                                                                </div>
                                                                            </div>

                                                                        </form>
                                                                        <div class="prf-contacts sttng">
                                                                            <h2>Contact</h2>
                                                                        </div>
                                                                        <form role="form" class="form-horizontal">
                                                                            <div class="form-group">
                                                                                <label class="col-lg-2 control-label">Address 1</label>
                                                                                <div class="col-lg-6">
                                                                                    <input type="text" placeholder=" " id="addr1" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-lg-2 control-label">Address 2</label>
                                                                                <div class="col-lg-6">
                                                                                    <input type="text" placeholder=" " id="addr2" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-lg-2 control-label">Phone</label>
                                                                                <div class="col-lg-6">
                                                                                    <input type="text" placeholder=" " id="phone" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-lg-2 control-label">Cell</label>
                                                                                <div class="col-lg-6">
                                                                                    <input type="text" placeholder=" " id="cell" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-lg-2 control-label">Email</label>
                                                                                <div class="col-lg-6">
                                                                                    <input type="text" placeholder=" " id="email" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-lg-2 control-label">Skype</label>
                                                                                <div class="col-lg-6">
                                                                                    <input type="text" placeholder=" " id="skype" class="form-control">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <div class="col-lg-offset-2 col-lg-10">
                                                                                    <button class="btn btn-primary" type="submit">Save</button>
                                                                                    <button class="btn btn-default" type="button">Cancel</button>
                                                                                </div>
                                                                            </div>

                                                                        </form>
                                                                    </div>

                                                                </div>
                                -->                            </div>
                        </div>
                    </section>
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
                                        <div class="sparkline" data-type="bar" data-resize="true" data-height="30"
                                             data-width="90%" data-bar-color="#39b7ab" data-bar-width="5"
                                             data-data="[200,135,667,333,526,996,564,123,890,564,455]">
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
                                        <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20"
                                             role="progressbar" class="progress-bar progress-bar-info">
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
                                    <a href="#"><img src="/template/images/avatar1_small.jpg" alt=""></a>
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
                                    <a href="#"><img src="/template/images/avatar1.jpg" alt=""></a>
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
                                    <a href="#"><img src="/template/images/chat-avatar2.jpg" alt=""></a>
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
                                    <a href="#"><img src="/template/images/avatar1_small.jpg" alt=""></a>
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
                                    <a href="#"><img src="/template/images/avatar1.jpg" alt=""></a>
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
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 40%">
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="prog-row">
                                    <p>
                                        Full sleeve baby wear (SL: 17665)
                                    </p>
                                    <div class="progress progress-xs mtop10">
                                        <div class="progress-bar progress-bar-info" role="progressbar"
                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 70%">
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
<script src="/template/js/jquery.js"></script>
<script src="/template/bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="/template/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/template/js/jquery.scrollTo.min.js"></script>
<script src="/template/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="/template/js/jquery.nicescroll.js"></script>
<!--Easy Pie Chart-->
<script src="/template/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="/template/js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="/template/js/flot-chart/jquery.flot.js"></script>
<script src="/template/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="/template/js/flot-chart/jquery.flot.resize.js"></script>
<script src="/template/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false"></script>

<!--common script init for all pages-->
<script src="/template/js/scripts.js"></script>
<script>

    //google map
    function initialize() {
        var myLatlng = new google.maps.LatLng(-37.815207, 144.963937);
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    $('.contact-map').click(function () {

        //google map in tab click initialize
        function initialize() {
            var myLatlng = new google.maps.LatLng(-37.815207, 144.963937);
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Hello World!'
            });
        }

        google.maps.event.addDomListener(window, 'click', initialize);
    });

</script>


</body>
</html>
