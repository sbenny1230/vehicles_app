<?php

namespace SB\Framework\Http;

class Kernel
{
    public function handle(Request $request): Response
    {
        $content = '<h1>Hello World from the kernel</h1>';

        return new Response(content: $content);
    }
}

?>