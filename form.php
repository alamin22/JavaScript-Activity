
<html>
<head>
<title>java script page</title>
</head>

<body><center>
<form name="frm">

<table style="background:#ddd;border:1px solid #ddd;padding:10px 111px">
<tr>
<td><h2  style="margin-left:39;color:blue">Fillup The Form</h2></td>
</tr>
<tr>
<td style="font-size:19;font-style:italic"><br>Sex Type:</td>
</tr>
<tr><td style="color:blue">
<input type="radio" name="sex" value="male">Male
<input type="radio" name="sex" value="female">Female</td></tr>
<tr>
<td style="font-size:19;font-style:italic"><br>Username</td>
</tr>
<tr>
<td><input style="width:297;margin-top:0px;height:27;font-size:21" type="text" name="username"></td>
</tr>

<tr>
<td style="font-size:19;font-style:italic"><br>Email</td>
</tr>
<tr>
<td><input style="width:297;margin-top:0px;height:27;font-size:21"  type="text" name="email"></td>
</tr>

<tr>
<td style="font-size:19;font-style:italic"><br>Password</td>
</tr>
<tr>
<td><input style="width:297;margin-top:0px;height:27;font-size:21" type="password" name="password"></td>
</tr>

<tr>
<td style="font-size:19;font-style:italic"><br>Phone No</td>
</tr>
<tr>
<td><input style="width:297;margin-top:0px;height:27;font-size:21"   type="text" name="phone"></td>
</tr>

<tr>
<td style="color:blue"><input  type="checkbox" name="chbox" onclick="skip()">Select for skip phone no.</td>
</tr>

<tr>
<td style="font-size:19;font-style:italic"><br>Comment</td>
</tr>
<tr>
<td><textarea  style="width:297;margin-top:0px" rows="4" cols="11"  placeholder="write something......."  name="comment"></textarea></td>
</tr>

<tr>
<td> <br><br><input style="width:87;margin-top:0px;height:31;font-size:22;background:blue;color:white;border-radius:4px"  type="button" value="Submit" onclick="valid()">
<input style="margin-left:120;width:87;margin-top:0px;height:31;font-size:22;background:blue;color:white;border-radius:4px"  type="reset" value="Clear"></td>
</tr>
</table>
</form>
<script type="text/javascript">
function text(){ 
for(i=0;i<=1;i++){           //use of radio for select
var m=document.frm.sex[i];
if(m.checked){
return m.value;
}
}
}
function valid(){
var a=frm.email.value;
var b=frm.password.value;
var c=frm.username.value;
var d=frm.phone.value;
var e=document.frm.chbox;
var f=frm.comment.value;
var g=text();
if(a==""){
alert("email can not be empty");
}
else if(b==""){
alert("password can not be empty");
}
else if(c==""){
alert("username can not be empty");
}
else if(d=="" && e.checked==false){
alert("phone no can not be empty");
}
else if(f==""){
alert("please write something in comment box");
}
else if(g.checked==false){
alert("please select you gender");
}
else{
alert("gender :"+g+"\n"+"your usrname :"+c+"\n"+"your email :"+a+"\n"+"your phone no :"+d+"\n"+"your password :"+b+"\n"+"Comment :"+f);
}
}

function skip(){
if(chbox.checked){
document.frm.phone.disabled=true;
}
else{
document.frm.phone.disabled=false;
}
}

</script>
</center>
</body>
</html>