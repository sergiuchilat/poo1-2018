<?php


abstract class Transport
{
    public function move(){
        return 'MoVe';
    }
}

class Car extends Transport {
    private $name = 'Car';
    public function move()
    {
        return $this->name . ' ' . parent::move() . ' on road';
    }
}

class Airplane extends Transport{
    private $name = 'Airplane';
    public function move()
    {
        return $this->name . ' ' . parent::move() . ' flying';
    }
}

class Train extends Transport{
    private $name = 'Train';
    public function move()
    {
        return $this->name . ' ' . parent::move() . ' on rails';
    }
}


$train = new Train();
echo $train->move();
?><hr><?
$air = new Airplane();
echo $air->move();
?><hr><?
$car = new Car();
echo $car->move();

