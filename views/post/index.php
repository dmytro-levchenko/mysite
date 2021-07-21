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

                            <?php foreach($posts as $post) :?>
                                <!-- Blog Post Start -->
                                <div class="col-md-12 blog-post">
                                    <div class="post-title">
                                        <a href="/mysite/post/<?php echo $post['id']?>"><h1><?php echo $post['title']?></h1></a>
                                    </div>
                                    <div class="post-info">
                                        <span><?php echo $post['date']?> / by <a href="#" target="_blank"><?php echo $post['name']?></a></span>
                                    </div>
                                    <p><?php echo $post['descr']?></p>
                                    <a href="/mysite/post/<?php echo $post['id']?>" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
                                </div>
                                <!-- Blog Post End -->
                            <?php endforeach;?>

                            <div class="col-md-12 text-center">
                                <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
                                <div id="post-end-message"></div>
                            </div>
                        </div>
                    </div>
                    <?php include ROOT . '/views/layouts/subscribe_form.php'; ?>
                </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

