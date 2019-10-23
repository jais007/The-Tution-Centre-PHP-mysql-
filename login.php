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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
       
        E-mail: <input type="text" name="lemail"><br>
            Password:<input type="password"  name="lpassword"><br>
           
            
            
        <input type="submit" value="Login" name="regi_submit">
</form> 
            
        </span>
        </div>
    
    
    </div>
    
  <?php include'footer.php'; ?>

</body>
</html>



