<?php

class User
{
    public static function register($name, $email, $password)
    {
        $db = Db::getConnection();

        $sql = 'INSERT INTO users(name, email, password) VALUE (:name, :email, :password)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();
    }
}