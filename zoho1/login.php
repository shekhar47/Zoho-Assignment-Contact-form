<?php 
include_once("connection.php");
if($_POST['login'])
{

    $mail=$_POST['email'];
    $pass=$_POST['password'];
    
    $query="SELECT * from customer where email='$mail' and password='$pass'";
    $q=mysqli_query($conn,$query);
    if(mysqli_num_rows($q)>0)
    {
        
        $_SESSION['mail']=$mail;
        session_start();
        echo "<script>window.location=\"home.php\"</script>";
        //header("location:home.php");
    }
    else
    {
        //echo "hello";
        echo "<script> alert(\"Enter correct username or password\")</script>";
        echo "<script>window.location=\"index.html\"</script>";

    }
}

 ?>