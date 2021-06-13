
<?php
function fact($n)
{
  if($n ==0)
    {
	   return 1;
    }
  else 
    {	
	   return $n * fact($n-1);
    }
	}
print_r(fact(5)."\n");
?>
