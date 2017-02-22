<html>
<head>
<title>
Reservation
</title>
<script src="script.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.form1
{
border: 3px solid #191970;
width:50%;
height:100%;
margin-left:25%;
}
input,select,label
{
padding:2px;
font-size:18px;
font-family:Tahoma;
margin:2px;
}
h1,h2,h3,p
{
font-family:Tahoma;
color:#191970;
}
</style>
</head>
<body>
<?php
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'SYSTEM');
define('DB_PASSWORD', 'root');
$conn= oci_connect(DB_USERNAME, DB_PASSWORD, DB_SERVER)
or die(oci_error());
$sql = 'INSERT INTO account(refno,tdate)'.'VALUES(seq_account.nextval,SYSDATE)';
$compiled = oci_parse($conn, $sql);
oci_execute($compiled);
?>
<center>
<h1>HOTEL MANAGEMENT SYSTEM</h1>
<br>
<ul>
<div>
<li><a class="ab" href="reservation.php">Reservation</a></li>
<li><a class="ab" href="reservationhis.php">ReservationHistory</a></li>
<li><a class="ab"  href="employee.php">Employee</a></li>
<li><a class="ab"  href="employeed.php">EmployeeDetails</a></li>
<li><a class="ab"  href="supply.php">Supply</a></li>
<li><a  class="ab" href="productd.php">ProductsView</a></li>
<li><a class="ab"  href="service.php">Service</a></li>
<li><a  class="ab" href="tariff.php">Tariff</a></li>
</ul>
</center>
<form action="bill.php" method="POST">
<div class="form1">
<center>
<h2>Fill Details for Room Booking</h2>

<p>Check In Date</p>
<select name="month" onChange="changeDate(this.options[selectedIndex].value);">
<option value="na">Month</option>
<option value="JAN">January</option>
<option value="FEB">February</option>
<option value="MAR">March</option>
<option value="APR">April</option>
<option value="MAY">May</option>
<option value="JUN">June</option>
<option value="JUL">July</option>
<option value="AUG">August</option>
<option value="SEP">September</option>
<option value="OCT">October</option>
<option value="NOV">November</option>
<option value="DEC">December</option>
</select>
<select name="day" id="day">
<option value="na">Day</option>
</select>
<select name="year" id="year">
<option value="na">Year</option>
</select>
<script language="JavaScript" type="text/javascript">
function changeDate(i){
var e = document.getElementById('day');
while(e.length>0)
e.remove(e.length-1);
var j=-1;
if(i=="na")
k=0;
else if(i==2)
k=28;
else if(i==4||i==6||i==9||i==11)
k=30;
else
k=31;
while(j++<k){
var s=document.createElement('option');
var e=document.getElementById('day');
if(j==0){
s.text="Day";
s.value="na";
try{
e.add(s,null);}
catch(ex){
e.add(s);}}
else{
s.text=j;
s.value=j;
try{
e.add(s,null);}
catch(ex){
e.add(s);}}}}
y = 2016;
while (y-->1990){
var s = document.createElement('option');
var e = document.getElementById('year');
s.text=y;
s.value=y;
try{
e.add(s,null);}
catch(ex){
e.add(s);}}
</script>
<p>Check Out Date</p>
<select name="month1" onChange="changeDate1(this.options[selectedIndex].value);">
<option value="na">Month</option>
<option value="JAN">January</option>
<option value="FEB">February</option>
<option value="MAR">March</option>
<option value="APR">April</option>
<option value="MAY">May</option>
<option value="JUN">June</option>
<option value="JUL">July</option>
<option value="AUG">August</option>
<option value="SEP">September</option>
<option value="OCT">October</option>
<option value="NOV">November</option>
<option value="DEC">December</option>
</select>
<select name="day1" id="day1">
<option value="na">Day</option>
</select>
<select name="year1" id="year1">
<option value="na1">Year</option>
</select>

<script language="JavaScript" type="text/javascript">
function changeDate1(i){
var e = document.getElementById('day1');
while(e.length>0)
e.remove(e.length-1);
var j=-1;
if(i=="na")
k=0;
else if(i==2)
k=28;
else if(i==4||i==6||i==9||i==11)
k=30;
else
k=31;
while(j++<k){
var s=document.createElement('option');
var e=document.getElementById('day1');
if(j==0){
s.text="Day";
s.value="na1";
try{
e.add(s,null);}
catch(ex){
e.add(s);}}
else{
s.text=j;
s.value=j;
try{
e.add(s,null);}
catch(ex){
e.add(s);}}}}
y = 2016;
while (y-->1990){
var s = document.createElement('option');
var e = document.getElementById('year1');
s.text=y;
s.value=y;
try{
e.add(s,null);}
catch(ex){
e.add(s);}}
</script>
<br><p>Room Types</p>
<label>
<input type="radio" name="rtype" value="Suite">Suite
<input type="radio" name="rtype" value="Luxury">Luxury
<input type="radio" name="rtype" value="Deluxe">Deluxe
</label>
<br>
<br>
<input type="text" name="rno"placeholder="Room Number" /><br><br>
<h3>Personal Details</h3>
<input type="text" name="cid" placeholder="Customer ID "/> 	<br>
<input type="text" name="cname" placeholder="Name"/ ><br>
<input type="text" name="caddress"  placeholder="Address"/><br>
<input type="text" name="mn" placeholder="Mobile Number"/><br>
<input type="Submit" value="Submit"/>
</form>
</div>
</body>
</html>