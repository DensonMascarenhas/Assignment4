<form method="post">        

Enter Number to Check Palindrome: <input type="text" name="number"/><br>  
<button type="submit">Check Palindrome</button>  
</form>  
<?php   
    if($_POST)  
    {  
	
        $num = $_POST['number'];  
        
        $reverse = strrev($num);  
        
	
        if($num == $reverse)
	    {  
            echo " $num is Palindrome";     
        }
	    else
	    {  
            echo " $num is not a Palindrome";   
        } 

        $sum=0;
        $rem=0;
        while($num!=0)
        {
            $rem=$num%10;
            $sum=$sum+$rem;
            $num=$num/10;
        }

        
        echo "<br>";
        echo "Total sum is: $sum";
    }     
?>  