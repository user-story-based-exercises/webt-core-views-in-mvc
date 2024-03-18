<?php

require_once 'hotelContainer.php';

$hotel = new Hotel('Sonnenscheinhotel', 'Genieße einen herrlichen Aufenthalt am Neusiedlersee', 'Neusiedlersee 1, 0000');

$hotelContainer = new HotelContainer();

$hotelContainer->addDivText($hotel);

$hotelTemplate = file_get_contents("hotelpageTemplate.html");
$hotelTemplate = str_replace('{placeholder}', $hotelContainer->getHotelDivs(), $hotelTemplate);

echo $hotelTemplate;