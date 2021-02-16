<?php
	
$test = 'filename_[person_2134]_[birthday].pdf'; 
echo $test.'<br>';
$pos1 = strpos($test, '[');
$pos2 = strpos($test, ']');
$result = substr($test, $pos1+1, $pos2-$pos1-1);
echo $result;
$test = str_replace('[' . $result . ']','JordSips',$test);
echo '<br>'.$test;

	
?>