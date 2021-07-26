<?php

include_once ROOT. '/models/User.php';

class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            // Валидация
            //if (!User::checkMail($email)) {
                $errors[] = 'Неверная почта';
            //}
            //if (!User::checkPassword($password)) {
                $errors[] = 'Неверный пароль';
            //}

            // Проверка на существование юзера
            //$userId = User::checkUserData($email, $password);

//            if ($userId == false) {
//                $errors[] = 'Неверный данные для входа';
//            } else {
//                // Если данные верны то запоминаем юзера в сессию
//                User::auth($userId);
//
//                header("Location: /mysite/cabinet/");
//            }
        }

        $result = User::register($name, $email, $password);

        require_once(ROOT . '/views/user/register.php');

        return true;
    }

    public function actionLogin()
    {
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            // Валидация
            if (!User::checkMail($email)) {
                $errors[] = 'Неверная почта';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Неверный пароль';
            }

            // Проверка на существование юзера
            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                $errors[] = 'Неверный данные для входа';
            } else {
                // Если данные верны то запоминаем юзера в сессию
                User::auth($userId);

                header("Location: /mysite/cabinet/");
            }
        }

        require_once(ROOT . '/views/user/login.php');

        return true;
    }

    public function actionLogout()
    {
        require_once(ROOT . '/views/user/logout.php');

        return true;
    }
}