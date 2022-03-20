<?php

function debug($data)
{
    if (is_array($data)) {
        $output = "<script>console.log( 'Debug Array: " . implode(',', $data) . "' );</script>";
    } else {
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
    }

    echo $output;
}
