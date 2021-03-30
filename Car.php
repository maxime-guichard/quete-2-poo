<?php

// Car.php
require_once 'Vehicule.php';

class Car extends Vehicule
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    // Do not modify the rest of the file

    private string $energy;
    private int $energyPower;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyPower;
    }

    public function setEnergyLevel(int $energyPower): void
    {
        $this->energyPower = $energyPower;
    }
}