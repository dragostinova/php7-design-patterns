<?php

namespace DesignPatterns\Behavioral\Visitor;

class Group implements RoleInterface
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function accept(RoleVisitorInterface $visitor)
    {
        $visitor->visitGroup($this);
    }
}
