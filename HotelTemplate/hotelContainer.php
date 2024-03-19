<?php

require_once 'Hotel.php';
class hotelContainer
{
    private string $hotelDivs = "";

    public function getHotelDivs(): string
    {
        return $this->hotelDivs;
    }
    function addDivText(Hotel $hotel): void
    {
        $this->hotelDivs .= <<<EOD
            <div class="hotel">
                <h2>{$hotel->getName()}</h2>
                <p>{$hotel->getDescription()}</p>
                <p>{$hotel->getAddress()}</p>
            </div>
        EOD;
    }


}