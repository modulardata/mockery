<?php

/**
 * Mockery (https://docs.mockery.io/)
 *
 * @copyright https://github.com/mockery/mockery/blob/HEAD/COPYRIGHT.md
 * @license   https://github.com/mockery/mockery/blob/HEAD/LICENSE BSD 3-Clause License
 * @link      https://github.com/mockery/mockery for the canonical source repository
 */

namespace Mockery\Matcher;

class HasValue extends MatcherAbstract
{
    /**
     * Check if the actual value matches the expected.
     *
     * @param mixed $actual
     * @return bool
     */
    public function match(&$actual)
    {
        if (!is_array($actual) && !is_object($actual)) {
            return false;
        }

        return in_array($this->_expected, (array)$actual);
    }

    /**
     * Return a string representation of this Matcher
     *
     * @return string
     */
    public function __toString()
    {
        return '<HasValue[' . (string)$this->_expected . ']>';
    }
}
