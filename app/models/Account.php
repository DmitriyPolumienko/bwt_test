<?php

namespace app\models;
use app\core\Model;
use app\lib\Db;

class Account extends Model{

    public function validate($input, $post)
    {
        $rules = [
            'email' => [
                'pattern' => '#^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$#',
                'message' => 'E-mail address is incorrect',
            ],
            'login' => [
                'pattern' => '#^[A-Za-z0-9]{3,15}$#',
                'message' => 'Login is incorrect (Only latin chars (Size:3-15))',
            ],
            'password' => [
                'pattern' => '#^[a-z0-9]{3,15}$#',
                'message' => 'Password is incorrect (Only latin chars (Size:5-20))',
            ],
            'name' => [
                'pattern' => '#^[A-Za-z0-9]{2,25}$#',
                'message' => 'Name should be 2-25 chars',
                ],
            'feedback' => [
                'pattern' => '#^[A-Za-z0-9]{3,250}$#',
                'message' => 'Feedback should be 3-250 chars',
                ],
        ];


        foreach ($input as $val)
        {
            if(!isset($post[$val]) or !preg_match($rules[$val]['pattern'],$post[$val]))
            {
                $this->error = $rules [$val]['message'];
                return false;
            }
        }
        return true;
    }

    public function checkEmailExists($email)
    {
        $params = [
          'email' => $email,
        ];
        if ($this->db->column('SELECT id FROM users WHERE email = :email',$params))
        {
            $this->error = 'This email is already used(acc)';
            return false;
        }
        return true;
    }


    public function checkLoginExists($login)
    {
        $params = [
            'login' => $login,
        ];
        if ($this->db->column('SELECT id FROM users WHERE login = :login',$params))
        {
            $this->error = 'This login is already used(acc)';
            return false;
        }
        return true;
    }

    public function register($post)
    {
        $params = [
            'id'=>'',
            'login'=> $post['login'],
            'email'=> $post['email'],
            'name'=> $post['name'],
            'surname'=> $post['surname'],
            'gend'=> $post['gend'],
            'password'=> password_hash($post['password'], PASSWORD_BCRYPT),
        ];
        $this->db->query('INSERT INTO users VALUES (:id, :login, :email, :name, :surname, :gend, :password)',$params);
    }

    public function checkData($login, $password) {
        $params = [
            'login' => $login,
        ];
        $hash = $this->db->column('SELECT password FROM users WHERE login = :login', $params);
        if (password_verify($password, $hash))
        {

            return true;
        }

        return false;
    }

    public function login($login) {
        $params = [
            'login' => $login,
        ];
        $data = $this->db->row('SELECT * FROM users WHERE login = :login', $params);
        $_SESSION['account'] = $data[0];
    }
}