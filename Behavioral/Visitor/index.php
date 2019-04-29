<?php

namespace DesignPatterns\Behavioral\Visitor;

include '../../vendor/autoload.php';

$visitor = new RoleVisitor();

$user = new User('John Doe');
$user->accept($visitor);

$group = new Group('Administrator');
$group->accept($visitor);

var_dump($visitor->getVisited());
