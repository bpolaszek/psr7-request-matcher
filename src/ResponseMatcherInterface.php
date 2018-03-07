<?php

namespace BenTools\Psr7;

use Psr\Http\Message\ResponseInterface;

interface ResponseMatcherInterface
{

    /**
     * @param ResponseInterface $response
     * @return bool
     */
    public function matchResponse(ResponseInterface $response);
}
