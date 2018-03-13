<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE                                               |
// +---------------------------------------------------------------------+
// | Copyright (c) 2017 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.fr for more information about licensing.  |
// +---------------------------------------------------------------------+
// | NOTICE:  All information contained herein is, and remains the       |
// | property of Code Inc. SAS. The intellectual and technical concepts  |
// | contained herein are proprietary to Code Inc. SAS are protected by  |
// | trade secret or copyright law. Dissemination of this information or |
// | reproduction of this material  is strictly forbidden unless prior   |
// | written permission is obtained from Code Inc. SAS.                  |
// +---------------------------------------------------------------------+
//
// Author:   Joan Fabrégat <joan@codeinc.fr>
// Date:     19/12/2017
// Time:     22:15
// Project:  ObjectStorage
//
namespace CodeInc\ObjectStorage\Swift\Exceptions;
use CodeInc\ObjectStorage\Utils\Interfaces\StoreContainerExceptionInterface;
use CodeInc\ObjectStorage\Utils\Interfaces\StoreContainerInterface;
use CodeInc\ObjectStorage\Swift\SwiftContainer;
use Throwable;


/**
 * Class SwiftContainerException
 *
 * @package CodeInc\ObjectStorage\Swift\Exceptions
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
class SwiftContainerException extends SwiftException implements StoreContainerExceptionInterface {
	/**
	 * @var SwiftContainer
	 */
	private $container;

	/**
	 * SwiftContainerException constructor.
	 *
	 * @param SwiftContainer $container
	 * @param string $message
	 * @param Throwable|null $previous
	 */
	public function __construct(SwiftContainer $container, string $message, Throwable $previous = null) {
		$this->container = $container;
		parent::__construct($message, $previous);
	}

	/**
	 * @return SwiftContainer
	 */
	public function getContainer():StoreContainerInterface {
		return $this->container;
	}
}