<?php

namespace BenTools\Psr7\RequestMatcher\Tests;

use BenTools\Psr7\RequestMatcherInterface;
use Psr\Http\Message\RequestInterface;

class ExampleOrgRequestMatcher implements RequestMatcherInterface
{
    /**
     * @inheritdoc
     */
    public function matchRequest(RequestInterface $request)
    {
        return 'example.org' === $request->getUri()->getHost();
    }
}