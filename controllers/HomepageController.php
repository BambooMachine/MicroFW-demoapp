<?php
namespace DemoApp\Controllers;

use MicroFW\Http\Response;
use MicroFW\Templating\Template;

function homepage($request, $args)
{
    $template = new Template('homepage.html');
    return new Response($template->render());
}

function optionsList($request, $args)
{
    return new Response('Options');
}

function test($request, $args)
{
    return new Response('Homepage');
}
