<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

class JsonHandler extends AbstractHandler
{
    public function handle(RequestInterface $request): string
    {
        if ('Json' == $request->getType()) {
            return 'Json Request';
        }

        return $this->handler->handle($request);
    }
}
