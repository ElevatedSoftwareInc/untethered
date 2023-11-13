<?php

namespace Untethered\Domain\Objects;

interface DeletableModelInterface
{
    function delete(): void;
}
