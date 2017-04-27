 <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <div class="box">
                        <h1>Add News</h1>

                        <form action="<?=base_url('news/insert_news')?>" method="post">
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input type="text" class="form-control" placeholder="Title" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="name">Content</label>
                                <textarea name="content" placeholder="Content" width="300px" height="200"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="password">Category</label>
                                <select name='category' id='category' >
                                     <option value=''>Pilih kategori</option>";
                                     <?php
                                        foreach ($category as $u) {
                                     ?>
                                     <option value="<?php echo $u->id_category; ?>"> <?php echo $u->nm_category; ?> </option>
                                     <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Images</label>
                                <input type="file" class="form-control" id="name" name="userfile">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i>Add</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->