<?php
require_once('tarzan.class.php');

/**
 * Instantiate a new TarzanHTTPRequest object, and add a couple of custom headers.
 */
$request = new TarzanHTTPRequest('http://example.com/endpoint');
$response = $request->sendRequest();

print_r($response);

?>