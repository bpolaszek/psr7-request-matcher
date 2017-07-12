[![Latest Stable Version](https://poser.pugx.org/bentools/psr7-request-matcher/v/stable)](https://packagist.org/packages/bentools/psr7-request-matcher)
[![License](https://poser.pugx.org/bentools/psr7-request-matcher/license)](https://packagist.org/packages/bentools/psr7-request-matcher)
[![Build Status](https://img.shields.io/travis/bpolaszek/psr7-request-matcher/master.svg?style=flat-square)](https://travis-ci.org/bpolaszek/psr7-request-matcher)
[![Total Downloads](https://poser.pugx.org/bentools/psr7-request-matcher/downloads)](https://packagist.org/packages/bentools/psr7-request-matcher)

# PSR-7 Request Matcher

This library is just composed of an interface to implement, to check wether or not a request matches some arbitrary conditions.

This interface provides no return type-hint and is therefore compatible from **PHP 5.3+**.

Example
-------

```php
namespace App\RequestMatcher;

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

Installation
------------

> composer require bentools/psr7-request-matcher

Tests
-----

> ./vendor/bin/phpunit