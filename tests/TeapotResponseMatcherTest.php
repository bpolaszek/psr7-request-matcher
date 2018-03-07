<?php

namespace BenTools\Psr7\RequestMatcher\Tests;

use BenTools\Psr7\ResponseMatcherInterface;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class TeapotResponseMatcherTest extends TestCase
{
    /**
     * @var ResponseMatcherInterface
     */
    private $responseMatcher;

    public function setUp()
    {
        $this->responseMatcher = new TeapotResponseMatcher();
    }

    public function testShouldMatch()
    {
        $this->assertTrue($this->responseMatcher->matchResponse(new Response(418, array(), 'I\'m a teapot')));
    }

    public function testShouldNotMatch()
    {
        $this->assertFalse($this->responseMatcher->matchResponse(new Response(201, array(), 'I\'m a teapot')));
    }

}