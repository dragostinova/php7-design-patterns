<?php

namespace DesignPatterns\Behavioral\Iterator;

include_once '../../vendor/autoload.php';

$user1 = new User('John Doe', 'jdoe@gmail.com');
$user2 = new User('Robert Schwindt', 'jschwindt@gmail.com');
$user3 = new User('Angelo Cline', 'acline@gmail.com');

/**
 * The client code may or may not know about the Concrete Iterator or Collection classes.
 */
$userList = new UserList();

// Add all 3 users to the list
$userList->addUser($user1);
$userList->addUser($user2);
$userList->addUser($user3);

// Loop through all users in the list
foreach ($userList as $key => $user) {
    echo $user->getName() . ' ' . $user->getEmail() . PHP_EOL;
}

// Remove the second user from the list
$userList->removeUser($user2);

// Loop through all users in the list
foreach ($userList as $key => $user) {
    echo $user->getName() . ' ' . $user->getEmail() . PHP_EOL;
}
