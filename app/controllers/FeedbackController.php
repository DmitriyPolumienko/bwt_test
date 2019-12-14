<?php

namespace app\controllers;
use app\core\Controller;

class FeedbackController extends Controller
{
    public function sendAction() {
        $this->view->render('Send feedback page');
    }
    public function showAction() {
        $this->view->render('Show feedback page');
    }
}