<html>
<head>
<title>
ProductsDetails
</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
table
{
border-collapse:collapse;
padding:20px;
}
td,tr,th
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
<h1>Products Details</h1>
<table>
<tr>
 <th>ID</th>
 <th>Quantity</th>
 <th>MRP</th>
 <th>Products Name</th>
 
 </tr>

<?php
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'SYSTEM');
define('DB_PASSWORD', 'root');
$conn= oci_connect(DB_USERNAME, DB_PASSWORD, DB_SERVER)
or die(oci_error());
$stid = oci_parse($conn, 'SELECT * FROM products');
 oci_execute($stid); 
 while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS))
 { 
 echo "<tr>\n";    
 foreach ($row as $item)
 {   
 echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";  
 }   
 echo "</tr>\n";
 }
 echo "</table>\n";
?>
</center>
</body>
</html>