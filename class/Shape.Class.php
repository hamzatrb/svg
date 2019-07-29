<?php

abstract class Shape 
{

	protected $location;
	protected $color;
	protected $opacity;

	public function __construct()
	{
		
		$this->color   = "black";
		$this->opacity = 1;
		$this->location = new Point();

	}

	 public function setLocation($x,$y)
	 {

	 	$this->location->moveTo($x,$y); 

	 } 
	  
	 public function setColor($color) 
	 {
	 	$this->color = $color;
	 }

	 public function setOpacity($opacity)
	 {

	 	$this->opacity = $opacity;

	 }

	public function getLocation()
	{

		return $this->location;
	}

	public function getOpacity()
	{

		return $this->opacity;
	}

	public function getColor()
	{

		return $this->color;
	}

	abstract function draw();

}



?>