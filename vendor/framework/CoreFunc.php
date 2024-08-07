<?php

    function printTrace(array $arr) 
    {
        if (is_array($arr)) {
            foreach ($arr as $key => $value)
                {
                    if (is_array($value)) {
                        printTrace($value);
                    } else echo is_int($key)? '' : $key  . ' [' . $value . '] <br>';
                }
        } else return;
    }
    function csrf() {
        echo "<input type='text' name='X-CSRF-Token' value=" . getCSRF() . " >";
    }