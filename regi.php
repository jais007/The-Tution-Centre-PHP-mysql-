<?php

if(isset($_POST["rsubmit"]))
{
     $name=$rnameerr=$remailerr=$rpasserr=$gender=$rfileerr="";
$email="";
$password="";
    $fname=$_FILES['file']; 
    if(empty($_POST["rname"]))
    {
  $rnameerr="Name Cann't be blank";
    $errcode=0;
    }
    else{
        $rnameerr='';
       $name=$_POST["rname"];
    }
    if(empty($_POST["remail"])){
  $remailerr="Email Cann't be blank";
        $errcode=0;
   }
    else
         $email=$_POST["remail"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $remailerr = "Invalid email format"; 
            $errcode=0;
    } else $email=$_POST["remail"];
    
    
    if(empty($_POST["rpass"]))
  $rpasserr="Password Cann't be blank";
    else{
        $rpasserr='';
        $errcode=0;
       $password=$_POST["rpass"];
    }
    if(empty($_POST["rgender"]))
    {
        $rgendererr="Need";
    $errcode=0;
    }
    else{
        $rgendererr="";
        $gender=$_POST["rgender"];
        
    }
    
    if(empty($_POST["rCourse"])){
        $rcourseerr=" You Must select any one of the course";
    $errcode=0; 
    $course="";}
    else{
        $rcourseerr="";
    $course=$_POST["rCourse"];
    }
    if(empty($fname["name"])){
        $rfileerr="You Must select your Photo";
    $errcode=0;
    }
    else
        $rfileerr="";
  
    
   
}
else
{
    $errcode=1;
    $name=$rnameerr=$remailerr=$rpasserr="";
$email="";
$password="";
    $rgendererr=$rfileerr="";
    $rcourseerr="";
    $fname="";
    
    
    
    
}

?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../thetuitioncentre/css/custo.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
     
    <?php include'hlogin.php'; ?>
    
<div class="regi_container">
    
    
    <div class="regi_box1">
        <span class="regi_box2">
        <form action="regi.php" method="post"  enctype="multipart/form-data">
            <p><span class="error">* required field</span></p>
        Name: <input type="text" name="rname">
            <div class="error">* <?php echo $rnameerr;?> </div>
            <br>
             
        E-mail: <input type="text" name="remail">
            <div class="error">* <?php echo $remailerr;?> </div>
            <br> 
            Password:<input type="password"  name="rpass">
            <div class="error">* <?php echo $rpasserr;?> </div><br>
            Gender: 
            
            <span class="radio">
          <input type="radio" name="rgender" value="Male" > Male 
  <input type="radio" name="rgender" value="Female"> Female
                <div class="error">* <?php echo $rgendererr;?> </div>
                
                
                
                <br> </span>
            
            
           <select id="Course" name="rCourse">
               <option value="" name="rCourse"> Select Your Course</option>
      <option value="Foundation" name="rCourse">Foundation</option>
      <option value="Target" name="rCourse">Target</option>
      <option value="Crash" name="rCourse">Crash</option>
               
    </select>
            <div class="error">* <?php echo $rcourseerr;?> </div>
            
            <br>
            Select image to upload:
            <input type="file" name="file" >
            <div class="error">* <?php echo $rfileerr;?> </div><br>
            
        <input type="submit" value="Register Now" name="rsubmit">
</form> 
            
        </span>
        </div>
    
    
    </div>
    
  <?php include'footer.php'; ?>

</body>
</html>



