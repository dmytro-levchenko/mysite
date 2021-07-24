<?php

class Post
{
    /**
     * Returns single post with id
     * @param integer $id
     */
    public static function getPostsById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM posts WHERE id ='. $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $postsItem = $result->fetch();

            return $postsItem;
        }
    }

    /**
     * Returns array of posts
     */
    public static function getPostsList()
    {
        $db = Db::getConnection();

        $posts = array();

        $result = $db->query('SELECT id, title, name, descr, date FROM posts ORDER BY date');

        $i = 0;

        while($row = $result->fetch()){
            $posts[$i]['id'] = $row['id'];
            $posts[$i]['title'] = $row['title'];
            $posts[$i]['name'] = $row['name'];
            $posts[$i]['descr'] = $row['descr'];
            $posts[$i]['date'] = $row['date'];
            $i++;
        }

        return $posts;
    }

}