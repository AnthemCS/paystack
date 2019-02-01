<?php
/**
 *
 * This file is part of the Xeviant Paystack package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package         Paystack
 * @version         2.0
 * @author          Olatunbosun Egberinde
 * @license         MIT Licence
 * @copyright   (c) Olatunbosun Egberinde <bosunski@gmail.com>
 * @link            https://github.com/bosunski/paystack
 *
 */

namespace Xeviant\Paystack\Tests\Api;


use PHPUnit\Framework\TestCase;
use ReflectionMethod;

abstract class ApiTestCase extends TestCase
{
	/**
	 * @param $object
	 * @param $methodName
	 *
	 * @return ReflectionMethod
	 * @throws \ReflectionException
	 */
	protected function getMethod($object, $methodName)
	{
		$method = new ReflectionMethod($object, $methodName);
		$method->setAccessible(true);

		return $method;
	}
}