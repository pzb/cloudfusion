<?php
require_once('tarzan.class.php');

/**
 * Instantiate a new AmazonEC2 object using the settings from the config.inc.php file.
 */
$ec2 = new AmazonEC2();


/**
 * Instantiate a new AmazonEC2 object using these specific settings.
 */
$ec2 = new AmazonEC2($key, $secret_key, $account_id);


?>