<?php
class Animal{
    public $name = 'Animal';

    public function eat(){
        return $this->name . ' maninca';
    }

    protected function move(){
        return $this->name . ' se misca';
    }
}


class Fish extends Animal {
    public $name = 'Fish';

    function move(){
        return parent::move() . ' innoata';
    }

    function breatheUnderWater(){
        return $this->name . ' respira sub apa';
    }
}


class Snake extends Animal {
    public $name = 'Snake';

    function move(){
        return $this->name . ' se tiraste';
    }

    function bit(){
        return $this->name . ' musca';
    }
}

$fish = new Fish();
echo $fish->eat(); ?> <br><?
echo $fish->move(); ?> <br><?




/*$animal = new Animal();

echo $animal->eat();
*/?><!--
    <br>
<?/*
echo $animal->move();

*/?>
    <hr>
<?/*
$fish = new Fish();

echo $fish->eat();
*/?>
    <br>
<?/*
echo $fish->move();*/?>
    <br>
<?/*
echo $fish->breatheUnderWater();


*/?>
    <hr>
<?/*
$snake = new Snake();

echo $snake->eat();
*/?>
    <br>
<?/*
echo $snake->move();*/?>
    <br>
--><?/*
echo $snake->bit();*/