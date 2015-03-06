<?php
namespace DemoApp\Controllers;

use MicroFW\Http\Response;

function homepage($request, $args)
{
    return new Response('Homepage');
}

function optionsList($request, $args)
{
    return new Response('Options');
}

function test($request, $args)
{
    return new Response('Homepage');
}
