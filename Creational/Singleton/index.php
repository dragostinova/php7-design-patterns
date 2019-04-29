<?php

namespace DesignPatterns\Creational\Singleton;

include('../../vendor/autoload.php');

// Correct way to create singleton instance
$instance = Singleton::getInstance();

// It doesn't metter how much times you will create instance, it's only one
$firstInstance = Singleton::getInstance();
$secondInstance = Singleton::getInstance();

// Direct instantiation is not allowed
try {
    $instance = new Singleton();
} catch (\Error $e) {
    echo 'ERROR! Direct instantiation is not allowed!';
}
