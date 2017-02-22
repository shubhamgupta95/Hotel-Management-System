<html>
<head>
<title>
Service
</title>
<link rel="stylesheet" type="text/css" href="style.css">

<style>
.form1
{
border: 3px solid #191970;
width:40%;
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
<center>
<h1>HOTEL MANAGEMENT SYSTEM</h1>
<br>
<ul>
<li><a class="ab" href="reservation.php" >Reservation</a></li>
<li><a class="ab" href="reservationhis.php">ReservationHistory</a></li>
<li><a class="ab"  href="employee.php">Employee</a></li>
<li><a class="ab"  href="employeed.php">EmployeeDetails</a></li>
<li><a class="ab"  href="supply.php">Supply</a></li>
<li><a  class="ab" href="productd.php">ProductsView</a></li>
<li><a class="ab"  href="service.php">Service</a></li>
<li><a  class="ab" href="tariff.php">Tariff</a></li>
</ul>
<ul>
<li ><a class="ab" href="#mb1">Maintained By</a></li>
<li ><a class="ab" href="#mb">Managed By</a></li>
<li ><a class="ab" href="#rs">Room Service</a></li>
</ul>
</center>
<center id="mb1" class="form1">
<form action="mb1.php" method="POST">
<h2>Maintained By</h2>
<input type="text" name="rno" placeholder="Room Number "/><br>
<input type="text" name="eid" placeholder="Employee ID"/ ><br>
<input type="Submit" value="Submit"/>
</form>
</center>
<br><br>
<center id="mb" class="form1">
<form action="mb.php" method="POST">
<h2>Managed By</h2>
<input type="text" name="cid" placeholder="Customer ID"/><br>
<input type="text" name="eid" placeholder="Employee ID"/ ><br>
<input type="Submit" value="Submit"/>
</form>
</center>
<br><br>
<center id="rs" class="form1">
<form action="rs.php" method="POST">
<h2>Room Service</h2>
<input type="text" name="rno" placeholder="Room Number "/><br>
<input type="text" name="pid" placeholder="Product ID"/ ><br>
<input type="text" name="q" placeholder="Quantity"/ ><br>
<input type="Submit" value="Submit"/>
</form>
</center>
</body>
</html>