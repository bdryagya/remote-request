<?php

/**
 * Remote Executer
 *
 * PHP version 7.1.8
 *
 * @category Library
 * @package  bakhari\remote
 * @author   "Yagya Chaudhary" <mail@bdryagya.com.np>
 * @license  http://bdryagya.com.np/license.txt MIT
 * @link     http://pages.yagya.pro.np
 */
namespace Bakhari\Remote;

use GuzzleHttp\Client as HttpClient;
use Bakhari\Remote\Response as RemoteResponse;
use Bakhari\Remote\Contracts\RequestExecuter as RequestExecuterContract;

class RequestExecuter implements RequestExecuterContract
{
    /**
     * HTTP Transport: GuzzleHttp\Client
     */
    protected $http;

    /**
     * Create a new RequestExecuter
     *
     * @param   array   $config
     * @return  void
     */

    public function __construct(array $config = [])
    {
        $this->http = new HttpClient($config);
    }

    /**
     * Execute the Request
     *
     * @return  \Bakhari\Remote\Contracts\Response
     */
    public function execute($method, $uri, $options = [])
    {

        try {
            $response = $this->http->request($method, $uri, $options);

            return new RemoteResponse($response, true);

        } catch(\Exception $e) {

            return new RemoteResponse($e, false);
        }
    }
}
