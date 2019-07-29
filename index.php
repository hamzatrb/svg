<!DOCTYPE html>
<html>
<head>
	<title>sVG PHP</title>
</head>
<body>

<svg width="800" height="800">

<?php 
include 'class/Point.Class.php';
include 'class/Shape.Class.php';
include 'class/Rectangle.Class.php';

$p = new Point();

//$p->moveTo(10,100);
$rec = new Rectangle();
$rec->setSize(100,200);
 
 echo $rec->draw();

//echo $p->getX();

//$shape = new Shape();

//$shape->setLocation(2,10);

//var_dump($shape);

?>


  <!--<rect x="0" y="0" width="300px" height="100px" fill= "firebrick" opacity= "1"></rect>

  <rect x="400" y="200" width="100" height="100px" fill = "deepskyblue" opacity= "1"></rect>

  <circle cx="280" cy="200" r="150" fill="gold" opacity = "0.5" />

  <ellipse cx="600" cy="180" rx="50" ry="100" fill="seagreen" />

  <polygon points=" 10 30 , 10 200 , 200 200" fill= "purple" opacity= "0.7" />-->


</svg>



</body>
</html>