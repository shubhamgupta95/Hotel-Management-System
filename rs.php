<?php
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'SYSTEM');
define('DB_PASSWORD', 'root');
$conn= oci_connect(DB_USERNAME, DB_PASSWORD, DB_SERVER)
or die(oci_error());

$pid=$_POST["pid"];
$rno=$_POST["rno"];
$q=$_POST["q"];
$sql = 'INSERT INTO contains(rno,pid,quantity) '.'VALUES(:rno,:pid,:q)';

$compiled = oci_parse($conn, $sql);
oci_bind_by_name($compiled, ':rno', $rno);
oci_bind_by_name($compiled, ':pid', $pid);
oci_bind_by_name($compiled, ':q', $q);
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