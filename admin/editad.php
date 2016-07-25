<?php

require ("../includes/db.php");
    $id = $_GET['id'];

$adata = grab_ads($id);
$aid = $adata[0]['id'];
$aposition = $adata[0]['position'];
$avalue = $adata[0]['value'];
$astatus = $adata[0]['status'];

?>
<div id="editad" class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button class="close" data-dismiss="modal" type="button">
                ×
            </button>
            <h4 class="modal-title">
                Edit <?php echo "$aposition "; ?> Ad
            </h4>
        </div>
         <form class="form-horizontal" method="post" action="../includes/process.php">
        <div class="modal-body">
    <div class="form-group">
        <label class="col-sm-3 control-label">
            HTML Content:
        </label>
        <div class="col-sm-5">
            <textarea name="value" id="editor"><?php echo $avalue; ?></textarea>
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
                <option <?php if($astatus == 'inactive'){ echo "selected";} ?> value="inactive">Inactive</option>
                <option <?php if($astatus == 'active'){ echo "selected";} ?> value="active">Active</option>
            </select>
        </div>
    </div>
    <div class="line line-dashed b-b line-lg pull-in">
    </div>
    <input type="hidden" name="mode" value="editad">
    <input type="hidden" name="id" value="<?php echo $aid; ?>">

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
