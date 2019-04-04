<html>
<head>
<title>java script page</title>
</head>

<body >
<center>
<form name="form">
<table style="border:7px solid gray">
<tr><td><h3 style="font-style:italic;margin:0;">Scientific Calculator</h3></td></tr>
<tr>
<td><input style="width:289;height:50;font-size:33" type="text"  name="input"></td>
</tr>
<tr>
<td><input style="padding:3px 11px;font-size:13;" type="reset" value="Clear" name="">
<input style="padding:3px 11px;font-size:13;"  type="button" value="Result" onclick="calculator(25)"></td>
</tr>
<tr>
<td><input style="padding:6px 28px;font-size:19;" type="button" value="7" onclick="calculator(1)">
<input style="padding:6px 28px;font-size:19;"  type="button" value="8"  onclick="calculator(2)">
<input style="padding:6px 28px;font-size:19;"  type="button" value="9" onclick="calculator(3)">
<input style="padding:6px 28px;font-size:19;"  type="button" value="/"  onclick="calculator(21)"></td>
</tr>
<tr>
<td><input style="padding:6px 28px;font-size:19;" type="button" value="4" onclick="calculator(4)">
<input style="padding:6px 28px;font-size:19;"  type="button" value="5" onclick="calculator(5)">
<input style="padding:6px 28px;font-size:19;"  type="button" value="6" onclick="calculator(6)">
<input style="padding:6px 27px;font-size:19;"  type="button" value="*" onclick="calculator(22)"></td>
</tr>
<tr>
<td><input style="padding:6px 28px;font-size:19;" type="button" value="1" onclick="calculator(7)">
<input style="padding:6px 28px;font-size:19;"  type="button" value="2" onclick="calculator(8)">
<input style="padding:6px 28px;font-size:19;"  type="button" value="3" onclick="calculator(9)">
<input style="padding:6px 28px;font-size:19;"  type="button" value="-" onclick="calculator(23)"></td>
</tr>
<tr>
<td><input style="padding:6px 28px;font-size:19;" type="button" value="0" onclick="calculator(10)">
<input style="padding:6px 20px;font-size:19;"  type="button" value="sqr" onclick="calculator(11)">
<input style="padding:6px 17px;font-size:19;"  type="button" value="root" onclick="calculator(12)">
<input style="padding:6px 26px;font-size:19;"  type="button" value="+" onclick="calculator(24)"></td>
</tr>
<tr>
<td><input style="padding:6px 21px;font-size:19;" type="button" value="sin" onclick="calculator(16)">
<input style="padding:6px 19px;font-size:19;"  type="button" value="cos" onclick="calculator(17)">
<input style="padding:6px 20px;font-size:19;"  type="button" value="tan" onclick="calculator(18)">
<input style="padding:6px 26px;font-size:19;"  type="button" value="e" onclick="calculator(13)"></td>
</tr>
<tr>
<td><input style="padding:6px 26px;font-size:19;" type="button" value="pi" onclick="calculator(14)">
<input style="padding:6px 21px;font-size:19;"  type="button" value="log" onclick="calculator(19)">
<input style="padding:6px 23px;font-size:19;"  type="button" value="qb" onclick="calculator(15)">
<input style="padding:6px 28px;font-size:19;"  type="button" value="!" onclick="calculator(20)"></td>
</tr>

</table>
</form>

<script type="text/javascript">
function calculator(process){
with(document.form)
switch(process){
case 1:
input.value=7;
break;
case 2:
input.value=8;
break;
case 3:
input.value=9;
break;
case 4:
input.value=4;
break;
case 5:
input.value=5;
break;
case 6:
input.value=6;
break;
case 7:
input.value=1;
break;
case 8:
input.value=2;
break;
case 9:
input.value=3;
break;
case 10:
input.value=0;
break;
case 11:
input.value=(input.value)*(input.value);
break;
case 12:
input.value=Math.sqrt(input.value);
break;
case 13:
input.value=Math.E;
break;
case 14:
input.value=Math.PI;
break;
case 15:
input.value=(input.value)*(input.value)*(input.value);
break;
case 16:
input.value=Math.sin(math(input.value));
break;
case 17:
input.value=Math.cos(math(input.value));
break;
case 18:
input.value=Math.tan(math(input.value));
break;
case 19:
input.value=Math.log(input.value);
break;
case 20:
function time(n){     
if(n==0){
return 1;
}else{
return n*time(n-1);
}
}
input.value=(time(input.value));
break;
case 21:
input.value="/";
break;
case 22:
input.value="*";
break;
case 23:
input.value="-";
break;
case 24:
input.value="+";
break;

}

}
function math(a){
return a*22/7/180;
}
</script>
</center>
</body>
</html>