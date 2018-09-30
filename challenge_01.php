<?php

class Bycicle {
    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg;

    function name() {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    function weight_lbs() {
        retun floatval($this->weight_kg) * 2.2046226218;
    }
}

?>