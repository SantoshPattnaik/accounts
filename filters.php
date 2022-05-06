<?php

/**
 * Contains filter functions that are useful for various string filters, etc.
 */

/**
 * Filters the input string
 *
 * @param string  $str                  Input String
 * @param integer $removeSpecialChars   Remove special characters from the string
 * @param integer $onlyNumbers          Remove all non-digits from the string
 * @return string
 */
function string_filter($str, $removeSpecialChars = 0, $onlyNumbers = 0): string
{
    $htmlremoved = remove_htmlTags($str);

    if ($removeSpecialChars && $onlyNumbers) {
        return only_numbers(remove_special_chars($htmlremoved));
    } elseif ($removeSpecialChars) {
        return remove_special_chars($htmlremoved);
    }
}

/**
 * Remove special Characters
 *
 * @param  string $str Input String
 * @return string      String with removed special characters
 */
function remove_special_chars($str): string
{
    $regex = '/[^a-zA-Z0-9 ]/';
    return preg_replace($regex, '', $str);
}

/**
 * Remove all HTML Tags
 *
 * @param  string $str Input String with tags
 * @return string      String with removed tags
 */
function remove_htmlTags($str)
{
    return strip_tags($str);
}

/**
 * Removes non-digits
 *
 * @param  string $str Input String with numbers and other characters
 * @return string      String with not other characters than digits
 */
function only_numbers($str): string
{
    $regex = '/[^0-9 ]/';
    return preg_replace($regex, '', $str);
}
