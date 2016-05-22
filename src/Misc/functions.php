<?php

use Yorss\Ensure\Ensure as Just;

if (!function_exists('ensure')) {

    /**
     * @param bool $condition
     * @param string $message
     * @param string $exception
     */
    function ensure($condition, $message = '', $exception = \Yorss\Ensure\Exception::class)
    {
        Just::ensure($condition, $message, $exception);
    }
}
