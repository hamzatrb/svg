<?php 

/**
 * 
 */
class Ellipse extends Shape
{
	
	protected $radius_x;
	protected $radius_y;

	function __construct()
	{
		
		parent::__construct();

		$this->radius_x  = 0;
		$this->radius_y  = 0;

	}

	public function setRadius($radius_x,$radius_y)
	{

		$this->radius_x  = $radius_x;
		$this->radius_y  = $radius_y;
	}

	public function draw()
	{
		
	}


}



?>