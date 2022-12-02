<?php

namespace Shadowinek\Aoc2022;

abstract class AbstractPuzzle
{
    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    abstract public function runPart01(): int;
    abstract public function runPart02(): int;
}
