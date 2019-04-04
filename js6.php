<html>
<head>
<title>java script page</title>
</head>

<body>

<div id="show"></div>
<form name="frm" >
<table>
<tr><td><input  type="radio" name="css" value="css"> css </td>
<tr><td><input  type="radio" name="css" value="html"> html</td>
<tr><td><input  type="radio" name="css" value="php"> php</td>
<tr><td><input  type="radio" name="css" value="mysql"> mysql</td>

<tr><td><input  type="submit" value="submit" onclick="text()">
<input  type="reset" value="clear"></td></tr>

</table>
</form>
<script type="text/javascript">
function text(){ 
for(i=0;i<=3;i++){           //use of radio for select
var a=document.frm.css[i];
if(a.checked){
document.write("you select<br>"+a.value);
}
}
}

</script>

</body>
</html>