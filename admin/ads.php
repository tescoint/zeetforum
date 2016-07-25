<section id="content">
                        <section class="vbox">
                            <header class="header bg-white b-b b-light">
                                <p>
                                    <strong>
                                        Ads Manager
                                    </strong>
                                    
                                </p>
                            </header>
                            <section class="scrollable wrapper">
                             <?php flash('info'); ?>
                                <div class="row">
                                <?php 
                                $ads = grab_ads();
                                foreach($ads as $ad){?>
                                    <div class="col-sm-6 portlet">
                                        <section class="panel panel-info portlet-item">
                                            <header class="panel-heading">
                                                <?php echo $ad['position']; ?>
                                                <a href="editad.php?id=<?php echo $ad['id']; ?>" data-toggle="ajaxModal" class="btn btn-sm btn-default pull-right">Edit</a>
                                            </header>
                                            <div class="list-group bg-white">
                                                <?php echo $ad['value']; ?>
                                            </div>
                                        </section>
                                        
                                    </div>
                                <?php }?>
                                </div>
                            </section>
                        </section>
                        <a class="hide nav-off-screen-block" data-target="#nav,html" data-toggle="class:nav-off-screen,open" href="#">
                        </a>
                    </section>
                </section>
            </section>
        </section>