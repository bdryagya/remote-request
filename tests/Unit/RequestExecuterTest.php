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
use PHPUnit\Framework\TestCase;

use Bakhari\Remote\Response;
use Bakhari\Remote\RequestExecuter;

use GuzzleHttp\Client as HttpClient;

class RequestExecuterTest extends TestCase
{
    public function setUp()
    {

    }

    public function testCanBeInstanciated()
    {
        $request_executer = new RequestExecuter;

        $this->assertInstanceOf(RequestExecuter::class, $request_executer);
    }

    public function testCanExecuteRequest()
    {
        $request_executer = new RequestExecuter([
                                'timeout'           => 2,
                                'connect_timeout'   => 2,
                            ]);

        $response = $request_executer->execute("GET", 'http://pages.yagya.pro.np/');

        $this->assertInstanceOf(Response::class, $response);
    }
}
