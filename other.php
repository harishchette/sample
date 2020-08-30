<htmL
<head>
	</htmL>
</head>
<form method="post">
	<input type="text" name="user" placeholder="enter username"><br><br>
	<input type="password" name="pass" placeholder="enter password"><br><br>
	<input type="numbers" name="birth" placeholder="enter year of birth"><br><br>s
	<input type="submit" name="submit">
</form>
</html>
<?php
include 'connect.php';
if(isset($_POST['submit']))
{
	$name=$_POST['user'];
	$pass=$_POST['pass'];
	$year=$_POST['birth'];

	$insert=" insert into login(username,password,birthyear) values('$name','$pass','$year')";
	$res=mysqli_query($con, $insert);

if($res)
{
	?>
	<script>
		alert("entered");
	</script>
	<?php
}else
{
	?>
	<script>
		alert("not entered");
	</script>
	<?php
}
}
?>