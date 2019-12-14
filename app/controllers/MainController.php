<?php

namespace app\controllers;
use app\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {   $vars =[
        'name' => 'Vasya',
        'age' => 88,
    ];
        $this->view->render('Main page', $vars);
    }
}