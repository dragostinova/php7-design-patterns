<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Behavioral\Visitor\Group;
use DesignPatterns\Behavioral\Visitor\RoleVisitor;
use DesignPatterns\Behavioral\Visitor\User;
use PHPUnit\Framework\TestCase;

final class VisitorTest extends TestCase
{
    protected $visitor;

    protected function setUp()
    {
        $this->visitor = new RoleVisitor();
    }

    public function testUserRole()
    {

        $user = new User('John Doe');
        $user->accept($this->visitor);

        $this->assertCount(1, $this->visitor->getVisited());

        foreach ($this->visitor->getVisited() as $visitor) {
            $this->assertInstanceOf(User::class, $visitor);
        }
    }

    public function testGroupRole()
    {

        $group = new Group('Administrator');
        $group->accept($this->visitor);

        $this->assertCount(1, $this->visitor->getVisited());

        foreach ($this->visitor->getVisited() as $visitor) {
            $this->assertInstanceOf(Group::class, $visitor);
        }
    }

}
