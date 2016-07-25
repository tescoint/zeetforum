<?php
session_start();
if(!isset($_SESSION['username'])){
  require("includes/db.php");
   $error = "You are not logged in";
    include('includes/error.php');
    exit();
}
require ('includes/header.php');
?>
<div class="col-lg-12">
<div class="p">
<p>
  <h1>EDIT YOUR PROFILE</h1>
            </p>
    <a href="index.php">TasuedFoum</a> / <a href="editprofile.php?u=<?php echo $uusername;?>">Edit Your Profile</a>
</div>
<div class="row border" id="content">
   
	<div class="col-lg-12">
   <!-- <h4 style="color:red">NOTE: IF YOU ARE CHANGING YOUR PASSWORD YOU MUST TO PROVIDE YOUR SECURITY ANSWER BEFORE IT WILL CHANGE THANKS.</h4> -->
   <?php flash('info'); ?>
<form class="form-horizontal" method="post" action="includes/process.php">
   <div class="form-group">
        <label class="col-sm-3 control-label">
            Name:
        </label>
        <div class="col-sm-5">
            <input class="form-control" required="" name="name" value="<?php echo $uname; ?>" type="text">
            </input>
        </div>
    </div>
    <div class="line line-dashed b-b line-lg pull-in">
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="input-id-1">
            Email:
        </label>
        <div class="col-sm-5">
            <input class="form-control" required="" name="email" value="<?php echo $uemail; ?>" id="input-id-1" type="email">
            </input>
        </div>
    </div>
    <div class="line line-dashed b-b line-lg pull-in">
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">
            Password:
        </label>
        <div class="col-sm-5">
            <input class="form-control" name="password" type="password">
            </input>
        </div>
    </div>
    <div class="line line-dashed b-b line-lg pull-in">
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">
            Phone:
        </label>
        <div class="col-sm-5">
            <input class="form-control" required="" name="phoneno" value="<?php echo $uphoneno; ?>" type="text">
            </input>
        </div>
    </div>
     <div class="form-group">
        <label class="col-sm-3 control-label">
            Location:
        </label>
        <div class="col-sm-5">
            <input class="form-control" required="" name="location" value="<?php echo $ulocation; ?>" type="text">
            </input>
        </div>
    </div>
    <div class="line line-dashed b-b line-lg pull-in">
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">
            Bio:
        </label>
        <div class="col-sm-5">
            <textarea name="biography" class="form-control" rows="5"><?php echo $ubiography; ?></textarea>
        </div>
    </div>
    <input type="hidden" name="mode" value="editprofile">
    <input type="hidden" name="username" value="<?php echo $uusername; ?>">

            <input type="submit" name="submit" value="EditProfile" class="btn btn-success" >
          </form>
	</div>
</div>
<div class="p">

<?php require ("includes/bottombanner.php");?>


<?php require ('includes/footer.php');?>




</div>

</body>