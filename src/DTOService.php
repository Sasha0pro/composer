<?php

namespace DTOService\Bundle;

use DTOService\Bundle\DependencyInjection\DTOServiceExtension;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class DTOService extends AbstractBundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }

    public function getContainerExtension(): ?DTOServiceExtension
    {
        return new DTOServiceExtension();
    }
}