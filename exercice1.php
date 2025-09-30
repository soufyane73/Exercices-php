<?php
// methode 1 
function reverseString1($x) {
   $y = "";
  for ($i=strlen($x)-1; $i >= 0 ; $i--) { 
    $y .= $x[$i];
}
return $y;
}


// methode 2
function reverseString2($x) {
 return strrev($x);
}

echo reverseString1("hello");
?>