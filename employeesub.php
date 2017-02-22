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
$eid=$_POST["eid"];
$ename=$_POST["ename"];
$eaddress=$_POST["eaddress"];
$emn=$_POST["emn"];
$ejt=$_POST["ejt"];
$sal=$_POST["sal"];
$sql = 'INSERT INTO employee(eid,name,jtype,address,salary,refno,mob) '.
       'VALUES(:eid, :ename,:jtype,:eaddress, :salary,:refno,:emn)';

$compiled = oci_parse($conn, $sql);

oci_bind_by_name($compiled, ':eid', $eid);
oci_bind_by_name($compiled, ':ename', $ename);
oci_bind_by_name($compiled, ':jtype', $ejt);
oci_bind_by_name($compiled, ':eaddress', $eaddress);
oci_bind_by_name($compiled, 'salary', $sal);
oci_bind_by_name($compiled, ':refno', $ref);
oci_bind_by_name($compiled, ':emn', $emn);
oci_execute($compiled);
header('Location:home.php');
?>
