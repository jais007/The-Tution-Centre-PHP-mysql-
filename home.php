<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../thetuitioncentre/css/custo.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>

  <div class="w3-content w3-display-container">
  <img class="mySlides" src="../thetuitioncentre/Pic/1.jpg" style="width:100%" >
      
  <img class="mySlides" src="../thetuitioncentre/Pic/2.jpg" style="width:100%">
  <img class="mySlides" src="../thetuitioncentre/Pic/3.jpg" style="width:100%">
  <img class="mySlides" src="../thetuitioncentre/Pic/4.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>  
  <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<div class="container_body">
 <h1 style="text-align: center;">Select Your Course Today</h1>
  <div class="blockmain">
    
      <div class="block1">
       <span class="block2">
     <img src="../thetuitioncentre/Pic/foundation.jpg" style="height:100%; width:100%;">
          </span> 
       <span class="block3">
          The foundation course is a one or two year preparatory course for school-leavers who want to qualify for a place on a bachelor's degree course in art, design or architecture. The course is almost entirely practical in nature, although increasingly elements of art and design history have been introduced, and it is considered sufficient to qualify those who pass it to move on to a degree course without further study.
           
           <a href="regi.php" >Click here </a> for registration
          
          </span>
      </div>
      
      
      <div class="block1">
          <span class="block2">
          
          <img src="../thetuitioncentre/Pic/target.jpg" style="height:100%; width:100%;">
          </span>
       <span class="block3">
          This is one year course to develop strong foundation of concepts and their application. This course also sharpens question solving and reasoning skills of student. In addition to MCA preparation, complete school syllabus, Physics & Chemistry Practical and English are also covered for excellent performance in school examination also.
            <a href="regi.php" >Click here </a> for registration
          </span>
      </div>
      
      
      <div class="block1">
      <span class="block2">
          <img src="../thetuitioncentre/Pic/crash.jpg" style="height:100%; width:100%;">
          </span>
       <span class="block3">
          Entrance exams for admission in MCA like NIMCET is conducted separately by various institutions. Generally, exam comprises of Mathematics, Reasoning, Computer Awareness and General English. A candidate must hold a degree of minimum three years (B.Sc /B.Sc (Hons)/BCA/BIT) or B E / B Tech or equivalent exam. Here, you can find mock tests, topic wise tests and previous year papers for preparation.
           <a href="regi.php" >Click here </a> for registration
          
          </span>
      </div>
  </div>    
</div>
</body>
</html>