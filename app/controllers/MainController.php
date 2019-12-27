<?php

namespace app\controllers;
use app\core\Controller;
use app\lib\Db  ;
use GuzzleHttp\Client;
use phpQuery;
require_once 'C:\Users\Dmitriy\Documents\OSPanel\domains\Bwt\vendor\autoload.php';


class MainController extends Controller
{
    public function indexAction()
    {
        $this->view->render('Main page');
        $this->model->getWeather();

    }

}