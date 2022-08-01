
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    

    <style>
       
        label
        {
            display:block;
        margin-top:40px;
        }
        input{
        width:15vw;
        }
        @media screen and (max-width:600px) {
            input
            {
                width:60vw;
            }
            
        }
        button{
            border-right:2px solid black;
            border-bottom:2px solid black;
        }
      table,th,tr,td{
        border:2px solid black;
        
          }
          #d1{
            overflow:scroll;
          }
    </style>
</head>
<body class="font-sans">
    <h1 class=" bg-[rgb(91,222,26)] text-center text-2xl font-bold  tracking-wide">SCHOOL MANAGEMENT SYSTEM</h1>
    <div class="flex w-[100vw] h-[100vh]">
        <div class="  w-[20vw] bg-[rgb(68,241,105)] text-center p-[1vw]  ">
            
            <form action="database.php" method="post">
              <label for="name"> Name </label>
             <input type="text" name="name" id="name"><br>
             <label for="number">  Contact Number </label>
            <input type="number" name="contact" id="number">
              <label for="emailadd"> Email Address</label>
              <input type="email" name="email" id="emailadd">
              <label for="gen"> Gender</label>
              <select name="gender" id="gen">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
              </select>
              <label for="dob">Date of Birth </label>
              <input type="date" name="dateofbirth" id="dob">
              <label for="str">   Stream </label>
           <input type="text" name="stream" id="str"><br>
              <button type="submit" name="submit" class="bg-white mt-10 ">Submit and Add Record</button>
        </div>
        <div class="w-[10vw] bg-[rgb(195,242,107)] flex flex-col  justify-center  p-2">
            <button type="submit" name="delete" class="bg-white mt-10 ml-5 w-20 ">delete record</button><br>
            <button type="submit" name="delete_table" class="bg-white mt-10 ml-5 w-20">drop table</button><br>
            <button type="reset" name="" class="bg-white mt-10 ml-5 w-20">reset fields</button>
            </form></div>
     
        <div id="d1"class="w-[70vw]">
           
            <table class="m-5 w-[65vw]" cellpadding='10px'>
<thead>
  
  <td>NAME</td>
  <td>CONTACT</td>
  <td>EMAIL</td>
  <td>GENDER</td>
  <td>Date of Birth</td>
  <td>Stream</td>
</thead>
<tbody>
<?php
$servername='localhost';
$username='root';
$password="padma@123";
$database='giraffe';
$conn=mysqli_connect($servername,$username,$password,$database);
$rows=mysqli_query($conn,"select * from student2;");
foreach($rows as $row)
{?>
    <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo$row['contact']?></td>
    <td><?php echo$row['email']?></td>
    <td><?php echo$row['gender']?></td>
    <td><?php echo$row['dob']?></td>
    <td><?php echo$row['stream']?></td>
    </tr>
 <?php } ?>
<tbody>
    </table>
        </div>
    </div>
    </div>

</body>
</html>
