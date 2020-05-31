<?php
$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="portfolio";
$conn=mysqli_connect($servername,$dbuser,$dbpassword,$dbname);
if($conn)
{
    if(isset($_POST['submit']));
    {
        $user=$_POST['user'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        $sql="insert into message(name,email,message) values('$user','$email','$message')";
        $res =mysqli_query($conn,$sql);
        if($res)
        {
            header("Location: my_[portfolio.html");
            
        }
    }
}
?>
