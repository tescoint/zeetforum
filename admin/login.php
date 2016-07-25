<?php 
require('../includes/db.php');
//A little Logic TO check if Setup Is already done


if(check_setup_status() === FALSE){
	header("location:../setup.php");
}elseif(isset($uusername)){
	header("location:../admin/index.php");
}


?>
<!DOCTYPE html>
<html class=" " lang="en">

    <head>
        <meta charset="utf-8"/>
        <title>
            Admin Login | Zeet Forum Web Application
        </title>
        <meta content="zeet_app, zeet web app, zeet responsive, zeet admin dashboard, zeet admin, zeet-forum" name="description"/>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
        <link href="../css/app.v1.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="">
        <section class="m-t-lg wrapper-md animated fadeInUp" id="content">
            <div class="container aside-xl">
                <a class="navbar-brand block" href="http://jicommit.com/zeetforum">
                    Zeet Forum
                </a>
                <section class="m-b-lg">
                    <header class="wrapper text-center">
                        <strong>
                            Sign in to manage your forum
                        </strong>
                    </header>
                    <?php flash( 'info' ); ?>

                    <form action="../includes/process.php" method="POST">
                        <div class="list-group">
                            <div class="list-group-item">
                                <input class="form-control no-border" name="username" placeholder="Username" type="text">
                                </input>
                            </div>
                            <div class="list-group-item">
                                <input class="form-control no-border" name="password" placeholder="Password" type="password">
                                </input>
                            </div>
                            <input type="hidden" name="mode" value="login">
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Sign in
                        </button>
                        <div class="text-center m-t m-b">
                            <a href="#">
                                <small>
                                    Forgot password?
                                </small>
                            </a>
                        </div>
                        <div class="line line-dashed">
                        </div>
                    </form>
                </section>
            </div>
        </section>
        <!-- footer -->
        <footer id="footer">
            <div class="text-center padder">
                <p>
                    <small>
                        Zeet Web app framework powered by Yaat Crew
                        <br>
                            © <?php echo date('Y'); ?>
                        </br>
                    </small>
                </p>
            </div>
        </footer>
        <!-- / footer -->
        <!-- Bootstrap -->
        <!-- App -->
        <script src="js/app.v1.js">
        </script>
        <script src="js/app.plugin.js">
        </script>
    </body>
    
</html>