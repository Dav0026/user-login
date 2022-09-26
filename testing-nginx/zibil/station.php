<?php
require 'car.php';

class Station
{
    public $fuelTypes;

    public function __construct($fuelTypes)
    {
        $this->fuelTypes=$fuelTypes;
    }
//    public function fuelPrice (Benzin $benzin)
//    {
    public  $benzinCost='cost of 1l 500 AMD';
    public  $diselCost='cost of 1l 700 AMD';
    public  $lpgCost='cost of 1l 200 AMD';
    public  $cngCost='cost of 1kg 350 AMD';
    public  $energiCost='cost of 1kw 45 AMD';
//    }

    public function fill(Car $car)
    {
        var_dump($car);

        foreach ($car->used_fuel as $carFuel)
        {
            if (in_array($carFuel,$this->fuelTypes)) {
//                var_dump($car);
                var_dump($carFuel);

                switch (in_array($carFuel,$this->fuelTypes)){
                    case 'benzin';
//                    var_dump($this->benzinCost);
                        echo $this->benzinCost.'<br>';
                    break;
                    case 'disel';
                        echo $carFuel.'--'.$this->diselCost . '<br>';
                    break;
                    case 'electrical';
                        echo $carFuel.'   '.$this->energiCost.'<br>';
                    break;
                    case 'lpg';
                        echo $carFuel.'   '.$this->energiCost.'<br>';
                }

//                if (in_array($carFuel=='benzin',$this->fuelTypes)){
//                    echo $carFuel.'   '. $this->benzinCost.'<br>';
//                }
//                if (in_array($carFuel=='disel',$this->fuelTypes)) {
//                    echo $carFuel.'   '.$this->diselCost . '<br>';
//                }
//                if (in_array($carFuel=='electrical',$this->fuelTypes)){
//                    echo $carFuel.'   '.$this->energiCost.'<br>';
//                }
//                if (in_array($carFuel==$this->lpgCost,$this->fuelTypes)){
//                    echo $carFuel.'   '.$this->energiCost.'<br>';
//                }
            }else var_dump($carFuel.'   '.'out of stock');
        }
    }
}

$fuelTipes=['electrical'=>true,'benzin'=>true,'disel'=>true,'lpg'=>true];

$gasStation=new Station(['cng','lpg']);
$flesh=new Station(['disel','benzin']);
$teslaStation=new Station(['electrical']);

//$flesh->fill($vaz);
//$flesh->fill($ford);
//$gasStation->fill($tesla);
//$teslaStation->fill($tesla);
//$flesh->fill($yaguar);

//$flesh->fill( $this->vaz);
//$flesh->fill( $this->ford);
//$gasStation->fill($this->tesla);
//$teslaStation->fill($this->tesla);
//$flesh->fill($this->yaguar);


