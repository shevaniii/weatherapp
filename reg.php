<?php
$un=$_POST['t1'];
$pd=$_POST['t2'];
$em=$_POST['t3'];
$mb=$_POST['t4'];
$mr=$_POST['t5'];
$hg=$_POST['t6'];
$pc=$_POST['t7'];

$severname='localhost';
$username='root';
$password='';
$dbname='abes';

$conn=mysqli_connect($severname,$username,$password,$dbname);
if(!$conn)
{
    die("Connection failed:". mysqli_connect_error());
}
$sql="INSERT INTO student (fname, pass , emailid, phonenumber,city,region,pinc)
   VALUES ('$un', '$pd' , '$em' , '$mb' , '$mr','$hg' , '$pc')";

if(mysqli_query($conn, $sql))
{
    echo "New record created successfully";
    header("location:log.html");
}
else{
    echo "Error:" .$sql ."<br>" .mysqli_error($conn);
}
?>