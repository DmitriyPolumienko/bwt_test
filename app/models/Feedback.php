<?php
namespace app\models;
use app\core\Model;
use app\lib\Db;


class Feedback extends Model{

   public function validate($input, $post)
    {
        $rules = [
            'name' => [
                'pattern' => '#^[A-Za-z0-9A-я ]{2,25}$#',
                'message' => 'Name should be 2-25 chars',
            ],
            'email' => [
                'pattern' => '#^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$#',
                'message' => 'E-mail address is incorrect',
            ],
            'text' => [
                'pattern' => '#^[A-Za-z0-9A-я :;\'$%^&*/@!.]{3,999}$#',
                'message' => 'Feedback should be 3-200 chars',
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


    public function registerFeedback($post)
    {
        $params = [
            'id'=>'',
            'name'=> $post['name'],
            'text'=> $post['text'],
            'email'=> $post['email'],
        ];
        Db::getInstance()->query('INSERT INTO feeds VALUES (:id,:name,:email,:text)',$params);
    }

    public function showFeedback()
    {
        $show = Db::getInstance()->row('SELECT name,feedback FROM feeds');
        $count = (count($show));
        for ($i=0;$i<$count;$i++)
        {
            $list = implode('</br>', $show[$i]);
            echo "<div class = \"weatherDetails\">".$list."</div>";
            echo '</br>';

        }
    }
}


