<?php
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function message() {
        return "My car is a" . $this->model . "and of color" . $this->color . "!\n";
    }
}

$mycar = new Car("black", "bmw");
echo $mycar->message();

?>