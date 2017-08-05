<?php

abstract class Animal {
	public $name;
	abstract function move();

	final function eat() {
		return "<br/>"."gam";
	}
}

class Horse extends Animal {
	public $name; 
	
	function move() {
		return "run";	
	}

	function eat() {
		return "<br>"."nhai";
	}
}

class Slug extends Animal {
	public $name;
	function move() {
		return "<br/>"."creep";	
	}
}

$horse =  new Horse;
echo $horse->name;
echo $horse->move();
echo $horse->eat();

$slug = new Slug;
echo $slug->move();


