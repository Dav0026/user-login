<?php
require 'station.php';
class Car {
    public $mark;
    public $model;
    public $yar;
    Public $used_fuel;
    public function __construct($mark,$model,$yar,$used_fuel)
    {
        $this->mark=$mark;
        $this->model=$model;
        $this->yar=$yar;
        $this->used_fuel=$used_fuel;
    }
}

$yaguar=new Car('yaguar','xtipe',1999,['benzin','lpg']);
$tesla=new Car('tesla','modelX',2021,['electrical']);
$vaz=new Car('vaz','2106',1988,['cng']);
$ford=new Car('ford','f650',2010,['disel']);

$flesh->fill($yaguar);
