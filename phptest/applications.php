<?php

/** Example taken from http://www.webgeekly.com/tutorials/php/how-to-create-a-singleton-class-in-php/ **/

class User
{
    // Hold an instance of the class
    private static $instance;
 
    // The singleton method
    function init() {
                echo 'Base class (__CLASS__):' . __CLASS__ . PHP_EOL;
                echo 'Base class (get_class()):' . get_class($this) .PHP_EOL;
                
        }
    
}

$user1 = User::init();



?>