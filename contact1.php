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

$sql = "insert into contact1(name,email,message) values('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";  


echo "<script>
	alert('Feedback Saved Successfully');
	location.replace('index.php');
	</script>
	";
}else{
	echo "<script>
	alert('Feedback Cancel! Please make sure that you 
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