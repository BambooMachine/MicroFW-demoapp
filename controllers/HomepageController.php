<?php
namespace DemoApp\Controllers;

use MicroFW\Http\Response;
use MicroFW\Templating\Template;
use MicroFW\Controllers\TemplateController;
use MicroFW\Controllers\Controller;

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

class HelloWorldController extends TemplateController
{
    protected $templateName = 'helloWorld.html';

    public function getContext()
    {
        $context = [
            'text' => 'This is just a text for testing.',
        ];

        return $context;
    }
}

class ForbiddenMethodController extends Controller
{
    protected $allowedMethods = ['POST'];
}
