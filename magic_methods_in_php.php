<?php
ini_set('display_errors', 1);
// MAGIC METHODS.. 
/*
The __toString() method allows a class to decide how it will react when it is treated like a string. For example, what echo $obj; will print. This method must return a string, as otherwise a fatal E_RECOVERABLE_ERROR level error is emitted.
*/
// Declare a simple class
class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
    }
}

$class = new TestClass('Hello');
echo $class; // if __tostring is not defined : Catchable fatal error: Object of class TestClass could not be converted to string 

// The __invoke() method is called when a script tries to call an object as a function.

class CallableClass
{
    public function __invoke($x)
    {
        var_dump($x);
    }
}
$obj = new CallableClass;
$obj(5); // int(5);

var_dump(is_callable($obj));  // https://www.w3resource.com/php/function-reference/is_callable.php

// __call() is triggered when invoking inaccessible methods in an object context.
class MethodTest
{
    public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "\n";
    }

    
}

$obj = new MethodTest;
$obj->runTest('in object context'); // when no __call method is defined: Fatal error: Call to undefined method MethodTest::runTest() 

?>
