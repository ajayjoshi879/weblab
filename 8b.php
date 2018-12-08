<?php 
	$a=array(array(1,2,3),array(4,5,6),array(7,8,9)); 
	$b=array(array(7,8,9),array(4,5,6),array(1,2,3)); 
	$m=count($a); 
	$n=count($a[2]); 
	$p=count($b); 
	$q=count($b[2]); 
	 
	echo "the first matrix is"."<br/>"; 
	for($r=0;$r<$m;$r++) 
	{ 
		for($c=0;$c<$n;$c++) 
			echo " ".$a[$r][$c]; 
			echo "<br>"; 
	} 
	 
	echo "the second matrix is"."<br/>"; 
	for($r=0;$r<$p;$r++) 
	{ 
		for($c=0;$c<$q;$c++) 
			echo " ".$b[$r][$c]; 
			echo "<br>"; 
	} 
	 
	echo "the transpose for the first matrix is"."<br/>"; 
	for($r=0;$r<$m;$r++) 
	{ 
		for($c=0;$c<$n;$c++) 
			echo " ".$a[$c][$r]; 
			echo "<br/>"; 
	} 
	 
	if(($m===$p)and($n===$q)) 
	{ 
		echo "the additions of matrices is"."<br/>"; 
		for($r=0;$r<3;$r++) 
		{ 
			for($c=0;$c<3;$c++) 
				echo " ".$a[$r][$c]+$b[$r][$c]." "; 
				echo "<br/>"; 
		} 
	} 
	if($n===$p) 
	{ 
		echo "the multiplication of matrices is"."<br/>"; 
		$result=array(); 
		for($i=0;$i<$m;$i++) 
		{ 
			for($j=0;$j<$q;$j++) 
			{ 
				$result[$i][$j]=0; 
				for($k=0;$k<$n;$k++) 
					$result[$i][$j]+=$a[$i][$k]*$b[$k][$j]; 
				 
			} 
		} 
		for($r=0;$r<$m;$r++) 
		{ 
			for($c=0;$c<$q;$c++) 
				echo " ".$result[$r][$c]; 
				echo "<br/>"; 
		}	 
	} 
?> 
	 
	 


