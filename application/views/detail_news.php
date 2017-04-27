 <?php $s=$select->result_array()[0]; { ?>
    <div id="all">

        <div id="content">
            <div class="container">
                <div class="col-sm-12" id="blog-post">


                    <div class="box">

                        <h1><?php echo $s['title']; ?></h1>
                        <p class="author-date">By <a href="#">John Slim</a> | June 20, 2013</p>
                        <div id="post-content">
                        <center>
                            <img src="<?php echo base_url(); ?>uploads/<?= $s['images']; ?>" class="img-responsive" alt="Example blog post alt">
                            <br>
                        </center>

                             <?php echo $s['content']; ?>

                        </div>
                        <!-- /#post-content -->
                    </div>
                </div>
            </div>
<?php } ?>
