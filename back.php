<?php
if(!isset($_POST['submit']))
{
    $usr=$_POST['usr'];
    $ped=$_POST['pwd'];
$con=mysqli_connect("localhost:3306","root","","log");
$sql="SELECT * from details WHERE usr='$usr' AND pwd='$pwd'";
$result=mysqli_query($con,$sql);
$resultcheck=mysqli_num_rows($result);
if($resultcheck>0)
{
    echo "login sucessful";
}    
else
{
    echo "username or password incorrect";
}
}
?>