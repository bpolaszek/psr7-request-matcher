<?php

namespace BenTools\Psr7\RequestMatcher\Tests;

use BenTools\Psr7\ResponseMatcherInterface;
use Psr\Http\Message\ResponseInterface;

class TeapotResponseMatcher implements ResponseMatcherInterface
{

    /**
     * @param ResponseInterface $response
     * @return bool
     */
    public function matchResponse(ResponseInterface $response)
    {
        return 418 === $response->getStatusCode();
    }
}