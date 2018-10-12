<?php

require_once 'Model.php';
require_once 'View.php';

class Controller
{
    public function index()
    {
        $model = new Model;
        $view  = new View;
        $view->render($model->getText());
    }
}