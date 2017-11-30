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

interface Response
{
    public function getCallStatus(): bool;

    public function getBody();

    public function setCallStatus(bool $call_status = true);

    public function setBody($body);

    public function checkStatusOK() : bool;
}
