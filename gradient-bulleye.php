<!DOCTYPE html>
<html>
<head>
	<title>Canvas</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
 <canvas id="bulleye" width="500" height="500"></canvas>
 <script type="text/javascript">
   var canvas=document.getElementById('bulleye');
   var ctx=canvas.getContext('2d');

   //radial x,y,r,x1,y1,r1
  var grad=ctx.createRadialGradient(150,150,0,150,150,150);

  ///add colors
  grad.addColorStop(0,'yellow');
  grad.addColorStop(0.200,'yellow');
  grad.addColorStop(0.210,'brown');
  grad.addColorStop(0.400,'brown');
  grad.addColorStop(0.410,'lightblue');
  grad.addColorStop(0.600,'lightblue');
  grad.addColorStop(0.610,'white');
  grad.addColorStop(0.800,'white');
  grad.addColorStop(0.810,'black');
  grad.addColorStop(0.990,'black');
  grad.addColorStop(1.00,'white');

   //fill color
   ctx.fillStyle=grad;
   ctx.fillRect(0,0,300,300);
 </script>
</body>
</html> 
















