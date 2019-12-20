<?php

namespace app\controllers;
use app\core\Controller;

class AccountController extends Controller
{

    public function registerAction() {

        if (!empty($_POST)) {

            if (!$this->model->validate(['email', 'login', 'password',], $_POST))
            {
                $this->view->message('error', 'Unknown data');
            }
            else if (!$this->model->checkEmailExists($_POST['email']))
            {
                $this->view->message('error', 'This email is already used');
            }
            else if (!$this->model->checkLoginExists($_POST['login']))
            {
                $this->view->message('error', 'This login is already used');
            }
            $this->model->register($_POST);
            $this->view->redirect('account/login');

        }
        $this->view->render('Регистрация');
    }

    public function loginAction() {

        if (!empty($_POST)) {

            if (!$this->model->validate(['login', 'password'], $_POST))
            {
                $this->view->message('error', 'Check symbols and try again');
            }
            elseif (!$this->model->checkData($_POST['login'],$_POST['password']))
            {
                $this->view->message('error', 'Incorrect user or password');
            }
            $this->model->login($_POST['login']);
            $this->view->redirect('.');

        }
        $this->view->render('Регистрация');
    }


}