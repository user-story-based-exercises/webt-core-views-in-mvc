<?php
$hotels = array(
    array(
        "name" => "Sonnenscheinhotel",
        "description" => "Genieße einen herrlichen Aufenthalt am Neusiedlersee",
        "address" => "Neusiedlersee 1, 0000"
    ),
    array(
        "name" => "Hotel an der grünen Neune",
        "description" => "Schönes 4 Sterne Hotel in Wien",
        "address" => "Rennweg 1, 1030 Wien"
    ),
    array(
        "name" => "Hotel an der grünen Neunee",
        "description" => "Schönes 4 Sterne Hotel in Wien",
        "address" => "Rennweg 1, 1030 Wien"
    ),
    array(
        "name" => "Hotel an der grünen Neunee",
        "description" => "Schönes 4 Sterne Hotel in Wien",
        "address" => "Rennweg 1, 1030 Wien"
    )
);

$hotelPage = <<<EOD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find your Hotel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
        }

        .hotelContainer {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .hotel {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .hotel h2 {
            margin-top: 0;
        }

        .hotel p {
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
<h1>Find your hotel: Die besten Hotels in Österreich</h1>
<div class="hotelContainer">
EOD;


foreach ($hotels as $key => $hotel) {
   $hotelPage .= <<<EOD
        <div class="hotel">
            <h2>{$hotel["name"]}</h2>
            <p>{$hotel["description"]}</p>
            <p>{$hotel["address"]}</p>
        </div>
    EOD;

}

$hotelPage .= <<<EOD
    </div>
    </body>
    </html>
EOD;


echo $hotelPage;