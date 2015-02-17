<?php

function areaTriangle($s1,$s2,$s3)
  {
	$s = ($s1 + $s2 + $s3) / 2.0;
	$arg1 = $s-$s1;
	$arg2 = $s-$s2;
	$arg3 = $s-$s3;
	return sqrt($s*$arg1*$arg2*$arg3);
  }
  
function areaCuboid($s1,$s2,$s3)
  {
	return 2*($s1*$s2 + $s2*$s3 + $s3*$s1);
  }
  
function areaCone($r,$h)
  {
    $l =  sqrt($r*$r + $h*$h);
	return pi()*$r*($r+$l);
  }
  
function volumeCone($r,$h)
  {
	return (1/3.0)*pi()*$r*$r*$h;
  }  
  
function areaSphere($r)
  {
    return 4* pi()*$r*$r;
  }
  
function volumeSphere($r)
  {
    return (4/3.0)*pi()*$r*$r*$r;
  }

function areaHemisphere($r)
  {
	return 2*pi()*$r*$r;
  }
  
function volumeHemisphere($r)
  {
    return (2/3.0)*pi()*$r*$r*$r;
  }
  
function areaCylinder($r,$h)
  {
   return 2*pi()*$r*($r+$h); 
  }
  
function volumeCylinder($r,$h)
  {
   return pi()*$r*$r*$h;  
  }
  
function factorial($n)
  {  
	$fact=1;
		for($i=1;$i<=$n;$i+=1)
		{
			$fact=$fact*$i;
		}
	return $fact;
  }
  
function ncr($n,$r)
{
   return fact($n)/(fact($r)*fact($n-$r));
}

function npr($n,$r)
{
   return fact($n)/fact($n-$r);
}

function geometricMean($arr)
{
$product=1;
for($i=0;$i<$arr.length();$i++)
{
$product=$product*$arr[$i];
}
return sqrt($product);
}

function distance(x1,y1,x2,y2)
{
return sqrt((x1-x2)*(x1-x2) + (y1-y2)*(y1-y2));
}

	 ?>