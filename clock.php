
<html>
<head>
<title>java script page</title>
</head>

<body>
<center>

<span id="y"></span>:
<span id="m"></span>:
<span id="d"></span>

<script type="text/javascript">
function clock(){
var a=new Date();
var y=a.getHours();
var m=a.getMinutes();
var d=a.getSeconds();

document.getElementById("y").innerHTML=y;
document.getElementById("m").innerHTML=m;
document.getElementById("d").innerHTML=d;
}
setInterval(clock,1000);
</script>
</center>
</body>
</html>