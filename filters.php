<?php

function string_filter($str)
{
    $htmlremoved = remove_htmlTags($str);

    return remove_special_chars($htmlremoved);
}

function remove_special_chars($str)
{
    $regex = '/[^a-zA-Z0-9 ]/';
    return preg_replace($regex, '', $str);
}

function remove_htmlTags($str)
{
    return strip_tags($str);
}