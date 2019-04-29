<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

class XMLHandler extends AbstractHandler
{
    public function handle(RequestInterface $request): string
    {
        if ('XML' == $request->getType()) {
            return 'XML Request';
        }

        return $this->handler->handle($request);
    }
}
