<htmL>
<head>
	
</head>
<body>
<?php

$username="root";
$password="";
$server="localhost";
$db="database1";

$con = mysqli_connect($server,$username,$password,$db);

if($con)
{
	echo "connection successfull";
}
else
{
	echo "no connection";
}

?>
</body>
</htmL>