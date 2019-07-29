<?php 

/**
 * 
 */
class Square extends Rectangle
{
	
	
	

	public function  setSize($size,$height=0)
	// pour dire que $height=0 c'est un parametre optionelle 
	//on surcharge la methode setSize() avec un changement de parametre c'est le phenomene de polymorphisme
	{

		$this->width  = $size;
		$this->height = $size;

	}

	public function draw()
	{
		
	}

}


?>