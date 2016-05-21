<?php

namespace Just\Ensure\Translation;

/**
 * @author Kabir Baidhya
 */
interface TranslatorInterface
{

    /**
     * Gets the translated message by message key.
     *
     * @param string $key The message key
     * @return string The translated message.
     */
    public function translate($key);

}
