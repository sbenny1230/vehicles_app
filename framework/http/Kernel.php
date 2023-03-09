<?php

namespace SB\Framework\Http;

use FastRoute\RouteCollector;

use function FastRoute\simpleDispatcher;

class Kernel
{
    public function handle(Request $request): Response
    {
        $dispatcher = simpleDispatcher(function (RouteCollector $routeCollector) {
            $routeCollector->addRoute('GET', '/', function () {
                $content = '<h1>Hello World from the kernel using a router</h1>';

                return new Response(content: $content);
            });
        });

        dd($request);
        
        $routeInfo = $dispatcher->dispatch();

        return new Response();
    }
}

?>