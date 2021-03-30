<?php

// Camion.php
require_once 'Vehicule.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private int $storageCapacity = 0;
    private $currentCharge = 0;
    private $energy;
    private $energyPower;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }
    
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function isFull(): string
    {
        if ($this->currentCharge >= $this->storageCapacity)
        {
            $sentence = 'full';
        } else {
            $sentence = 'in filling';
        }
        return $sentence;
    }


    public function getEnergyPower(): int
    {
        return $this->energyPower;
    }

    public function setEnergyPower(int $energyPower): void
    {
        $this->energyPower = $energyPower;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getCurrentCharge(): int
    {
        return $this->currentCharge;
    }


    public function setCurrentCharge(int $currentCharge): void
    {
        $this->currentCharge = $currentCharge;
    }
}