<?php

return [
    
'providers' => [
    /*省略*/
    App\Providers\SlackServiceProvider::class,//追記
],
'aliases' => [
    /*省略*/
    'Slack' => App\Services\Slack\SlackFacade::class,//追記
],


'slack' => [
        'driver' => 'slack',
        'url' => env('SLACK_CHANNEL'),
    ],

];
