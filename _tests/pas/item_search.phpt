--TEST--
AmazonPAS::item_search

--FILE--
<?php
	// Dependencies
	require_once dirname(__FILE__) . '/../../cloudfusion.class.php';

	// Search for an item
	$pas = new AmazonPAS();
	$response = $pas->item_search('skillet awake');

	// Success?
	var_dump($response->isOK());
?>

--EXPECT--
bool(true)
