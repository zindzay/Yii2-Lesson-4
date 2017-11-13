<?php
return [
'id' => 'app_catalog',
'basePath' => realpath(__DIR__ . '/../'),
'components' => [
    'request' => [
        'cookieValidationKey' => '123456',
    ],
    'db' => require(__DIR__ . '/db.php'),
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
    ]
]];
