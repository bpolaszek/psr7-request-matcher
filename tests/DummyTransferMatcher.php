<?php

namespace BenTools\Psr7\RequestMatcher\Tests;

use BenTools\Psr7\TransferMatcherInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class DummyTransferMatcher implements TransferMatcherInterface
{

    /**
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @return bool
     */
    public function matchTransfer(RequestInterface $request, ResponseInterface $response)
    {
        return $request->hasHeader('Authorization')
            && 'Welcome, human.' === (string) $response->getBody();
    }
}