<?php

namespace DesignPatterns\Behavioral\Visitor;

class RoleVisitor implements RoleVisitorInterface
{
    /**
     * @var RoleInterface[]
     */
    protected $visited;

    public function visitUser(RoleInterface $role)
    {
        $this->visited[] = $role;
    }

    public function visitGroup(RoleInterface $role)
    {
        $this->visited[] = $role;
    }

    /**
     * @return RoleInterface[]
     */
    public function getVisited(): array
    {
        return $this->visited;
    }
}
