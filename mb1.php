<?php
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'SYSTEM');
define('DB_PASSWORD', 'root');
$conn= oci_connect(DB_USERNAME, DB_PASSWORD, DB_SERVER)
or die(oci_error());

$eid=$_POST["eid"];
$rno=$_POST["rno"];
$sql = 'INSERT INTO maintainedby(rno,eid) '.'VALUES(:rno,:eid)';

$compiled = oci_parse($conn, $sql);
oci_bind_by_name($compiled, ':rno', $rno);
oci_bind_by_name($compiled, ':eid', $eid);
oci_execute($compiled);
if(oci_num_rows($compiled))
{
header('Location:home.php');
}
else
{
echo "Please Insert Correct data!!!";
}
?>