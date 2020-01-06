<?php

namespace app\lib;
use PDO;

class Db {
    private static $instance;
    protected $db;


    private function __construct()
    {
        $config = require_once 'app/config/db.php';
        $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['name'].'', $config['user'], $config['password']);
    }

    public static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->db;
    }

    private function __clone ()
    {}

    private function __wakeup ()
    {}

    public function query($sql, $params = [])
    {

        $stmt = $this->db->prepare($sql);
        if (!empty($params)) {
            foreach ($params as $key => $val) {
                if (is_int($val)) {
                    $type = PDO::PARAM_INT;
                } else {
                    $type = PDO::PARAM_STR;
                }
                $stmt->bindValue(':'.$key, $val, $type);
            }
        }
        $stmt->execute();
        return $stmt;
    }


    public function row($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function column($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();

    }

    public function lastInsertId()
    {
        return $this->db->lastInsertId();
    }

    public function closeConnection()
    {
        $this->db = null;
    }

}
