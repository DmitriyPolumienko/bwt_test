<?php

namespace app\models;
use app\core\Model;
use GuzzleHttp\Client;

class Main extends Model{

    public function getWeather()
    {
        $client = new Client();
        $res = $client->request('GET' ,'https://sinoptik.ua/%D0%BF%D0%BE%D0%B3%D0%BE%D0%B4%D0%B0-%D0%B7%D0%B0%D0%BF%D0%BE%D1%80%D0%BE%D0%B6%D1%8C%D0%B5/10-%D0%B4%D0%BD%D0%B5%D0%B9');
        $text = $res->getBody();
        $document = \phpQuery::newDocumentHTML($text);

        $descr = $document->find("div.rSide");
        echo $descr;

    }
}

