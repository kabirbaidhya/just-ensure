<?php

namespace Yorss\Ensure;

use Yorss\Ensure\Ensure as Just;
use Yorss\Ensure\Translation\TranslatableInterface;

/**
 * @author Kabir Baidhya
 */
trait EnsurableTrait
{

    /**
     * @param bool $condition
     * @param string $message
     * @param string $exception
     */
    public function ensure($condition, $message = '', $exception = Exception::class)
    {
        // Just in case the concrete class is an implementation of TranslatableInterface,
        // translate the message and use the translated message while throwing the exception.
        if ($this instanceof TranslatableInterface) {
            $message = $this->getTranslator()->translate($message);
        }

        // Just ensure everything goes well, or else throw an Exception and halt.
        Just::ensure($condition, $message, $exception);
    }
}
