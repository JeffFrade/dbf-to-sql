<?php

namespace App\Helpers;

class StringHelper
{
    public static function removeAccents($text = '')
    {
		if (!empty($text)) {
            $text = preg_replace('/(@|#|\$|ª|º|\"|\')/i', '', $text);
            $text = trim(preg_replace(array('/(á|à|ã|â|ä)/', '/(Á|À|Ã|Â|Ä)/', '/(é|è|ê|ë)/', '/(É|È|Ê|Ë)/', '/(í|ì|î|ï)/', '/(Í|Ì|Î|Ï)/', '/(ó|ò|õ|ô|ö)/', '/(Ó|Ò|Õ|Ô|Ö)/', '/(ú|ù|û|ü)/', '/(Ú|Ù|Û|Ü)/', '/(ñ)/', '/(Ñ)/', '/(ç)/', '/(Ç)/'), explode(' ', 'a A e E i I o O u U n N c C'), $text));
		}

		return $text;
    }

    public static function clearText(string $text)
    {
        if (!empty($text)) {
            $text = trim(preg_replace('/\n+/i', ' ', $text));
        }

        return $text;
    }
}
