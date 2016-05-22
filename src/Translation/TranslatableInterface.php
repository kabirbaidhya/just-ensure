<?php

namespace Yorss\Ensure\Translation;

/**
 * @author Kabir Baidhya
 */
interface TranslatableInterface
{

    /**
     * Gets an instance of TranslatorInterface for translation.
     *
     * @return TranslatorInterface
     */
    public function getTranslator();

}
