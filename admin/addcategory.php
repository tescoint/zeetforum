<?php require ("../includes/db.php");?>
<div id="editprofile" class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button class="close" data-dismiss="modal" type="button">
                ×
            </button>
            <h4 class="modal-title">
                Add Category
            </h4>
        </div>
         <form class="form-horizontal" method="post" action="../includes/process.php">
        <div class="modal-body">
    <div class="form-group">
        <label class="col-sm-3 control-label">
            Name:
        </label>
        <div class="col-sm-5">
            <input class="form-control" required="" name="name" value="" type="text">
            </input>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">
            Slug:
        </label>
        <div class="col-sm-5">
            <input class="form-control" required="" name="slug" value="" type="text">
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
                <option value="0">Main</option>
                <?php 

                $categories = get_categories();
                foreach($categories as $category){
                ?>
                <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
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
                <option value="inactive">Inactive</option>
                <option value="active">Active</option>
            </select>
        </div>
    </div>
    <div class="line line-dashed b-b line-lg pull-in">
    </div>
    <input type="hidden" name="mode" value="addcategory">

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
