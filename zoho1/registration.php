<?php 
include_once("connection.php");
$mail=$_POST['email'];
$pass=$_POST['password'];
$mob=$_POST['number'];

if($_POST['reg'])
{
$query="SELECT * from customer where email='$mail'";
$q=mysqli_query($conn, $query);
$rows=mysqli_num_rows($q);
if($rows>0)
{
  echo "<script>alert(\"Details already exists\")</script>";
}
else
{
  $query="INSERT into customer values('$mail','$pass','$mob')";
  $q=mysqli_query($conn,$query);
  //echo $mail." ".$pass." ".$mob ;
  echo "<script>alert(\"Successfully Registered!\")</script>";
  echo "<script>window.location=\"index.html\"</script>";


}
}

 ?>