<?php
require('db.php');
if(check_setup_status() === FALSE){
	header("location:setup.php");
}

?>
<DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo $site_title; ?> is a forum powered based on the ZeetForum framework which is an open source Forum Script Designed by Yaat Crew">
    <title><?php echo $site_title; ?></title>
    <link href="css/app.v1.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

     <!-- App -->
        <script src="js/app.v1.js">
        </script>
        <script src="js/app.plugin.js"></script>
    <!-- parsley -->
        <script src="js/parsley/parsley.min.js">
        </script>
        <script src="js/parsley/parsley.extend.js"></script>
        <!-- wysiwyg -->
        <script src="js/wysiwyg/jquery.hotkeys.js">
        </script>
        <script src="js/wysiwyg/bootstrap-wysiwyg.js">
        </script>
        <script src="js/wysiwyg/demo.js"></script>
</head>
<body>
<div class="container">
<div class="row" id="header">
<div class="col-lg-12 border p">
		<div class="hidden-xs ">
		<p id="logo"><a href="index.php"><h1 id="logo" >
		<?php echo $site_title; ?></h1></a>
		</p>
		</div>
		<div class="hidden-lg hidden-sm hidden-md">
			<p id="logo"><a href="index.php"><h1 id="logo" >
		</h1><?php echo $site_title; ?></a>
		</p>
		</div>
		<?php if(isset($uusername)){?>

	  <p> Welcome, <b><a href='profile.php?u=<?php echo $uusername;?>'><?php echo $uusername;?></a><span><?php get_icon($uusertype);?></span></b>: <a href='editprofile.php?u=<?php echo $uusername; ?>'>Edit Profile   </p>
		<p><b>Stats:</b> <?php echo get_stats('members'); ?> members,  <?php echo get_stats('threads'); ?> topics. <b>Date</b>: <?php echo date("F j, Y, g:i a");?> <a href='logout.php'>Logout</a></p>
			<?php }else{?>
	<p> Welcome, <b>Guest</b>: <a href='join.php'>Join <?php echo $site_title; ?></a> / <a href='login.php'>Login</a> </p>
		<p><b>Stats:</b> <?php echo get_stats('members'); ?> members,  <?php echo get_stats('threads'); ?> topics. <b>Date</b>: <?php echo date("F j, Y, g:i a");?></p>
		<?php }?>		
		<p><input type="search" name="search" class="col-lg-10"> <input type="submit" value="Search" name="search" class="col-lg-2"></p>
	</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65055250-1', 'auto');
  ga('send', 'pageview');

</script>