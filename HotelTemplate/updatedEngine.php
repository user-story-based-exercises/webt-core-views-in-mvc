<?php

require_once 'Hotel.php';

$hotel1 = new Hotel('Sonnenscheinhotel', 'Genieße einen herrlichen Aufenthalt am Neusiedlersee', 'Neusiedlersee 1, 0000');
$hotel2 = new Hotel('Internat der Golf-HAK für Richkids', 'Im Südburgenland ist alles besser', 'Südlich vom Sieggrabener sattel 5, 0000');


$hotels = array($hotel1, $hotel2);
$engineParam = "";

foreach ($hotels as $hotel) {
    $engineParam .= file_get_contents("hotelTemplate.html");
    $engineParam = str_replace('{name}', $hotel->getName(), $engineParam);
    $engineParam = str_replace('{description}', $hotel->getDescription(), $engineParam);
    $engineParam = str_replace('{address}', $hotel->getAddress(), $engineParam);
}

$hotelTemplate = file_get_contents("hotelpageTemplate.html");
$hotelTemplate = str_replace('{placeholder}', $engineParam, $hotelTemplate);

echo $hotelTemplate;