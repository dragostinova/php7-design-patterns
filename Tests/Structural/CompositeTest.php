<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Structural\Composite\{HtmlPage, HeaderElement, MetaElement, TitleElement, BodyElement};
use DesignPatterns\Structural\Composite\ElementInterface;
use PHPUnit\Framework\TestCase;

final class CompositeTest extends TestCase
{
    public function testCreateHtmlPage()
    {
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

        $this->assertInstanceOf(ElementInterface::class, $page);
        $this->assertInstanceOf(ElementInterface::class, $header);
        $this->assertInstanceOf(ElementInterface::class, $meta);
        $this->assertInstanceOf(ElementInterface::class, $title);
        $this->assertInstanceOf(ElementInterface::class, $body);
        $this->assertSame('<html><header><meta charset="utf-8"><title>Simple Page</title></header><body>Hello world</body></html>', $page->render());
    }
}
