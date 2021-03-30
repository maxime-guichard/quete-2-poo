<?php

// index.php
require_once 'Vehicule.php';

$car = new Car('green', 4, 'electric');
///echo $car->forward();
//var_dump($car);

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
//var_dump($bicycle);


$truck = new Truck('red', 3, 'fuel', 20);

$car->getColor();
/*$car->color = 'blue';*/
/*$car->getCurrentSpeed();*/
//$car->currentSpeed;
//var_dump(Car::ALLOWED_ENERGIES);



// Moving Car
echo '<br> Moving Car <br>';
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();



echo '<br>--------------------------';
// Moving Bike
echo '<br> Moving Bike <br>';
echo $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();




echo '<br>--------------------------';
// Moving Truck
echo '<br> Moving ' . $truck->getColor() . ' Truck<br>';
echo $truck->setCurrentCharge(20);
echo '<br> Le chargement actuellement est de : ' . $truck->getCurrentCharge() . '<br>';
echo $truck->setStorageCapacity(40);
echo '<br> Quand la capacité est de 40 : ' . $truck->isFull() . '<br>';
echo $truck->setStorageCapacity(20);
echo '<br> Quand capacité est de 20 : ' . $truck->isFull() . '<br>';