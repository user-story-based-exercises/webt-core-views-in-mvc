<?php

class Hotel {
    private string $name;
    private string $description;
    private string $address;

    private string $src;

    /**
     * @param string $name
     * @param string $description
     * @param string $address
     */
    public function __construct(string $name, string $description, string $address, string $src)
    {
        $this->name = $name;
        $this->description = $description;
        $this->address = $address;
    }

    
    public function getName(): string
    {
        return $this->name;
    }


    public function getDescription(): string
    {
        return $this->description;
    }


    public function getAddress(): string
    {
        return $this->address;
    }

}