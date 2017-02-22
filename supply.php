<html>
<head>
<title>
Supply
</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.form1
{
border: 3px solid #191970;
width:40%;
height:75%;
margin-left:30%;
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
</div>
</center>
<div class="form1">
<center>
<form action="supplysub.php" method="POST">
<h2>Enter Supply Details</h2>
<input type="text" name="sid" placeholder="Supplier ID "/><br>
<input type="text" name="sname" placeholder="Name"/ ><br>
<input type="text" name="saddress"  placeholder="Address"/><br>
<input type="text" name="smn" placeholder="Mobile Number"/><br>
<input type="text" name="pid" placeholder="Product ID"/><br>
<input type="text" name="pname" placeholder="Product Name"/><br>
<input type="text" name="quantity" placeholder="Quantity"/><br>
<input type="text" name="mrp" placeholder="MRP"/><br>
<input type="Submit" value="Submit"/>
</form>
</div>
</center>
</body>
</html>