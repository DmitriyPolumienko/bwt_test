<?php

namespace app\lib;


class Db {

    protected $db;

    public function __construct()
    {
        $config = require_once 'app/config/db.php';

        $this->db =  mysqli_connect($config['host'],$config['user'],$config['password'],$config['name']);

    }

    public function query($sql)
    {
        return $this->db->query($sql);
    }


    public function row($sql)
    {
        $result = $this->query($sql);
        return $result->fetch_all();
    }


    public function column($sql)
    {
        $res = $this->query($sql);
        foreach ($res as $key=>$val)
        {
            foreach ($val as $key2=> $value)
            {
                return $value;
            }
        }

    }
}
