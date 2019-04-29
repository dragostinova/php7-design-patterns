<?php

namespace DesignPatterns\Structural\Composite;

include '../../vendor/autoload.php';

$page = new HtmlPage();

// Set header
$header = new HeaderElement();
$meta = new MetaElement('utf-8');
$header->addElement($meta);
$title = new TitleElement('Simple Page');
$header->addElement($title);

$page->addElement($header);

// Set body
$body = new BodyElement('Hello world');
$page->addElement($body);

echo $page->render();