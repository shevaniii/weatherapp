<?php
include("dbconnect.php")

?>
<?php
$un=$_POST['t1'];
$pd=$_POST['t2'];
$sql ="SELECT * FROM student";
$result =mysqli_query($conn , $sql);
$sql = "SELECT * FROM student";
$result = mysqli_query($conn ,$sql);

while($row= mysqli_fetch_assoc($result)){
    if($row["fname"]==$un && $row["pass"]==$pd){
        header("location:index.html");
    }
    else{
        echo "Invalid user (who are you?)";
    }
}