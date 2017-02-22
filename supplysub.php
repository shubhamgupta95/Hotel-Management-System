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
$sid=$_POST["sid"];
$sname=$_POST["sname"];
$saddress=$_POST["saddress"];
$smn=$_POST["smn"];
$pid=$_POST["pid"];
$pname=$_POST["pname"];
$quantity=$_POST["quantity"];
$mrp=$_POST["mrp"];
$bill=$quantity*$mrp;

$sql = 'INSERT INTO supplier(sid,name,address,mob,refno,bill) '.
       'VALUES(:sid, :sname,:saddress, :smn,:refno,:bill)';

$compiled = oci_parse($conn, $sql);
oci_bind_by_name($compiled, ':sid', $sid);
oci_bind_by_name($compiled, ':sname', $sname);
oci_bind_by_name($compiled, ':saddress', $saddress);
oci_bind_by_name($compiled, ':smn', $smn);
oci_bind_by_name($compiled, ':refno', $ref);
oci_bind_by_name($compiled, 'bill', $bill);
oci_execute($compiled);

$sql1 = 'INSERT INTO products(pid,quantity,mrp,pname) '.' VALUES(:pid,:quantity,:mrp,:pname)';
$compiled1 = oci_parse($conn, $sql1);
oci_bind_by_name($compiled1, ':pid', $pid);
oci_bind_by_name($compiled1, ':quantity', $quantity);
oci_bind_by_name($compiled1, ':mrp', $mrp);
oci_bind_by_name($compiled1, ':pname', $pname);
oci_execute($compiled1);
$sql2 = 'INSERT INTO supply(sid,pid) '.' VALUES(:sid ,:pid)';
$compiled2 = oci_parse($conn, $sql2);
oci_bind_by_name($compiled2, ':sid', $sid);
oci_bind_by_name($compiled2, ':pid', $pid);
oci_execute($compiled2);
header('Location:home.php');
?>
