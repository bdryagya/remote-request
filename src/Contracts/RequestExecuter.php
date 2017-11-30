<?php

/**
 * <description>
 *
 * PHP version <version>
 *
 * @category <category>
 * @package  <package>
 * @author   "Yagya Chaudhary" <mail@bdryagya.com.np>
 * @license  http://bdryagya.com.np/license.txt MIT
 * @link     http://pages.yagya.pro.np
 */
namespace Bakhari\Remote\Contracts;

interface RequestExecuter
{

    public function execute($method, $uri, $options);
}
