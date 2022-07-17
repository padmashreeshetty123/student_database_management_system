<?php 
$servername='localhost';
$username='root';
$password='padma@123';
$database='giraffe';
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die("database connections error".mysqli_connect_error());
}
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$dob=$_POST['dateofbirth'];
$stream=$_POST['stream'];
if(isset($_POST['submit']))
{
mysqli_query($conn,"insert into student2 values($name,$contact,$email,$gender,$dob,$stream);");

}
if(isset($_POST['delete']))
{
  $sql='delete from student2 where contact= $contact;';
  mysqli_query($conn,$sql);
}
if(isset($_POST['view']))
{
  $sql='select * from student2;';
  mysqli_query($conn,$sql);
}
if(isset($_POST['delete_table']))
{
  $sql='drop table student2; ';
  mysqli_query($conn,$sql);
}
$sql = "SELECT * FROM student2";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    "id: " . $row["name"]. " - Name: " . $row["contact"]. " " . $row["email"]. "<br>";
  }
}
else 
{
  echo "0 results";
}

mysqli_close($conn);

?>
