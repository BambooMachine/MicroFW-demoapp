<?php
require('./controllers/HomepageController.php');

use MicroFW\Http\Response;

$urls = [
    '\/forbidden\/$' => '\DemoApp\Controllers\ForbiddenMethodController::controller',
    '\/hello-world\/$' => '\DemoApp\Controllers\HelloWorldController::controller',
    '\/test\/$' => '\DemoApp\Controllers\test',
    '\/options\/$' => '\DemoApp\Controllers\optionsList',
    '\/$' => '\DemoApp\Controllers\homepage',
];

return $urls;
