
<?php 

/**
 * 
 */
class Triangle extends Shape
{
	private $points;
	
	function __construct()
	{

		$this->points = [new Point(),new Point(),new Point()];
		
	}

	public function setPoints($x1,$y1,$x2,$y2,$x3,$y3)
	{


		$this->points[0]->moveTo($x1,$y1);
		
		$this->points[1]->moveTo($x2,$y2);
		
		$this->points[2]->moveTo($x3,$y3);


	}

	public function draw()
	{
		
	}

}

?>


