<?php

$config = [
    'id' => 'yii2-task',
    'name' => 'Yii2 Task',
    'basePath' => dirname(__DIR__),
    'vendorPath' => dirname(dirname(dirname(__DIR__))) . '/vendor',
    'bootstrap' => ['task'],
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=task',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'taskManager' => [
            'class' => 'yiithings\task\TaskManager',
        ]
    ],
    'modules' => [
        'task' => [
            'class' => 'yiithings\task\Module',
        ]
    ],
];

if (!YII_ENV_TEST) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
