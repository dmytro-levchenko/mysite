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
                            <div class="singup-form">
                                <h1>Регистрация на сайте</h1>
                                <form action="" method="post">
                                    <input type="text" name="name" placeholder="Name" value="<?php echo $name?>">
                                    <input type="email" name="email" placeholder="E-mail" value="<?php echo $email?>">
                                    <input type="password" name="password" placeholder="Password" value="<?php echo $password?>">
                                    <input type="submit" name="submit" value="Войти">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

