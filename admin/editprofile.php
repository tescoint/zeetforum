<?php
require ("../includes/db.php");
if(!isset($_GET['u'])){
    $username = $uusername;
}else{
    $username = $_GET['u'];
}
$pdata = get_details($username);
$pid = $pdata[0]['id'];
$pname = $pdata[0]['name'];
$pusername = $pdata[0]['username'];
$pbiography = $pdata[0]['biography'];
$plocation = $pdata[0]['location'];
$pphoneno = $pdata[0]['phoneno'];
$pemail  = $pdata[0]['email'];
$psex    = $pdata[0]['sex'];
$psecurityq = $pdata[0]['securityq'];
$psecuritya = $pdata[0]['securitya'];
$pusertype = $pdata[0]['usertype'];
$pstatus = $pdata[0]['status'];
$pavailable = $pdata[0]['available'];

?>
<div id="editprofile" class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button class="close" data-dismiss="modal" type="button">
                ×
            </button>
            <h4 class="modal-title">
                Edit <?php echo "$pname "; ?>'s Profile <span><?php get_icon($pusertype);?></span>
            </h4>
        </div>
         <form class="form-horizontal" method="post" action="../includes/process.php">
        <div class="modal-body">
    <div class="form-group">
        <label class="col-sm-3 control-label">
            Name:
        </label>
        <div class="col-sm-5">
            <input class="form-control" required="" name="name" value="<?php echo $pname; ?>" type="text">
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
            <input class="form-control" required="" name="email" value="<?php echo $pemail; ?>" id="input-id-1" type="email">
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
            <input class="form-control" required="" name="phoneno" value="<?php echo $pphoneno; ?>" type="text">
            </input>
        </div>
    </div>
     <div class="form-group">
        <label class="col-sm-3 control-label">
            Location:
        </label>
        <div class="col-sm-5">
            <input class="form-control" required="" name="location" value="<?php echo $plocation; ?>" type="text">
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
            <textarea name="biography" class="form-control" rows="5"><?php echo $pbiography; ?></textarea>
        </div>
    </div>
    <input type="hidden" name="mode" value="editprofile">
    <input type="hidden" name="username" value="<?php echo $pusername; ?>">

        </div>
        <div class="modal-footer">
            <a class="btn btn-default" data-dismiss="modal" href="#">
                Close
            </a>
            <button type="submit" class="btn btn-primary">
                Save
            </button>
        </div>
    </form>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
