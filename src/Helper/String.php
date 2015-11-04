<?php
/**
 *
 * @author DarkMukke <mukke@tbs-dev.co.uk>
 */

namespace DarkMukke\Common\Helper;

/**
 * Class String
 *
 * Class to provide support for common used string functionality
 *
 * @package DarkMukke\Common
 */
class String
{

    /**
     * Static function to test is a string starts with a substring
     *
     * @param string $haystack
     * @param string $needle
     * @return bool
     */
    public static function startsWith($haystack, $needle) {
        // search backwards starting from haystack length characters from the end
        return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
    }

    /**
     * Static function to test is a string ends with a substring
     *
     * @param string $haystack
     * @param string $needle
     * @return bool
     */
    public static function endsWith($haystack, $needle) {
        // search forward starting from end minus needle length characters
        return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
    }


}