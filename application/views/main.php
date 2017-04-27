<div id="content">
            <div class="container">
                <div class="col-sm-12">

                    <ul class="breadcrumb">
                            <a href="<?php echo base_url();?>news/add_news"><CENTER><h4>Add News</h4></CENTER></a>
                    </ul>
                </div>

                <div class="col-md-12" data-animate="fadeInUp">

                    <div id="blog-homepage" class="row">
                        <?php 
                            foreach ($news as $u) {
                        ?>
                        <div class="col-sm-6">
                            <div class="post">
                                <h4><a href=""><?php echo $u->title; ?></a></h4>
                                <p class="author-category">By <?php echo $u->name; ?> in <?php echo $u->nm_category; ?>
                                </p>
                                <hr>
                                <p class="intro"><?php echo substr($u->content, 0, 200) ; ?></p>
                                <p class="read-more"><a href="<?php echo base_url(); ?>home/news_select/<?= $u->id_news; ?>" class="btn btn-primary">Continue reading</a>
                                </p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->