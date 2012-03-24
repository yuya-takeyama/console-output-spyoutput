console-output-spyoutput
========================

master: [![Build Status](https://secure.travis-ci.org/yuya-takeyama/console-output-spyoutput.png?branch=master)](http://travis-ci.org/yuya-takeyama/console-output-spyoutput)
develop: [![Build Status](https://secure.travis-ci.org/yuya-takeyama/console-output-spyoutput.png?branch=develop)](http://travis-ci.org/yuya-takeyama/console-output-spyoutput)

*Test Spy* for `OutputInterface` of Symfony's Console component.

What's this library for
-----------------------

Suppose you are making your application with Symfony's Console component. And you want to unit-test your application's output automatically.

Then you have to inject a *SPY* as `OutputInterface`, and ask to the *SPY* whether its output is correct or not.

This library SpyOutput acts as a *Test Spy* for `OutputInterface` of Symfony's Console component.

Test Spy?
---------

[Test Spy](http://xunitpatterns.com/Test%20Spy.html) is described in a book called _xUnit Test Patterns_.

Synopsis
--------

`SpyOutput` can be used in some unit-testing framework like PHPUnit.

```php
<?php
namespace Example\Application\Tests;

use \Example\Application;

use \SymfonyX\Component\Console\Output\SpyOutput;

class ApplicationTest extends \PHPUnit_Framework_TestCase
{
    private $app;

    private $spy;

    public function setUp()
    {
        $this->spy = new SpyOutput;
        $this->app = new Application($this->spy);
    }

    public function testAppOutputsCorrectly()
    {
        $this->app->run();
        $this->assertEquals('Hello, World!' . PHP_EOL, $this->spy->getMessage());
    }
}
```

Naming problem
--------------

Currently this library is put on SymfonyX namespace.

What should we name libraries help part of Symfony component suite?

Author
-----

Yuya Takeyama [http://yuyat.jp/](http://yuyat.jp/)
