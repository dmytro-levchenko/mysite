<?php

include_once ROOT. '/models/Cabinet.php';

class CabinetController
{
    public function actionIndex()
    {
        require_once(ROOT . '/views/site/index.php');

        return true;
    }
}