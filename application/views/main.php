<div id="content">
            <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Hot this week</h2>
                        </div>
                    </div>
                </div>                     

            </div>
            <!-- /#hot -->

            <div class="container">

                <div class="col-md-12" data-animate="fadeInUp">

                    <div id="blog-homepage" class="row">
                        <?php 
                            foreach ($news as $u) {
                        ?>
                        <div class="col-sm-6">
                            <div class="post">
                                <h4><a href=""><?php echo $u->title; ?></a></h4>
                                <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a>
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