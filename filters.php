<?php

function remove_special_chars($str)
{
    $specialchars = array('/', '\'', ',', '.', '\"', ';', ':', '|', '\\', '<', '>', '?');

    return str_replace($specialchars, '', $str);
}
