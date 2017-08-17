<?php
abstract class Animal{
 public $name;
 protected $price; 
 abstract function cry();
}
class Dog extends Animal{
 function cry(){
 echo "呜呜...";
 }
}
$abc = new Animal();
?>
