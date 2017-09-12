<?php
function maxSum($anArray)
{
  $suma = $anArray[0];
  $maximo = $suma;
  for($i = 1; $i < count($anArray); $i++) {
    $suma = ($suma<=0)? $anArray[$i] : $suma + $anArray[$i];  
	  if($suma > $maximo)
	  {
      $maximo=$suma;
    }
  }
  return $maximo;
}
?>