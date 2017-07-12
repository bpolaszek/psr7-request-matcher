<?php

namespace BenTools\Psr7\RequestMatcher\Tests;

use BenTools\Psr7\RequestMatcherInterface;
use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;

class ExampleOrgRequestMatcherTest extends TestCase
{

    /**
     * @var RequestMatcherInterface
     */
    private $requestMatcher;

    public function setUp()
    {
        $this->requestMatcher = new ExampleOrgRequestMatcher();
    }

    public function testShouldMatch()
    {
        $this->assertTrue($this->requestMatcher->matchRequest(new Request('GET', 'http://example.org/foo')));
    }

    public function testShouldNotMatch()
    {
        $this->assertFalse($this->requestMatcher->matchRequest(new Request('GET', 'http://dummy.org/foo')));
    }

}
