<?php

namespace app\core;
use app\lib\Db;


abstract class Model
{
    public function __construct()
    {
        Db::getInstance();
    }
}