<?php

namespace Yorss\Ensure;

/**
 * @author Kabir Baidhya
 */
class Ensure
{

    /**
     * @param bool $condition
     * @param string $message
     * @param string $exception
     */
    public static function ensure($condition, $message = '', $exception = Exception::class)
    {
        if (!$condition) {
            throw new $exception($message);
        }
    }
}
