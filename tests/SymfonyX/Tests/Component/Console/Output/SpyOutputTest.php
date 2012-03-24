<?php
namespace SymfonyX\Tests\Component\Console\Output;

use \SymfonyX\Component\Console\Output\SpyOutput;

class SpyOutputTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->spy = new SpyOutput;
    }

    /**
     * @test
     */
    public function getMessages_should_be_an_array_of_message()
    {
        $this->spy->write('foo');
        $this->assertEquals(array('foo'), $this->spy->getMessages());
    }

    /**
     * @test
     */
    public function getMessage_should_be_concatnated_message_as_single_string()
    {
        $this->spy->write('foo');
        $this->spy->write('bar');
        $this->spy->write('baz');
        $this->assertEquals('foobarbaz', $this->spy->getMessage());
    }

    /**
     * @test
     */
    public function writeln_should_put_EOF_after_every_lines()
    {
        $this->spy->writeln('foo');
        $this->spy->writeln('bar');
        $this->spy->writeln('baz');
        $this->assertEquals(
            'foo' . PHP_EOL . 'bar' . PHP_EOL . 'baz' . PHP_EOL,
            $this->spy->getMessage()
        );
    }
}
