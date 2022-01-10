<?php

function fahrenheit_to_celsius ($temp) {
    $celsius = 5/9 * ($temp - 32);
    return $celsius;
}

function fahrenheit_to_kelvin ($temp) {
    $kelvin = 5/9 * ($temp - 32) + 273;
    return $kelvin;
}

function celsius_to_fahrenheit ($temp) {
    $fahrenheit = 9/5 * ($temp) + 32;
    return $fahrenheit;
}

function celsius_to_kelvin ($temp) {
    $kelvin = $temp + 273;
    return $kelvin;
}

function kelvin_to_fahrenheit ($temp) {
    $fahrenheit = 9/5 * ($temp - 273) + 32;
    return $fahrenheit;
}

function kelvin_to_celsius ($temp) {
    $celsius = $temp - 273;
    return $celsius;
}

?>