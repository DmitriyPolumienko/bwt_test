<?php

return [
    //MainController
    '' =>
        [
            'controller' => 'main',
            'action' => 'index',
        ],
    //AccountController
    'account/login' =>
        [
            'controller' => 'account',
            'action' => 'login',
        ],

    'account/register' =>
        [
            'controller' => 'account',
            'action' => 'register',
        ],
    'account/logout' =>
        [
            'controller' => 'account',
            'action' => 'logout',
        ],
    //WeatherController
    'weather' =>
        [
            'controller' => 'weather',
            'action'=>'show',
        ],
    //FeedbackController
    'feedback/send' =>
        [
            'controller' => 'feedback',
            'action'=>'send',
        ],
    'feedback/show' =>
        [
            'controller' => 'feedback',
            'action'=>'show',
        ],

];