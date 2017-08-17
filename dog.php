<?php
abstract class Animal{
 public $name;
 protected $price; 
 abstract function cry();
}
class Dog extends Animal{
 function cry(){
 echo "汪汪...";
 }
}
$abc = new Animal();
?>
