<?php

namespace DesignPatterns\Behavioral\Visitor;

interface RoleInterface
{
    public function accept(RoleVisitorInterface $visitor);
}
