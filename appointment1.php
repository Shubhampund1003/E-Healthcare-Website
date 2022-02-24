<?php  
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'healthcare';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected Successfully<br/>';  



if(isset($_POST['submit']))
{

$sql2 = "SELECT max(id) FROM appointment1";
$res = mysqli_query($conn, $sql2);

if(mysqli_num_rows($res) > 0)
{
	while($row = mysqli_fetch_row($res))
	{
		$id1=$row[0];

		$id1=$id1+1;
	}
}

$sql = "insert into appointment1(id,name,mobile,email,gender,age,date,address) values('".$_POST['id']."','".$_POST['name']."','".$_POST['mobile']."','".$_POST['email']."','".$_POST['gender']."','".$_POST['age']."','".$_POST['date']."','".$_POST['address']."')";  


echo "<script>
	alert('Appointment Book Successfully');
	location.replace('index.php');
	</script>
	";
}else{
	echo "<script>
	alert('Appointment Cancel! Please make sure that you 
	enter the correct details.');
	</script>
	";
}



if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record into table: ". mysqli_error($conn);  
}  


mysqli_close($conn);  
?>