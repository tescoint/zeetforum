<?php
require ("../includes/db.php");
    $id = $_GET['id'];

$tdata = get_threads($id);
$tid = $tdata[0]['id'];
$tcategory_id = $tdata[0]['category_id'];
$tname = $tdata[0]['name'];
$tusername = $tdata[0]['username'];
$ttitle = $tdata[0]['title'];
$tclosed = $tdata[0]['closed'];
$tfeatured = $tdata[0]['featured'];
$tstatus = $tdata[0]['status'];
?>
<div id="editprofile" class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button class="close" data-dismiss="modal" type="button">
                ×
            </button>
            <h4 class="modal-title">
                Edit <?php echo "$ttitle "; ?>'s Thread
            </h4>
        </div>
         <form class="form-horizontal" method="post" action="../includes/process.php">
        <div class="modal-body">
    <div class="form-group">
        <label class="col-sm-3 control-label">
            Title:
        </label>
        <div class="col-sm-5">
            <input class="form-control" required="" name="title" value="<?php echo $ttitle; ?>" type="text">
            </input>
        </div>
    </div>
    <div class="line line-dashed b-b line-lg pull-in">
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="input-id-1">
            Featured:
        </label>
        <div class="col-sm-5">
            <select class="form-control" required="" name="featured">
                <option <?php if($tfeatured == 'false'){ echo "selected";} ?> value="false">NO</option>
                <option <?php if($tfeatured == 'true'){ echo "selected";} ?> value="true">Yes</option>
            </select>
        </div>
    </div>
    <div class="line line-dashed b-b line-lg pull-in">
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">
            Closed:
        </label>
        <div class="col-sm-5">
            <select class="form-control" required="" name="closed">
                <option <?php if($tclosed == 'false'){ echo "selected";} ?> value="false">NO</option>
                <option <?php if($tclosed == 'true'){ echo "selected";} ?> value="true">Yes</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">
            Status:
        </label>
        <div class="col-sm-5">
            <select class="form-control" required="" name="status">
                <option <?php if($tstatus == 'inactive'){ echo "selected";} ?> value="inactive">Inactive</option>
                <option <?php if($tstatus == 'active'){ echo "selected";} ?> value="active">Active</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">
            Category:
        </label>
        <div class="col-sm-5">
            <select class="form-control" required="" name="category_id"> 
                <?php 

                $categories = get_categories();
                foreach($categories as $category){
                ?>
                <option <?php if($category['id'] == $tcategory_id){ echo "selected";} ?> value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                <?php }?>
            </select>
        </div>
    </div>
    <div class="line line-dashed b-b line-lg pull-in">
    </div>
    <input type="hidden" name="mode" value="editthread">
    <input type="hidden" name="id" value="<?php echo $tid; ?>">

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
