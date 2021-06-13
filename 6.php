 <html>
<body>

 <form method="post">  
 Enter the Number:  
   <input type="number" name="number">  
   <input type="submit" value="Submit">  
  </form>  

<?php
if($_POST)
{
$number = $_POST['number'];
$f1=0;
$f2=1;

	if($number==1)
	{
		echo "$f1";
	}
	else if($number==2)
	{
		echo "$f1,$f2";
	}
	else
	{
		echo "$f1,$f2";
		$a[0]=$f1;
		$a[1]=$f2;
		for ($i=2;$i<$number;$i++)
		{	

			$f3=$f1+$f2;
			
			$f1=$f2;
			$f2=$f3;
			echo ",$f3";
			$a[$i]=$f3;
		}
	}
echo "<br>";
echo "Prime numbers=";

$count=0;
$num=2;
while($count<$number)
{
	$div=0;
	for($i=1;$i<$num;$i++)
	{
		if(($num%$i)==0)
		{
			$div++;

		}
	}
	if($div<3)
	{
			if($num<=$f3)
			{
				if(in_array($num,$a))
				{
					echo "$num,";
					$count+=1;
				}
				
			}
			else{

				break;
			}

		
		

	}
	$num+=1;

}

}




?>
</body>  
</html>