<?php 

interface CarService {
    public function getCost();
}

class BasicInspection implements CarService {


    public function getCost()
    {
        return 19;
    }
}

class OilChange implements CarService {

    protected $service;

     public function __construct(CarService $service) {
         $this->service = $service;
     }
     
    public function getCost()
    {
        return $this->service->getCost() + 20;
    }
}

class TireRotation implements CarService {

    protected $service;

     public function __construct(CarService $service) {
         $this->service = $service;
     }
     
    public function getCost()
    {
        return $this->service->getCost() + 15;
    }
}

echo ((new TireRotation(new OilChange((new BasicInspection()))))->getCost());