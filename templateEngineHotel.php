<?php

$hotel_data_1 = array(
    "name" => "Sonnenscheinhotel",
    "description" => "Genieße einen herrlichen Aufenthalt am Neusiedlersee",
    "address" => "Neusiedlersee 1, 0000"
);

$hotel_data_2 = array(
    "name" => "Hotel an der grünen Neune",
    "description" => "Schönes 4 Sterne Hotel in Wien",
    "address" => "Rennweg 1, 1030 Wien"
);


$hotelTemplate = fread(fopen('hotelpage.html', 'r'), filesize('hotelpage.html'));

$hotelTemplate = str_replace('hotel_name_1', $hotel_data_1['name'], $hotelTemplate);
$hotelTemplate = str_replace('hotel_description_1', $hotel_data_1['description'], $hotelTemplate);
$hotelTemplate = str_replace('hotel_address_1', $hotel_data_1['address'], $hotelTemplate);

$hotelTemplate = str_replace('hotel_name_2', $hotel_data_2['name'], $hotelTemplate);
$hotelTemplate = str_replace('hotel_description_2', $hotel_data_2['description'], $hotelTemplate);
$hotelTemplate = str_replace('hotel_address_2', $hotel_data_2['address'], $hotelTemplate);


echo $hotelTemplate;
