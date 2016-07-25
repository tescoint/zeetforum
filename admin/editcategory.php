<?php
require ("../includes/db.php");
    $id = $_GET['id'];

$cdata = get_categories($id);
$cid = $cdata[0]['id'];
$cname = $cdata[0]['name'];
$cparentid = $cdata[0]['parentid'];
$cslug = $cdata[0]['slug'];
$cstatus = $cdata[0]['status'];
?>
<div id="editprofile" class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button class="close" data-dismiss="modal" type="button">
                ×
            </button>
            <h4 class="modal-title">
                Edit <?php echo "$cname "; ?> Category
            </h4>
        </div>
         <form class="form-horizontal" method="post" action="../includes/process.php">
        <div class="modal-body">
    <div class="form-group">
        <label class="col-sm-3 control-label">
            Name:
        </label>
        <div class="col-sm-5">
            <input class="form-control" required="" name="name" value="<?php echo $cname; ?>" type="text">
            </input>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">
            Slug:
        </label>
        <div class="col-sm-5">
            <input class="form-control" required="" name="slug" value="<?php echo $cslug; ?>" type="text">
            </input>
        </div>
    </div>
    <div class="line line-dashed b-b line-lg pull-in">
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="input-id-1">
            Parent Category:
        </label>
        <div class="col-sm-5">
            <select class="form-control" required="" name="parentid">
                <option <?php if($cparentid == '0'){ echo "selected";} ?> value="0">Main</option>
                <?php 

                $categories = get_categories();
                foreach($categories as $category){
                ?>
                <option <?php if($category['id'] == $cparentid){ echo "selected";} ?> value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                <?php }?>
               
            </select>
        </div>
    </div>
    <div class="line line-dashed b-b line-lg pull-in">
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">
            Status:
        </label>
        <div class="col-sm-5">
            <select class="form-control" required="" name="status">
                <option <?php if($cstatus == 'inactive'){ echo "selected";} ?> value="inactive">Inactive</option>
                <option <?php if($cstatus == 'active'){ echo "selected";} ?> value="active">Active</option>
            </select>
        </div>
    </div>
    <div class="line line-dashed b-b line-lg pull-in">
    </div>
    <input type="hidden" name="mode" value="editcategory">
    <input type="hidden" name="id" value="<?php echo $cid; ?>">

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
