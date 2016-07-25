<?php 
require('includes/db.php');
//A little Logic TO check if Setup Is already done


if(check_setup_status() === TRUE){
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html class=" " lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>
            Setup ZeetForum
        </title>
        <meta content="zeet_app, zeet web app, zeet responsive, zeet admin dashboard, zeet admin, zeet-forum" name="description"/>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
        <link href="css/app.v1.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="">
        <section class="m-t-lg wrapper-md animated fadeInDown" id="content">
            <div class="container aside-xl">
                <a class="navbar-brand block" href="http://jicommit.com/zeetforum">
                    Zeet Forum
                </a>
                <section class="m-b-lg">
                    <header class="wrapper text-center">
                        <strong>
                            Fill in the form below to setup your Forum
                        </strong>
                    </header>
                    <form action="includes/process.php" method="POST">
                    	<div class="list-group">
                            <div class="list-group-item">
                                <input class="form-control no-border" required="" name="site_name" placeholder="Site Name">
                                </input>
                            </div>
                         <div class="list-group">
                            <div class="list-group-item">
                                <input class="form-control no-border" required="" name="admin_username" placeholder="Admin Username">
                                </input>
                            </div>
                        <div class="list-group">
                            <div class="list-group-item">
                                <input class="form-control no-border" required="" name="admin_name" placeholder="Admin Name">
                                </input>
                            </div>
                            <div class="list-group-item">
                                <input class="form-control no-border" required="" name="admin_email" placeholder="Admin Email" type="email">
                                </input>
                            </div>
                            <div class="list-group-item">
                                <input class="form-control no-border" required="" name="admin_password" placeholder="Admin Password" type="password">
                                </input>
                            </div>
                        </div>
                        <div class="checkbox m-b">
                            <label>
                                <input type="checkbox" required="">
                                    I Agree to the
                                    <a href="#">
                                        terms and policy
                                    </a>
                                </input>
                            </label>
                        </div>
                        <input type="hidden" name="mode" value="setup">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Complete Setup
                        </button>
                        <div class="line line-dashed">
                        </div>
                    </form>
                </section>
            </div>
        </section>
        <!-- footer -->
        <footer id="footer">
            <div class="text-center padder clearfix">
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