<?php declare(strict_types=1);

use SB\Framework\Http\Kernel;
use SB\Framework\Http\Request;

require_once dirname(__DIR__) . '/vendor/autoload.php';


// Get request
$request = Request::createFromGlobals();

// Perform logic using the request
$kernel = new Kernel();

// Send response
$response = $kernel->handle($request);
$response->send();

?>