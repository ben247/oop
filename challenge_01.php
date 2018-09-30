<?php

class Bicycle {
    var $brand;
    var $model;
    var $year;
    var $description = 'Used bicycle';
    var $weight_kg = 0.0;

    function name() {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    function weight_lbs(){
        return floatval($this->weight_kg) * 2.2046226218;
    }
}

$bicycle1 = new Bicycle;
$bicycle1->brand = 'Nukeproof';
$bicycle1->model = 'Mega';
$bicycle1->year = '2018';
$bicycle1->weight_kg = 140;

echo $bicycle1->name() . "<br />";
echo $bicycle1->weight_kg . "<br />";
echo $bicycle1->weight_lbs() . "<br />";

?>