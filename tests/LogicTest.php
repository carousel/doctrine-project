<?php
use PHPUnit\Framework\TestCase;

interface EventInterface
{
    public function listen(&$type);
}

class User {}


class EventListener implements EventInterface
{
    public function __construct($var)
    {
        echo $var;
    }
    
    /**
     * @Listener
     */
    public function listen(&$a)
    {
        $a = 20;
    }

}

class EventListenerTwo implements EventInterface
{
    /**
    * @Listener
    */
    public function listen(&$a)
    {
        $a = 20;
    }
}

class LogicTests extends TestCase
{
    /**
    * @Instantiate event listener class
    */
    public function setUp()
    {
        $this->listener = new EventListener(User::class);
    }
    /**
    * @test 
    */
    public function letsTestStateChange()
    {
        $a = 10;
        $this->listener->listen($a);
        $this->assertEquals($a,20);
    }
}
