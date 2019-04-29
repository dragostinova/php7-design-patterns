<?php

namespace DesignPatterns\Behavioral\Visitor;

interface RoleVisitorInterface
{
    public function visitUser(RoleInterface $role);

    public function visitGroup(RoleInterface $role);

    public function getVisited(): array;
}
