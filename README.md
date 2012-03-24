console-output-spyoutput
========================

master: [![Build Status](https://secure.travis-ci.org/yuya-takeyama/console-output-spyoutput.png?branch=master)](http://travis-ci.org/yuya-takeyama/console-output-spyoutput)
develop: [![Build Status](https://secure.travis-ci.org/yuya-takeyama/console-output-spyoutput.png?branch=develop)](http://travis-ci.org/yuya-takeyama/console-output-spyoutput)

Test Spy for OutputInterface of Symfony's Console component.

What's this library for
-----------------------

Suppose you are making your application with Symfony's Console component. And you want to unit-test your application's output automatically.

Then you have to inject a SPY as OutputInterface, and ask to the SPY whether its output correct or not.

Test Spy?
---------

[Test Spy](http://xunitpatterns.com/Test%20Spy.html) is described in a book called xUnit Test Patterns.

Synopsis
--------

You can use SpyOutput as Test Spy in some unit-testing framework like PHPUnit.

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
        $this->assertEquals('Hello, World!' . PHP_EOL, $this->spy->getMessage());
    }
}
```

Author
-----

Yuya Takeyama [http://yuyat.jp/](http://yuyat.jp/)
