<?php

/**
 * Contains useful functions that can be used by other files or functions to work according to the programmer
 */


/**
 * Help in manipulation of string that are the arguments provided
 *
 * @param string  $str                 The string to be manipulated
 * @param integer $firstCharToUpper    Make the first character of each name string uppercase
 * @param integer $allCharToLower      Make all characters of string lowercase 
 * @param integer $allCharToUpper      Make all characters of string uppercase
 * @return string
 */
function stringManipulation($str, $firstCharToUpper = 0, $allCharToLower = 0, $allCharToUpper = 0): string
{
    if ($allCharToLower) {
        return strtolower($str);
    }
    if ($allCharToUpper) {
        return strtoupper($str);
    }
    if ($firstCharToUpper) {
        return firstLettertoUpper($str);
    }
}

/**
 * Makes first character of the input string uppercase as in names and surnames
 *
 * @param  string $str Input String
 * @return string
 */
function firstLettertoUpper($str): string
{
    $first_letter = strtoupper($str[0]);
    return $first_letter . strJoinerLoop($str);
}

/**
 * Joins characters from a loop to make a new required string
 *
 * @param  string $str Input String
 * @return string
 */
function strJoinerLoop($str): string
{
    $new_str = '';
    for ($i = 1; $i < strlen($str); $i++) {
        if ($str[$i] != ' ') {
            $new_str = $new_str . $str[$i];
        } else {
            $new_str = $new_str . ' ';
            $new_str = $new_str . strtoupper($str[$i + 1]);
            $i++;
        }
    }
    return $new_str;
}
