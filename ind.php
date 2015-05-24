<?php
$host="localhost";
async function gen_check_host($host)
{
$conn=awiat gen_mysql_connect($host,"root","","project");
$result=await gen_mysql_squery("",$conn);
$row=await gen_fetch_row($result);
return $row;
}
$name=$_POST['uname'];
$gender=$_POST['gen'];
$prof=$_POST['prof'];
$mail=$_POST['email'];
$pwd=$_POST['password'];
$num=$_POST['number'];
$city=$_POST['city'];
$select=mysql_query("select * from form where uname='$name'");
$select1=mysql_query("select * from form where email='$mail'");
$ch=0;
while($row){
	$ch=5;
	break;
}
while($row=mysql_fetch_array($select1)){
	$ch=6;
	break;
}
if($ch==5){
	?>
	<html><script>alert("This Name Already Registered");</script>
	<meta http-equiv="refresh" content="0;index.html"/>
	</html>;
	<?php
}
else if($ch==6){
	?>
	<html><script>alert("This Email Already Used");</script>
	<meta http-equiv="refresh" content="0;index.html"/>
	</html>;
	<?php
}
else{
	$query="insert into form  values('$name','$gender','$prof','$mail','$pwd','$num','$city')";
	mysql_query($query);
	?>
		<html><script>alert("Succesfully Registered");</script>
			<meta http-equiv="refresh" content="0;index.html"/>
		</html>;
<?php
}
?>