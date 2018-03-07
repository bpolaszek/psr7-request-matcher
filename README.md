[![Latest Stable Version](https://poser.pugx.org/bentools/psr7-request-matcher/v/stable)](https://packagist.org/packages/bentools/psr7-request-matcher)
[![License](https://poser.pugx.org/bentools/psr7-request-matcher/license)](https://packagist.org/packages/bentools/psr7-request-matcher)
[![Build Status](https://img.shields.io/travis/bpolaszek/psr7-request-matcher/master.svg?style=flat-square)](https://travis-ci.org/bpolaszek/psr7-request-matcher)
[![Total Downloads](https://poser.pugx.org/bentools/psr7-request-matcher/downloads)](https://packagist.org/packages/bentools/psr7-request-matcher)

# PSR-7 Request Matcher

This library is just composed of interfaces to implement, to check wether or not a request and/or a response match some arbitrary conditions.

These interfaces provide no return type-hint and is therefore compatible from **PHP 5.3+**.

Examples
--------

### Request matcher

```php
namespace App;

use BenTools\Psr7\RequestMatcherInterface;
use Psr\Http\Message\RequestInterface;

class ExampleOrgRequestMatcher implements RequestMatcherInterface
{
    /**
     * @inheritdoc
     */
    public function matchRequest(RequestInterface $request)
    {
        return 'www.example.org' === $request->getUri()->getHost();
    }

}
```

### Response matcher

```php
namespace App;

use BenTools\Psr7\ResponseMatcherInterface;
use Psr\Http\Message\ResponseInterface;

class TeapotResponseMatcher implements ResponseMatcherInterface
{
    /**
     * @inheritdoc
     */
    public function matchResponse(ResponseInterface $response)
    {
        return 418 === $response->getStatusCode();
    }

}
```

### Transfer matcher

```php
namespace App;

use BenTools\Psr7\TransferMatcherInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class DummyTransferMatcher implements TransferMatcherInterface
{
    /**
     * @inheritdoc
     */
    public function matchTransfer(RequestInterface $request, ResponseInterface $response)
    {
        return $request->hasHeader('Authorization')
            && 'Welcome, human.' === (string) $response->getBody();
    }

}
```

Installation
------------

> composer require bentools/psr7-request-matcher

Tests
-----

> ./vendor/bin/phpunit