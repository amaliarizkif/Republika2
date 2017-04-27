<div id="content">
            <div class="container">
                <div class="col-sm-12">

                    <ul class="breadcrumb">
                            <a href="<?php echo base_url();?>news/add_news"><CENTER><h4>Add News</h4></CENTER></a>
                    </ul>
                </div>

                <div class="col-md-12" data-animate="fadeInUp">
                 <?php 
                    foreach ($news as $u) {
                ?>

                    <div id="blog-homepage">
                        <div class="col-sm-6">
                            <div class="post">
                                <h4><a href="<?php echo base_url(); ?>home/news_select/<?= $u->id_news; ?>"><?php echo $u->title; ?></a></h4>
                                <p class="author-category">By <?php echo $u->name; ?> in <?php echo $u->nm_category; ?>
                                </p>
                                <hr>
                                <p class="intro"><?php echo substr($u->content, 0, 200) ; ?></p>
                                <p class="read-more"><a href="<?php echo base_url(); ?>home/news_select/<?= $u->id_news; ?>" class="btn btn-primary">Continue reading</a>

                                    <a href="<?php echo base_url('news/delete/'.$u->id_news); ?>" class="btn btn-primary">Delete</a>
                                    <a href="<?php echo base_url('news/edit/'.$u->id_news); ?>" class="btn btn-primary">Edit</a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->