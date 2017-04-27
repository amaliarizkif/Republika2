 <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <div class="box">
                        <h1>Edit News</h1>

                        <form action="<?=base_url('news/update')?>" method="post" enctype="multipart/form-data">
                            <?php foreach($news as $u){ ?>
                            <input type="hidden" name="id_news" value="<?php echo $u->id_news ?>">
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input type="text" class="form-control" placeholder="Title" id="title" name="title" value="<?php echo $u->title; ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Content</label>
                                <textarea name="content" placeholder="Content" width="300px" height="200"><?php echo $u->content; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Category</label>
                                <input type="text" class="form-control" placeholder="Title" id="category" name="category" value="<?php echo $u->category; ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Images</label>
                                <input type="file" name="userfile" >
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i>Update</button>
                            </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->