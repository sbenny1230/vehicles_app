<?php declare(strict_types=1);

use SB\Framework\Http\Request;
use SB\Framework\Http\Response;

require_once dirname(__DIR__) . '/vendor/autoload.php';


// Get request
$request = Request::createFromGlobals();

$content = '<h1>Hello World</h1>';

// Get response
$response = new Response(content: $content, status: 200, headers: []);
$response->send();

?>