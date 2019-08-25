<!DOCTYPE html>
<html>
<head>
	<title>Canvas</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
      body,html
      {
        width: 100%;
        height: 100%;
      }
    </style>
</head>
<body>
 <canvas id="box" width="500" height="500"></canvas>
 <canvas id="box2" width="500" height="500"></canvas>
 <script type="text/javascript">
      var canvas = document.getElementById('box');
      var ctx=canvas.getContext('2d');
      ctx.beginPath();
      ctx.arc('250','250',60,0,2*Math.PI,false);
      ctx.fillStyle="yellow";
      ctx.fill();
      ctx.stroke();
      ctx.closePath();
      ctx.beginPath();
      ctx.arc('250','250',70,0,2*Math.PI,false);
      ctx.strokeStyle="red";
      ctx.lineWidth = 25;
      ctx.stroke();
      ctx.closePath();

       ctx.beginPath();
       ctx.arc('250','250',90,0,2*Math.PI,false);
      ctx.strokeStyle="blue";
      ctx.lineWidth = 25;
      ctx.stroke();
      ctx.closePath();

      ctx.beginPath();
       ctx.arc('250','250',110,0,2*Math.PI,false);
      ctx.strokeStyle="black";
      ctx.lineWidth = 25;
      ctx.stroke();
      ctx.closePath();

      ctx.beginPath();
      ctx.arc('250','250',150,0,2*Math.PI,false);
      ctx.strokeStyle="black";
      ctx.lineWidth = 2;
      ctx.stroke();
      ctx.closePath();



////second way
      var canvas2 = document.getElementById('box2');
      var ctx2=canvas2.getContext('2d');

      ctx2.beginPath();
      ctx2.arc('250','250',60,0,2*Math.PI,false);
      ctx2.fillStyle="yellow";
      ctx2.fill();
      ctx2.stroke();
      ctx2.closePath();

      var i;
      var radius=[70,90,110,150];
      const colors = ['red', 'blue', 'black',''];
      const lineWidth = [25,25,25,2];
      for(i=0;i<4;i++)
      {
      ctx2.beginPath();
      ctx2.arc('250','250',radius[i],0,2*Math.PI,false);
      ctx2.strokeStyle=colors[i];
      ctx2.lineWidth = lineWidth[i];
      ctx2.stroke();
      ctx2.closePath();
      }
    </script>
</body>
</html> 
















