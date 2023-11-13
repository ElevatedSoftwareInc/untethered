<?php

namespace Untethered\Domain\Objects;

interface PersistableModelInterface
{
    function persist(): void;
}
