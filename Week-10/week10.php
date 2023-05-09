<?php
$n=0;
$str="";
$new="";
$n=(int)$_POST["n1"];
$str=$_POST["n1"];
if($n==0)
echo "<input type='text' value='not a number'>";
else if(strlen($str)>3)
echo "<input type='text' value='number out of range'>";
else {
$rev = strrev($str);
$once = array('Zero', ' One', ' Two', ' Three', ' Four', ' Five', ' Six', ' Seven', ' Eight', ' Nine');
$twos = array('Ten', ' Eleven', ' Twelve', ' Thirteen', ' Fourteen', ' Fifteen', ' Sixteen', ' Seventeen', ' Eighteen', ' Nineteen');
$tens = array('', 'Ten', ' Twenty', ' Thirty', ' Forty', ' Fifty', ' Sixty', ' Seventy', ' Eighty', ' Ninety');
$numLength = strlen($rev);
$word = array();
$j = 0;
for ($i = 0; $i < $numLength; $i++)
{
switch ($i) {
	
case 0:
if (( $rev[$i] == '0') || ($rev[$i + 1] == '1')) {
$word[$j]='';
}
else {
$word[$j] = $once[$rev[$i]];
}
$word[$j] = $word[$j];
break;
case 1:
if ($rev[$i] == '0') { $word[$j] = ''; }
else if ($rev[$i] == '1') { $word[$j] = $twos[$rev[$i - 1]]; }
else { $word[$j] = $tens[$rev[$i]]; }
break;
case 2:
if ($rev[$i] == '0') {
$word[$j] = '';
else if (($rev[$i - 1] == '0') || ($rev[$i - 2] == '0')) {
$word[$j] = $once[$rev[$i]] + " Hundred ";
}
else {
$word[$j] = $once[$rev[$i]]." Hundred and";
}
break;
default: break;
}
$j++;
}
for($k=count($word)-1;$k>=0;$k--)
$new .=$word[$k];
echo "<input type='text' value='$new' size='50'>";
}

 
?>