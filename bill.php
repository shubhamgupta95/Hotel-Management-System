<html>
<head>
<title>
Bill
</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.bill
{
border: 3px solid #191970;
width:50%;
height:100%;
}
label
{
padding:15px;
margin:50px;
font-size:24px;
font-family:Tahoma;
}
table
{
border-collapse:collapse;
padding:20px;
}
td,tr
{
border:2px solid;
padding:15px;
margin:1px;
font-size:24px;
font-family:Tahoma;
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
$ref;
$array = oci_parse($conn, 'SELECT * FROM account');
oci_execute($array);
while($row=oci_fetch_array($array))
{
$ref=$row[0];
}
$month=$_POST["month"];
$day=$_POST["day"];
$year=$_POST["year"];
$month1=$_POST["month1"];
$day1=$_POST["day1"];
$year1=$_POST["year1"];
$datei = $day.'-'.$month.'-'.$year;
$dateo = $day1.'-'.$month1.'-'.$year1;
$rtype=$_POST["rtype"];
$rno=$_POST["rno"];
$cid=$_POST["cid"];
$cname= $_POST["cname"];
$caddress=$_POST["caddress"];
$mn=$_POST["mn"];
if($day1==$day)
$nod=1;
else
$nod=$day1-$day;
if($rtype=="Suite")
{
$rprice=$nod*5000;
}
else if($rtype=="Luxury")
{
$rprice=$nod*3000;
}
else
$rprice=$nod*1500;
$sql = 'INSERT INTO customer(cid,name,address,mob,refno) '.
       'VALUES(:cid, :cname, :caddress, :mn,:refno)';

$compiled = oci_parse($conn, $sql);

oci_bind_by_name($compiled, ':cid', $cid);
oci_bind_by_name($compiled, ':cname', $cname);
oci_bind_by_name($compiled, ':caddress', $caddress);
oci_bind_by_name($compiled, ':mn', $mn);
oci_bind_by_name($compiled, ':refno', $ref);
oci_execute($compiled);
$sql1 = 'INSERT INTO room(rno,sdate,edate,rtype,rprice,cid) '.
       'VALUES(:rno, :sdate, :edate, :rtype,:rprice,:cid)';

$compiled1 = oci_parse($conn, $sql1);

oci_bind_by_name($compiled1, ':rno', $rno);
oci_bind_by_name($compiled1, ':sdate', $datei);
oci_bind_by_name($compiled1, ':edate', $dateo);
oci_bind_by_name($compiled1, ':rtype', $rtype);
oci_bind_by_name($compiled1, ':rprice', $rprice);
oci_bind_by_name($compiled1, ':cid', $cid);
oci_execute($compiled1);
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
<li><a class="ab"  href="supply.php">Supply.php</a></li>
<li><a  class="ab" href="productd.php">ProductsView</a></li>
<li><a class="ab"  href="service.php">Service</a></li>
<li><a  class="ab" href="tariff.php">Tariff</a></li>
</ul>
<div class="bill">
<h1>BILL</h3>
<table>
<tr>
<td>
Bill Date
</td>
<td>
<?php echo $datei;?>
</td>
</tr>
<tr>
<td>
Name
</td>
<td>
<?php echo $_POST["cname"];?>
</td>
</tr>
<tr>
<td>
Address
</td>
<td>
<?php echo $_POST["caddress"];?>
</td>
</tr>
<tr>
<td>
Mobile Number
</td>
<td>
<?php echo $_POST["mn"];?>
</td>
</tr>
<tr>
<td>
Room Type
</td>
<td>
<?php echo $_POST["rtype"];?>
</td>
</tr>
<tr>
<td>
Room Number
</td>
<td>
<?php echo $_POST["rno"];?>
</td>
</tr>
<tr>
<td>
No Of Days Stay
</td>
<td>
<?php echo $nod;?>
</td>
</tr>
<tr>
<td>
Total Bill Amount
</td>
<td>
<?php echo $rprice;?>
</td>
</tr>
</table>
<h2>Thank You for Booking</h2>
<div>
</body>
</html>