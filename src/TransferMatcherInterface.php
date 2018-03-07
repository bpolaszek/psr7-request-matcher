<?php

namespace BenTools\Psr7;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface TransferMatcherInterface
{
    /**
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @return bool
     */
    public function matchTransfer(RequestInterface $request, ResponseInterface $response);
}
