<?php

function fill(array $arr, $value){
    return array_fill_keys($arr, $value);
}

function mapping(array $arr, array $map){
    $output = array_map(function($entry) use ($map){
        $output = $map;
        $output[0] = $entry;
        ksort($output);
        return $output;
    }, $arr);
    return $output;
}
