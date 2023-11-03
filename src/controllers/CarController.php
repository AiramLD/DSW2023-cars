<?php
namespace Airam\Cars\Controllers;

use Airam\Cars\Models\Car;

class CarController {

  public function __construct()
  {
   
    
  }

  public function list() {
    // return all cars
    $listCars = Car::getAll();
    require '../src/views/list.php';
  }

  public function show($id) {
    // return the car with this id
    $car = Car::find($id);
    if ($car) {
      require '../src/views/show.php';
    } else {
      echo "Car not found!";
    }
  }

  public function delete($id){
    // delete the car with this id
    Car:: delete($id);
    $this->list();
  }

  public function create(){
    // save a new car to database
    // $car = new Car($id, $make, $model, $year, $color);
    $car = new Car ('12345QWER','FIAT','PICANTO',2010,'black');
    Car::create($car);
    }
    
  }
