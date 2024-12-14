<?php

namespace Ramiromd\TwitterGpt\Test\Unit;

use PHPUnit\Framework\TestCase;

final class HelloTest extends TestCase {

    /**
     * Summary of it_can_say_hello
     * @test
     * @testdox "It can say hello"
     * @return void
     */
    public function it_can_say_hello() {   
       $message = "Hello";
       $this->assertEquals("Hello", $message, "Message miss match."); 
    }
}