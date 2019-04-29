<?php

namespace DesignPatterns\Behavioral\Visitor;

class User implements RoleInterface
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function accept(RoleVisitorInterface $visitor)
    {
        $visitor->visitUser($this);
    }
}
