<section id="content">
                        <section class="vbox">
                            <section class="scrollable padder">
                                <div class="m-b-md">
                                    <h3 class="m-b-none">
                                        Manage Users
                                    </h3>
                                </div>
                                <section class="panel panel-default">
                                    <header class="panel-heading">
                                        View Users
                                        <i class="fa fa-info-sign text-muted" data-placement="bottom" data-title="ajax to load the data." data-toggle="tooltip">
                                        </i>
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
                                                        Username
                                                    </th>
                                                    <th width="15%">
                                                        Usertype
                                                    </th>
                                                    <th width="10%">
                                                        Status
                                                    </th>
                                                    <th width="15%">
                                                        Manage User
                                                    </th>
                                                    <th width="15%">
                                                        Edit User
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $users = get_users();
                                            foreach($users as $user){?>
                                            <tr>
                                                <td><?php echo "$user[name] "; ?><span><?php get_icon($user['usertype']);?></span></td>
                                                <td><?php echo $user['username']; ?></td>
                                                <td><?php echo $user['usertype']; ?></td>
                                                <td><?php echo $user['status']; ?></td>
                                                <td><a class="btn btn-sm btn-info" href="index.php?page=profile&u=<?php echo $user['username']; ?>">View Profile</a>  </td>
                                                <td><a href="editprofile.php?u=<?php echo $user['username']; ?>" data-toggle="ajaxModal" class="btn btn-sm btn-default">Edit Profile</a></td>
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