<html>  
<body>  
 <form method="post">  
 Enter the Number:  
   <input type="number" name="number">  
   <input type="submit" value="Submit">  
  </form>  
</body>  
</html>  
<?php  
 if($_POST)  
 {   
  $sum  = 0;  
  
  $n = $_POST['number'];  
  
  $aux = $n;  
  
  
  while( $aux != 0 )  
  {  
   $rem   = $aux % 10;  
   $sum   = $sum + ( $rem * $rem * $rem ); 
   $aux   = $aux / 10; 
  }  
  
  if( $n == $sum )  
  {  
   echo "Yes $n an Armstrong Number";  
  }
  else  
  {  
   echo "$n is not an Armstrong Number";  
  }  
 }  
?>     