<?php
 function searchFor($value,$name, $array) {
    foreach ($array as $key => $val) {
        if ($val[$name] === $value) {
            return $key;
        }
    }
    return null;
 }
?>