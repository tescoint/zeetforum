<?php 
require('../includes/db.php');
check_access('admin');
?>

<!DOCTYPE html>
<html class="app" lang="en">
   
    <head>
        <meta charset="utf-8"/>
        <title>
            <?php echo $site_title; ?> | Zeet Forum Web Application
        </title>
        <meta content="<?php echo $site_title; ?>app, <?php echo $site_title; ?>web app, responsive, <?php echo $site_title; ?>admin dashboard" name="description"/>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
        <link href="../css/app.v1.css" rel="stylesheet" type="text/css"/>
        <link href="../js/calendar/bootstrap_calendar.css" rel="stylesheet" type="text/css"/>
        <link href="../js/datatables/datatables.css" rel="stylesheet" type="text/css"/>
         <script src="../js/app.v1.js">
        </script>
         <script src="../js/app.plugin.js"></script>
        <script src="../js/datatables/jquery.dataTables.min.js"></script>
    </head>
    <body class="">
        <section class="vbox">
            <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
                <div class="navbar-header aside-md dk">
                    <a class="btn btn-link visible-xs" data-target="#nav,html" data-toggle="class:nav-off-screen,open">
                        <i class="fa fa-bars">
                        </i>
                    </a>
                    <a class="navbar-brand" href="index.php">
                        <img alt="<?php echo $site_title; ?>" class="m-r-sm" src="<?php echo $site_image; ?>">
                           <!--  <span class="hidden-nav-xs">
                               <?php echo $site_title; ?>
                            </span> -->
                        </img>
                    </a>
                    <a class="btn btn-link visible-xs" data-target=".user" data-toggle="dropdown">
                        <i class="fa fa-cog">
                        </i>
                    </a>
                </div>

                <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
                    <!-- <li class="hidden-xs">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="i i-chat3">
                            </i>
                            <span class="badge badge-sm up bg-danger count">
                                2
                            </span>
                        </a>
                        <section class="dropdown-menu aside-xl animated flipInY">
                            <section class="panel bg-white">
                                <div class="panel-heading b-light bg-light">
                                    <strong>
                                        You have
                                        <span class="count">
                                            2
                                        </span>
                                        notifications
                                    </strong>
                                </div>
                                <div class="list-group list-group-alt">
                                    <a class="media list-group-item" href="#">
                                        <span class="pull-left thumb-sm">
                                            <img alt="..." class="img-circle" src="images/a0.png">
                                            </img>
                                        </span>
                                        <span class="media-body block m-b-none">
                                            Use awesome animate.css
                                            <br>
                                                <small class="text-muted">
                                                    10 minutes ago
                                                </small>
                                            </br>
                                        </span>
                                    </a>
                                    <a class="media list-group-item" href="#">
                                        <span class="media-body block m-b-none">
                                            1.0 initial released
                                            <br>
                                                <small class="text-muted">
                                                    1 hour ago
                                                </small>
                                            </br>
                                        </span>
                                    </a>
                                </div>
                                <div class="panel-footer text-sm">
                                    <a class="pull-right" href="#">
                                        <i class="fa fa-cog">
                                        </i>
                                    </a>
                                    <a data-toggle="class:show animated fadeInRight" href="#notes">
                                        See all the notifications
                                    </a>
                                </div>
                            </section>
                        </section>
                    </li> -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="thumb-sm avatar pull-left">
                                <?php 

                                ?>
                                <!-- <img alt="..." src="../images/p1.jpg">
                                </img> -->
                            <?php echo "$uname "; ?><span><?php get_icon($uusertype);?></span>
                            <b class="caret">
                            </b>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight">
                            <li>
                                <span class="arrow top">
                                </span>
                                <a href="index.php?page=setup">
                                    Settings
                                </a>
                            </li>
                            <li>
                                <a href="index.php?page=profile">
                                    Profile
                                </a>
                            </li>
                            <!-- <li>
                                <a href="#">
                                    <span class="badge bg-danger pull-right">
                                        3
                                    </span>
                                    Notifications
                                </a>
                            </li>
                            <li>
                                <a href="docs.html">
                                    Help
                                </a>
                            </li> -->
                            <li class="divider">
                            </li>
                            <li>
                                <a href="../logout.php">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </header>
            <?php require 'admin_sidebar.php';