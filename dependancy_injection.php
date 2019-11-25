<?php
class Driver {

	protected $vehicle;

	public function __construct(VehicleInterface $vehicle)
	{
		$this->vehicle = $vehicle;		
	}

	public function startVehicle() 
	{
		return $this->vehicle->start();
	}
}


class Bike implements VehicleInterface {

	public function start() {
		return "Bike started";
	}

}

class Car implements VehicleInterface {

	public function start() {
		return "Car started";
	}

}

interface VehicleInterface {

	public function start();

}

// bike instance
$bike = new Bike();

// car instance
$car = new Car();

// Car Driver
$driver = new Driver($car);
echo $driver->startVehicle();

echo '<br>';

// Bike Driver
$driver = new Driver($bike);
echo $driver->startVehicle();