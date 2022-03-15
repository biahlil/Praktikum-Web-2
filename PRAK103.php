<?php
    $celcius = 37.841;
    $Fahrenheit = ($celcius *9/5) + 32;
    $Reamur = $celcius *4/5;
    $Kelvin = $celcius + 273.15;
    echo "Fahrenheit (F) = ".number_format($Fahrenheit,3,",") . "</br>";
    echo "Reamur (R) = ".number_format($Reamur,3,","). "</br>";
    echo "Kelvin (K) = ".number_format($Kelvin,3,","). "</br>";
?>