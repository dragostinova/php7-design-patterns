<?php

namespace DesignPatterns\Behavioral\Strategy;

include '../../vendor/autoload.php';

$text = 'lorem ipsum';

// The client code picks a concrete strategy and passes it to the context.
$context = new Context(new FirstCharacterUppercase());
echo $context->formatText($text);

// Switch the strategy
$context->setStrategy(new AllCharactersUppercase());
echo $context->formatText($text);
