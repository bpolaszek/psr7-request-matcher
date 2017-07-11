<?php

namespace BenTools\Psr7;

use Psr\Http\Message\RequestInterface;

interface RequestMatcherInterface
{

    /**
     * @param RequestInterface $request
     * @return bool
     */
    public function matchRequest(RequestInterface $request);
}
