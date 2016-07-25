<?php
require ('includes/header.php');
if (isset($_SESSION['usertype'])) {
    header("location:index.php");
}
?>

	<div class="col-lg-12 border ">

		<h2 id="logo" class="bderbtm p"><?php echo $site_title;?></h2>
        <?php flash('info'); ?>
            <h3>Login Portal </h3>
         <form action="includes/process.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter Your Username Here" required value="">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your  Password Here" required autocomplete="off">
            </div>
           <input type="hidden" name="mode" value="login" >
            <div class="form-group">
                <input type="submit" name="submit" value="Login" class="btn btn-success" ><br /> <a href="forgot.html">Forgot Password ?</a>
            </div>
        </form>
    </div>
</div>
<?php require ("includes/bottombanner.php");?>
    

<?php require ('includes/footer.php');?>
</div>

</body>
</html>