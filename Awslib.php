<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
	/*
	 *==================================
	 * Awslib : Wrapper library for Amazon Web Service SDK
	 *   by ashiina
	 * 
	 *==================================
	 */

/*
 * path to autoloader
 */
require 'aws-sdk-php/aws-autoloader.php';
use Aws\DynamoDb\DynamoDbClient;
use Aws\DynamoDb\Enum\ComparisonOperator;
use Aws\DynamoDb\Enum\Type;

class Awslib {

	/*
	 * path to config file 
	 */
	private $configFilePath;

	/*
	 * aws instance object
	 */
	public $aws;

	function __construct() {
/*
 * path to config file
 */
		$configFilePath = 'aws-sdk-php/config.php';

		// Get aws instance
		$this->aws = Aws\Common\Aws::factory($configFilePath);
	}
}


