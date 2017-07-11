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