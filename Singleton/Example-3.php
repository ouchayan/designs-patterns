<?php
interface ISingleton {
    
    public static function getInstance(): ISingleton;    
}
abstract class Singleton implements ISingleton {
    
    private static $_instances = [];
    
    final private function __construct () {}
    final private function __clone() {}
    final private function __wakeup() {}
    
    final public static function getInstance() : ISingleton {
        
        self::$_instances[static::class] = self::$_instances[static::class] ?? new static();
        return self::$_instances[static::class];
    }
    
}
class Person extends Singleton {
    
    public $age = 0;
}
class Man extends Person {
    
}
class Woman extends Person {
    
}
$person1 = Person::getInstance();
$person1->age = 1;
$man1 = Man::getInstance();
$man1->age = 2;
$woman1 = Woman::getInstance();
$woman1->age = 3;
var_dump($person1, $man1, $woman1, Person::getInstance(), Man::getInstance(), Woman::getInstance());
