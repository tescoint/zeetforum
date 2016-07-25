<?php
require ('includes/header.php');
if (isset($_SESSION['usertype'])){
	header('location:index.php');
	}
?>

	<div class="col-lg-12 border ">

		<h2 id="logo" class="bderbtm p"><?php echo $site_title; ?></h2>
            <h3>Registration Portal</h3>
            
         <form action="includes/process.php" method="POST" data-validate="parsley">
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control"  name="name" data-required="true" placeholder="Name" type="text">
                <!-- <input type="text" id="name" class="form-control" placeholder="Enter Your Name Here" value="" required> -->
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input class="form-control"  name="username" data-required="true" placeholder="Username" type="text">
               <!--  <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username Here" required value=""> -->
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" name="password" autocomplete="off" data-required="true" id="pwd" type="password">
                <!-- <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Desired Password Here" required autocomplete="off"> -->
            </div>
            <div class="form-group">
                <label for="passwordv">Confirm Password:</label>
                <input class="form-control" data-equalto="#pwd" data-required="true" type="password">
                                                            </input>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" data-required="true" data-type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email Here">
            </div>
            <div class="form-group">
                <label for="phoneno">PhoneNo:</label>
                <input class="form-control" name="phoneno" data-required="true" data-type="phone" placeholder="(XXX) XXXX XXXX" type="text">
                <!-- <input type="text" name="phoneno" id="phone" class="form-control" placeholder="Enter Your Phone Number Here" value="" > -->
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" name="location" id="location" class="form-control" placeholder="Enter Your Location Here" value="">
            </div>
            <div>
                <label for="sex">Sex:</label>
                <input type="radio" name="sex" id="sex"  value="male" >Male
                <input type="radio" name="sex" id="sex"  value="female" >Female
            </div>
            <div class="form-group">
                <label for="bio">Personal Biography:</label>
                <textarea name="bio" id="bio" class="form-control" placeholder="Enter a Short Biography about yourself"> </textarea> 
            </div>
            <div class="form-group">
                <label for="securityq">Security Question</label>
                <select data-required="true" name="securityq" id="securityq" class="form-control">
                    <?php
                    $security = run_query("SELECT * FROM securityq where status = 1");
                    foreach($security as $security){
                        echo "<option value='$security[id]'>$security[content]</option>";
                    }
                    ?>
                </select>   
            </div>
            <div class="form-group">
                <label for="securitya">Answer To Security Question</label>
                <input type="text" name="securitya" id="securitya" placeholder="Enter Security Question Answer Here" class="form-control" data-required="true" />
            </div>
            <div class="form-group">
                <input type="hidden" name="mode" value = 'signup'>
                <input type="submit" name="submit" value="Signup" class="btn btn-success" >
            </div>
        </form>
    </div>
</div>
<?php require ("includes/bottombanner.php");?>
    

<?php require ('includes/footer.php');?>
</div>

</body>
</html>