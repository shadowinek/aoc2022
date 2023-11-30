<?php

namespace Shadowinek\Aoc2022;

abstract class AbstractPuzzle
{
    public function __construct(protected readonly array $data)
    {
    }

    abstract public function runPart01(): mixed;
    abstract public function runPart02(): mixed;
}
