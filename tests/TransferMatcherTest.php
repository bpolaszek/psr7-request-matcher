<?php

namespace BenTools\Psr7\RequestMatcher\Tests;

use BenTools\Psr7\TransferMatcherInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class TransferMatcherTest extends TestCase
{
    /**
     * @var TransferMatcherInterface
     */
    private $transferMatcher;

    public function setUp()
    {
        $this->transferMatcher = new DummyTransferMatcher();
    }

    public function testShouldMatch()
    {
        $request = new Request('GET', 'http://foo.bar', array('Authorization' => '1337'));
        $response = new Response(200, array(), 'Welcome, human.');
        $this->assertTrue($this->transferMatcher->matchTransfer($request, $response));
    }

    public function testShouldNotMatch()
    {
        $request = new Request('GET', 'http://foo.bar');
        $response = new Response(200, array(), 'Welcome, human.');
        $this->assertFalse($this->transferMatcher->matchTransfer($request, $response));
    }

}