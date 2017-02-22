<html>
<head>
<title>
Hotel Management System
</title>
<style>
body
{
background-color:#F0F8FF;
}
button
{
font-family:segul;
font-size:20px;
padding-left:10px;
padding-right:10px;
margin:10px;	
}
input
{
margin:10px;
padding:3px;
background-color:#F0F8FF;
font-family:tohoma;
font-size:20px;
}
h1
{
font-family:Tahoma;
color:#008B8B;
margin-top:20px;
margin-bottom:0px;
}
h2
{

font-family:Tahoma;
color:#8DEEEE;
}
div
{
padding-top:10px;
margin-top:20px;
width:50%;
margin-left:20%;
padding-bottom:10px;
border-radius:10px;
}
</style>
</head>
<body>
<center>
<h1>Hotel Management System</h1>
</center>
<div class="login">
<center>
<div style="background-color:#7A7A7A;">

	<h2>Administrator Login</h2>
    <form method="post" action="welcome.php">
    	<input type="text" name="u" placeholder="Username" required="required" /><br>
        <input type="password" name="p" placeholder="Password" required="required" /><br>
        <button type="submit">Login</button>
    </form>
	</div>
</div>
</body>
</html>