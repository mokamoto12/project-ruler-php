<?php

namespace Mokamoto12\ProjectEuler\Problem\Sequence;

use Mokamoto12\ProjectEuler\Problem\Specification\Specification;

/**
 * Class RangeSequence
 * @package Mokamoto12\ProjectEuler\Problem\Sequence
 */
class RangeSequence implements Sequence
{
    /**
     * @var int[]
     */
    private $sequence;

    /**
     * RangeSequence constructor.
     *
     * @param int $below
     */
    public function __construct(int $below)
    {
        $this->sequence = range(1, $below - 1);
    }

    /**
     * @param Specification $specification
     *
     * @return int[]
     */
    public function filteredBy(Specification $specification): array
    {
        return array_values(array_filter($this->sequence, function (int $num) use ($specification) {
            return $specification->isSatisfiedBy($num);
        }));
    }
}
