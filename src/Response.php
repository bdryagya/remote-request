<?php

/**
 * Response
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

use Bakhari\Remote\Contracts\Response as RemoteResponseContract;

class Response implements RemoteResponseContract
{
    /**
     * Remote call execution staus
     */
    protected $call_status;

    /**
     * Response Body
     */
    protected $body;

    /**
     * Create a new Response
     *
     * @param   mixed   $body
     * @return  void
     */
    public function __construct($body, $call_status = true)
    {
        $this->call_status = $call_status;

        $this->body = $body;
    }

    public function getCallStatus() : bool
    {
        return $this->call_status;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setCallStatus(bool $call_status = true)
    {
        return $this->call_status = $call_status;
    }

    public function setBody($body)
    {
        return $this->body = $body;
    }

    public function checkStatusOK() : bool
    {
        $status_code = $this->getBody()->getStatusCode();

        return $status_code > 199 && $status_code < 300;
    }
}
