<?php

namespace Mokamoto12\ProjectEuler\Problem\Sequence;

use Mokamoto12\ProjectEuler\Problem\Sequence;
use Mokamoto12\ProjectEuler\Problem\Specification;

/**
 * Class FibonacciSequence
 * @package Mokamoto12\ProjectEuler\Problem\Sequence
 */
class FibonacciSequence implements Sequence
{
    /**
     * @var int
     */
    private $max;

    /**
     * FibonacciSequence constructor.
     *
     * @param int $max
     */
    public function __construct(int $max)
    {
        $this->max = $max;
    }

    /**
     * @param Specification $specification
     *
     * @return \Iterator
     */
    public function filteredBy(Specification $specification): \Iterator
    {
        $current = 1;
        $carry = 2;
        while (true) {
            if ($specification->isSatisfiedBy($current)) {
                yield $current;
            }

            list($current, $carry) = [$carry, $current + $carry];

            if ($current > $this->max) {
                break;
            }
        }
    }
}
