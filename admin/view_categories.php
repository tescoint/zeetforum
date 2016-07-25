<section id="content">
                        <section class="vbox">
                            <section class="scrollable padder">
                                <div class="m-b-md">
                                    <h3 class="m-b-none">
                                        Manage Categories
                                    </h3>
                                </div>
                                <section class="panel panel-default">
                                    <header class="panel-heading">
                                        View Categories
                                        <i class="fa fa-info-sign text-muted" data-placement="bottom" data-title="ajax to load the data." data-toggle="tooltip">
                                        </i>
                                        <a href="addcategory.php" data-toggle="ajaxModal" class="btn btn-bg btn-success pull-right">Add Category</a>
                                    </header>
                                    <?php flash('info'); ?>
                                    <div class="table-responsive">
                                        <table class="table table-striped m-b-none" id="list" data-ride="datatables">
                                            <thead>
                                                <tr>
                                                    <th width="20%">
                                                        Name
                                                    </th>
                                                    <th width="25%">
                                                        Slug
                                                    </th>
                                                    <th width="15%">
                                                        Type
                                                    </th>
                                                    <th width="10%">
                                                        Status
                                                    </th>
                                                    <th width="15%">
                                                        Manage Category
                                                    </th>
                                                    <th width="15%">
                                                        Edit Category
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $categories = get_categories();
                                            foreach($categories as $category){?>
                                            <tr>
                                                <td><?php echo "$category[name] "; ?></td>
                                                <td><?php echo $category['slug']; ?></td>
                                                <td><?php if($category['parentid'] == 0){echo "Main Category";}else{echo "Sub Category";} ?></td>
                                                <td><?php echo $category['status']; ?></td>
                                                <td><a class="btn btn-sm btn-info" href="<?php echo base_url(); ?>category.php?c=<?php echo $category['slug']; ?>">View Category</a>  </td>
                                                <td><a href="editcategory.php?id=<?php echo $category['id']; ?>" data-toggle="ajaxModal" class="btn btn-sm btn-default">Edit Category</a></td>
                                            </tr>
                                            <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </section>
                        </section>
                        <a class="hide nav-off-screen-block" data-target="#nav,html" data-toggle="class:nav-off-screen,open" href="#">
                        </a>
                    </section>
                </section>
            </section>
        </section>


<script>
    $(document).ready( function () {
       // $('[data-ride="datatables"]').each(function() {
    var oTable = $("#list").dataTable( {
      "bProcessing": false,
      // "sAjaxSource": "api.php",
      "sDom": "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
      "sPaginationType": "full_numbers",
      // "aoColumns": [
      //   { "mData": "engine" },
      //   { "mData": "browser" },
      //   { "mData": "platform" },
      //   { "mData": "version" },
      //   { "mData": "grade" }
      // ]
    } );
  });
    // } );


</script>