<!DOCTYPE html>
<html class="bg-dark" lang="en">
    <head>
        <link href="<?php echo base_url(); ?>css/app.v1.css" rel="stylesheet" type="text/css"/>
        <body class="">
            <section id="content">
                <div class="row m-n">
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="text-center m-b-lg">
                            <h1 class="h text-white animated fadeInDown">
                                Error!
                            </h1>
                        </div>
                        <section class="panel panel-default">
                        <div class="panel-body">
                        <?php echo $error; ?>
                        </div>
                        </section>
                        <div class="list-group bg-info auto m-b-sm m-b-lg">
                        <?php if(!empty(last_location())){?>

                        	
                        	<a class="list-group-item" href="<?php echo last_location() ?>">
                                <i class="fa fa-chevron-right icon-muted">
                                </i>
                                <i class="fa fa-fw fa-backward icon-muted">
                                </i>
                                Go Back
                            </a><?php }?>
                            <a class="list-group-item" href="<?php echo base_url(); ?>index.php">
                                <i class="fa fa-chevron-right icon-muted">
                                </i>
                                <i class="fa fa-fw fa-home icon-muted">
                                </i>
                                Goto homepage
                            </a>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- footer -->
            <footer id="footer">
                <div class="text-center padder clearfix">
                    <p>
                        <small>
                            Zeet Web app framework powered by Yaat Crew
                            <br>
                                ©
                                <?php echo date('Y'); ?>
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
    </head>
</html>
