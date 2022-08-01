<?php

$servername='localhost';
$username='root';
$database='giraffe';
$conn=mysqli_connect($servername,$username,"padma@123",$database);
if(!$conn)
{
    die("database connections error".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $dob=$_POST['dateofbirth'];
    $stream=$_POST['stream'];
    
    mysqli_query($conn,"insert into student2 values('$name',$contact,'$email','$gender','$dob','$stream');");
    $rows=mysqli_query($conn,"select * from student2;");
    header("Location: index.php");

}
if(isset($_POST['delete']))
{

  $sql="select * from student2;";
  $row=mysqli_query($conn,$sql);
  foreach($row as $rows)
  {
    $dob=$rows['dob'];

  }
  $sql="delete from student2 where dob= '$dob';";
  mysqli_query($conn,$sql);
  header("Location: index.php");
}
if(isset($_POST['delete_table']))
{
  $sql='drop table student2; ';
  mysqli_query($conn,$sql);
  header("Location: index.php");
}?>
