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
require ROOT_PATH.'libraries/aws-sdk-2/aws-autoloader.php';
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
		$configFilePath = ROOT_PATH.'libraries/aws-sdk-2/config.php';

		// Get a CI instance
		$this->_ci =& get_instance();

		// Get aws instance
		$this->aws = Aws\Common\Aws::factory($configFilePath);
	}
}


