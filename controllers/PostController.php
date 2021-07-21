<?php

include_once ROOT. '/models/Post.php';

class PostController
{
    public function actionIndex()
    {
        $posts = array();
        $posts = Post::getPostsList();

        require_once(ROOT . '/views/site/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $post = Post::getPostsById($id);
        }
    }
}