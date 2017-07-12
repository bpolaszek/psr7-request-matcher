[![Latest Stable Version](https://poser.pugx.org/bentools/psr7-request-matcher/v/stable)](https://packagist.org/packages/bentools/psr7-request-matcher)
[![License](https://poser.pugx.org/bentools/psr7-request-matcher/license)](https://packagist.org/packages/bentools/psr7-request-matcher)
[![Build Status](https://img.shields.io/travis/bpolaszek/psr7-request-matcher/master.svg?style=flat-square)](https://travis-ci.org/bpolaszek/psr7-request-matcher)
[![Coverage Status](https://coveralls.io/repos/github/bpolaszek/psr7-request-matcher/badge.svg?branch=master)](https://coveralls.io/github/bpolaszek/psr7-request-matcher?branch=master)
[![Quality Score](https://img.shields.io/scrutinizer/g/bpolaszek/psr7-request-matcher.svg?style=flat-square)](https://scrutinizer-ci.com/g/bpolaszek/psr7-request-matcher)
[![Total Downloads](https://poser.pugx.org/bentools/psr7-request-matcher/downloads)](https://packagist.org/packages/bentools/psr7-request-matcher)

# PSR-7 Request Matcher

This library is just composed of an interface to implement, to check wether or not a request matches some arbitrary conditions.

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