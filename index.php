<?php

require_once 'Car.php';

$car = new Car('yellow', 4, 'super-éthanol');

//moving car

try {
    echo $car->start() . '<br>';

} catch (Exception $e) {
    echo $e->getMessage() . '<br>';

    $car->setHasParkBrake(false);
    echo $car->start() . '<br>';
    echo $car->accelerate();
    echo '<br> Vitesse actuelle de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car->brake();
    echo '<br> Vitesse actuelle de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
} finally {
    echo '<br> Ma voiture roule comme un donut';
}


