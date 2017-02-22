<?php

define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'SYSTEM');
define('DB_PASSWORD', 'root');
//define('DB_DATABASE', 'e');
$conn= oci_connect(DB_USERNAME, DB_PASSWORD, DB_SERVER)
or die(oci_error());
//echo "success...";
$myusername=$_POST['u'];
$mypassword=$_POST['p'];

$s = OCIParse($conn, "select * from huser");
OCIExecute($s, OCI_DEFAULT);
$var=0;
WHILE (OCIFetch($s))
 {
 $u=ociresult($s, "USERNAME");
 $p=ociresult($s, "PASSWORD");
 if($mypassword==$p&&$myusername==$u)
  $var=1;
}
if($var==1)
{
header('Location:home.php');
//echo "Valid User";	
}
else
{
//echo "Wrong Password";
header('Location:index.php'); 
}
/*

//$database = oci_select_db(DB_DATABASE) or die(oci_error());
//$query ='SELECT * FROM huser WHERE username=:myusername and password=:mypassword';
$query="SELECT * FROM huser WHERE username='".$myusername."' and password= '".$mypassword."' ";
	//$stid = oci_parse($conn, 'SELECT * FROM huser');
//echo($query);
	echo ($myusername);
echo ($mypassword);
$stid = oci_parse($conn, $query);
//oci_bind_by_name($stid, ':myusername', $myusername);
//oci_bind_by_name($stid, ':mypassword', $mypassword);
$result=oci_execute($stid);
echo($result);
$count=oci_num_rows($stid);
echo($count);
if($count==1)
{
echo "Login Successful!!!!";
// Register $myusername, $mypassword and redirect to file "login_success.php"
//$_SESSION["myusername"];
//$_SESSION["mypassword" ];

}
else 
{
echo "Wrong Username or Password";
}
*/	

?>