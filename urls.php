<?php
require('./controllers/HomepageController.php');

use MicroFW\Http\Response;

$urls = [
    '\/test\/$' => '\DemoApp\Controllers\test',
    '\/options\/$' => '\DemoApp\Controllers\optionsList',
    '\/$' => '\DemoApp\Controllers\homepage',
];

return $urls;
