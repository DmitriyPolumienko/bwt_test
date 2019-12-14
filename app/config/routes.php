<?php

return [
    '' =>
        [
            'controller' => 'main',
            'action' => 'index',
        ],
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

    'weather' =>
        [
            'controller' => 'weather',
            'action'=>'show',
        ],
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