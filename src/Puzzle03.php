<?php

namespace Shadowinek\Aoc2022;

class Puzzle03 extends AbstractPuzzle
{
    public function runPart01(): int
    {
        $result = 0;

        foreach ($this->data as $index => $input) {
            $pockets = str_split($input, strlen($input)/2);

            $common = array_intersect(str_split($pockets[0]), str_split($pockets[1]));

            $result += $this->getPriority(reset($common));
        }

        return $result;
    }

    public function runPart02(): int
    {
        $result = 0;

        $this->data = array_reverse($this->data);

        while (!empty($this->data)) {
            $common = array_intersect(str_split(array_pop($this->data)), str_split(array_pop($this->data)), str_split(array_pop($this->data)));
            $result += $this->getPriority(reset($common));
        }

        return $result;
    }

    protected function getPriority(string $char): int
    {
        $priority = ord($char);

        if (ctype_upper($char)) {
            $priority -= 38;
        } else {
            $priority -= 96;
        }

        return $priority;
    }
}
