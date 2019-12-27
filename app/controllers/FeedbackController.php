<?php

namespace app\controllers;
use app\core\Controller;

class FeedbackController extends Controller
{
    public function sendAction()
    {
            if (!empty($_POST))
            {
                $url = 'https://www.google.com/recaptcha/api/siteverify';
                $key = '6Lf6xMkUAAAAAH-su2p7r9m0XNPHKstlOeHIUk7j';
                $query = $url.'?secret='.$key.'&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR'];
                $data =json_decode(file_get_contents($query));

                if (!$_POST['g-recaptcha-response']) {
                    exit('Please, fill the captcha');
                }
                if ($data->success == false) {
                    exit('Please, fill the captcha correctly');
                }
                else {
                    if (!$this->model->validate(['name', 'email', 'text',], $_POST)) {
                        $this->view->message('error', 'Check symbols and try again');
                    }
                    $this->model->registerFeedback($_POST);
                    $this->view->redirect('feedback/show');

                    }
            }

            $this->view->render('Send feedback page');

    }
    public function showAction() {
        $this->view->render('Show feedback page');
        $this->model->showFeedback();
    }
}