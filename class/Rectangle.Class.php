<?php 

/**
 * 
 */

class Rectangle extends Shape
{
	
	protected $width;
	protected $height;

	function __construct()
	{
		
		parent::__construct();

		$this->width   = 0;
		$this->height  = 0;

	}

	public function setSize($width,$height)
	{

		$this->width   =  $width;
		$this->height  =  $height;

	}
	public function draw ()
	{

		//$this->setSize(300,100);

		$rec = '<rect';

		$draws = [
					"x"=>	    $this->location->getX(),
					"y"=>	    $this->location->getY(),
					"width"=>   $this->width, 
					"height"=>	$this->height,
					"fill"=>	$this->color, 
					"opacity"=> $this->opacity
				 ];

		foreach ($draws as $key => $draw) 
		{

			$rec.= " ".$key." = ".$draw." " ;
			

		}

		$rec.= '/>';


		return $rec;




	}

	



}





?>