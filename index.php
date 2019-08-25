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
   var canvas = document.getElementById('bulleye');
   var ctx=canvas.getContext('2d');

   ctx.beginPath();
   ctx.arc('250','250',70,0,2*Math.PI);
   ctx.fillStyle="yellow";
   ctx.fill();
   ctx.stroke();
   ctx.closePath();

   var radius=[80,100,120,160];
   var colors=["red","blue","black",""];
   var linewidth=[25,25,25,2];

   var i;
   for(i=0;i<4;i++)
   {
   ctx.beginPath();
   ctx.arc('250','250',radius[i],0,2*Math.PI);
   ctx.strokeStyle=colors[i];
   ctx.lineWidth=linewidth[i];
   ctx.stroke();
   ctx.closePath();
    }
 </script>
</body>
</html> 
















