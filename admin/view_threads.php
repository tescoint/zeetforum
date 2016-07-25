<section id="content">
                        <section class="vbox">
                            <section class="scrollable padder">
                                <div class="m-b-md">
                                    <h3 class="m-b-none">
                                        Manage Threads
                                    </h3>
                                </div>
                                <section class="panel panel-default">
                                    <header class="panel-heading">
                                        View Threads
                                        <i class="fa fa-info-sign text-muted" data-placement="bottom" data-title="ajax to load the data." data-toggle="tooltip">
                                        </i>
                                    </header>
                                    <?php flash('info'); ?>
                                    <div class="table-responsive">
                                        <table class="table table-striped m-b-none" id="list" data-ride="datatables">
                                            <thead>
                                                <tr>
                                                    <th width="20%">
                                                        Title
                                                    </th>
                                                    <th width="25%">
                                                        Posted By
                                                    </th>
                                                    <th width="10%">
                                                        Posted On
                                                    </th>
                                                    <th width="15%">
                                                        Featured
                                                    </th>
                                                    <th>
                                                        Closed
                                                    </th>
                                                    <th width="15%">
                                                        View Thread
                                                    </th>
                                                    <th width="15%">
                                                        Edit Thread
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $threads = get_threads();
                                            foreach($threads as $thread){?>
                                            <tr>
                                                <td><?php echo "$thread[title] "; ?></td>
                                                <td><?php echo $thread['username']; ?> - <?php echo $thread['name']; ?></td>
                                                <td><?php echo $thread['timecreated']; ?></td>
                                                <td><?php echo $thread['featured']; ?></td>
                                                <td><?php echo $thread['closed']; ?></td>
                                                <td><a class="btn btn-sm btn-info" href="<?php echo base_url(); ?>thread.php?id=<?php echo $thread['id']; ?>">View Thread</a>  </td>
                                                <td><a href="editthread.php?id=<?php echo $thread['id']; ?>" data-toggle="ajaxModal" class="btn btn-sm btn-default">Edit Thread</a></td>
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