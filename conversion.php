<?php

function fahrenheit_to_celsius($temp)
{
    if (gettype($temp == 'int')) {
        $celsius = 5 / 9 * ($temp - 32);
        $celsius = round($celsius, 2);
        return $celsius;
    } else {
        $message = 'Please enter an integer';
        return $message;
    }
}

function fahrenheit_to_kelvin($temp)
{
    if (gettype($temp == 'int')) {
        $kelvin = 5 / 9 * ($temp - 32) + 273;
        $kelvin = round($kelvin, 2);
        return $kelvin;
    } else {
        $message = 'Please enter an integer';
        return $message;
    }
}

function celsius_to_fahrenheit($temp)
{
    if (gettype($temp == 'int')) {
        $fahrenheit = 9 / 5 * ($temp) + 32;
        $fahrenheit = round($fahrenheit, 2);
        return $fahrenheit;
    } else {
        $message = 'Please enter an integer';
        return $message;
    }
}

function celsius_to_kelvin($temp)
{
    if (gettype($temp == 'int')) {
        $kelvin = $temp + 273;
        $kelvin = round($kelvin, 2);
        return $kelvin;
    } else {
        $message = 'Please enter an integer';
        return $message;
    }
}

function kelvin_to_fahrenheit($temp)
{
    if (gettype($temp == 'int')) {
        $fahrenheit = 9 / 5 * ($temp - 273) + 32;
        $fahrenheit = round($fahrenheit, 2);
        return $fahrenheit;
    } else {
        $message = 'Please enter an integer';
        return $message;
    }
}

function kelvin_to_celsius($temp)
{
    if (gettype($temp == 'int')) {
        $celsius = $temp - 273;
        $celsius = round($celsius, 2);
        return $celsius;
    } else {
        $message = 'Please enter an integer';
        return $message;
    }
}