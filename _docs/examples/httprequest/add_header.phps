<?php
require_once('tarzan.class.php');

/**
 * Instantiate a new TarzanHTTPRequest object, and add a couple of custom headers.
 */
$request = new TarzanHTTPRequest('http://example.com/endpoint');
$request->addHeader('x-header-one', 'my custom value');
$request->addHeader('x-header-two', 'another custom value');
$response = $request->sendRequest();

print_r($response);

?>