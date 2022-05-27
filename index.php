<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    

    <style>
     
    
    </style>
</head>
<body class="font-sans">
    


    <h1 class=" bg-[rgb(91,222,26)] text-center text-2xl font-bold  tracking-wide">SCHOOL MANAGEMENT SYSTEM</h1>
    <div class="flex h-[700px]">
        <div class=" bg-[rgb(68,241,105)] text-center p-[1vw]  ">
            
            <form action="index.php" method="post">
              <label for="name"> Name </label><br>
             <input type="text" name="name" id="name"><br>
             <label for="number">  Contact Number </label><br>
            <input type="number" name="contact" id="number"><br>
              <label for="emailadd"> Email Address</label><br>
              <input type="email" name="email" id="emailadd"><br>
              <label for="gen"> Gender</label><br>
              <select name="gender" id="gen"><br>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
              </select><br>
              <label for="dob">Date of Birth </label><br>
              <input type="date" name="dateofbirth" id="dob"><br>
              <label for="str">   Stream </label><br>
           <input type="text" name="stream" id="str"><br>
              <button type="submit" name="submit" class="bg-white p-1  ">Submit and Add Record</button>
            </form><br>
        </div>
        <div class=" bg-[rgb(195,242,107)] flex flex-col  justify-center  p-2">
            <form method='post' >
            <button class="bg-white max-w-sm" name="delete">Delete Record</button><br><button class="bg-white max-w-sm" name="view">View Record</button><br><button type="reset" class="bg-white max-w-sm" name="reset">Reset Fields</button><br><button class="bg-white max-w-sm" name="delete_table">Delete table</button>
            
                        </form></div>
                        <div>
                            
                        </div>

</body>
</html>