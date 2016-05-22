<?php

namespace Test\Yorss\Ensure;

use Yorss\Ensure\Exception as EnsureException;

/**
 * @author Kabir Baidhya
 */
class EnsureTest extends \PHPUnit_Framework_TestCase
{

    public function testEnsureJustProceedsForTruthCondition()
    {
        $condition = true;
        ensure($condition, 'Invalid value');
    }

    public function testEnsureThrowsExceptionForFalseCondition()
    {
        $condition = false;
        $this->expectException(EnsureException::class);
        ensure($condition, 'Invalid value');
    }
}
