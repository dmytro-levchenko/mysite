<?php

class Post
{
    /**
     * Returns single post with id
     * @param integer $id
     */
    public static function getPostsById($id)
    {

    }

    /**
     * Returns array of posts
     */
    public static function getPostsList()
    {
        $host = 'localhost';
        $dbname = 'weblion_db';
        $user = 'weblion';
        $password = 'weblion';

        $db = new PDO("mysql:host=$host;dbname=$dbname","$user", "$password");

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