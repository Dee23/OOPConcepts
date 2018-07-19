<?php
/**
 * Created by PhpStorm.
 * User: deepikagill
 * Date: 19/07/18
 * Time: 10:53 PM
 */

class Bicycle
{
var $brand;
var $model;
var $year;
var $description = 'Used bicycle';
var $weight_kg = 0.0;

//Function to return the attributes describing the bicycle
function name() {
    return $this->brand . " " . $this->model . " " . $this->year;

}

//Function to convert weight from kg to lbs
function weight_lbs() {
    return floatval($this->weight_kg) * 2.2046226218;

}
//Function to convert weight from lbs to kg
function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218

}
}

$bi = new Bicycle;
$bi->brand = 'Atlas';
$bi->model = 'Ladybird';
$bi->year ='2001';
$bi->weight_kg = 5;

echo $bi->name();

