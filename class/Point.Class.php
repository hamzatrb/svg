<?php
class Point 
{
	private $x;
	private $y;

	public function __construct()
	{
		$this->x = 0;
		$this->y = 0;
	}
	
	public function moveTo($x,$y)
	{
		$this->x = $x;
		$this->y = $y;
	}
	public function getX()
	{
		return $this->x;
	}
	public function getY()
	{
		return $this->y;
	}
}



?>