<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Behavioral\Iterator\User;
use DesignPatterns\Behavioral\Iterator\UserList;
use PHPUnit\Framework\TestCase;

final class IteratorTest extends TestCase
{
    public function testAddUser()
    {
        $user1 = new User('John Doe', 'jdoe@gmail.com');
        $user2 = new User('Robert Schwindt', 'jschwindt@gmail.com');
        $user3 = new User('Angelo Cline', 'acline@gmail.com');

        $userList = new UserList();

        // Add all 3 users to the list
        $userList->addUser($user1);
        $userList->addUser($user2);
        $userList->addUser($user3);

        // Loop through all users in the list
        foreach ($userList as $key => $user) {
            $string .= $user->getName() . ' ' . $user->getEmail() . PHP_EOL;
        }

        $expextedString = 'John Doe jdoe@gmail.com' . PHP_EOL .
        'Robert Schwindt jschwindt@gmail.com' . PHP_EOL .
        'Angelo Cline acline@gmail.com' . PHP_EOL;

        $this->assertCount(3, $userList);
        $this->assertSame($expextedString, $string);
    }

    public function testRemoveUser()
    {
        // Create user objects
        $user1 = new User('John Doe', 'jdoe@gmail.com');
        $user2 = new User('Robert Schwindt', 'jschwindt@gmail.com');
        $user3 = new User('Angelo Cline', 'acline@gmail.com');

        // Create list of users
        $userList = new UserList();

        // Add all 3 users to the list
        $userList->addUser($user1);
        $userList->addUser($user2);
        $userList->addUser($user3);

        // Remove the second user
        $userList->removeUser($user2);

        // Loop through all users in the list
        foreach ($userList as $key => $user) {
            $string .= $user->getName() . ' ' . $user->getEmail() . PHP_EOL;
        }

        $expextedString = 'John Doe jdoe@gmail.com' . PHP_EOL .
        'Angelo Cline acline@gmail.com' . PHP_EOL;

        $this->assertCount(2, $userList);
        $this->assertSame($expextedString, $string);
    }
}
