<?php

use Just\Ensure\Ensure as Just;

if (!function_exists('ensure')) {

    /**
     * @param bool $condition
     * @param string $message
     * @param string $exception
     */
    function ensure($condition, $message = '', $exception = \Just\Ensure\Exception::class)
    {
        Just::ensure($condition, $message, $exception);
    }
}
