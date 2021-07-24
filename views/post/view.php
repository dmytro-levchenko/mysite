<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="main">
    <div class="container">
        <div class="row">
            <!-- Blog Post (Right Sidebar) Start -->
            <div class="col-md-12">
                <div class="col-md-12 page-body">
                    <div class="row">
                        <div class="sub-title">
                            <h2>My Blog</h2>
                            <a href="contact.html"><i class="icon-envelope"></i></a>
                        </div>

                        <div class="col-md-12 content-page">
                            <!-- Blog Post Start -->
                            <div class="col-md-12 blog-post">
                                <div class="post-title">
                                    <h1><?php echo $post['title']?></h1>
                                </div>
                                <div class="post-info">
                                    <span><?php echo $post['date']?> / by <a href="#" target="_blank"><?php echo $post['name']?></a></span>
                                </div>
                                <p><?php echo $post['descr']?></p>
                            </div>
                            <!-- Blog Post End -->
                        </div>
                    </div>
                </div>

                <?php include ROOT . '/views/layouts/footer.php'; ?>

