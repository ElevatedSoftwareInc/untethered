<?php

declare(strict_types=1);

namespace Untethered\Domain\Operations;

use Psr\Log\LoggerInterface;

abstract class AbstractDomainOperation
{
    protected LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
