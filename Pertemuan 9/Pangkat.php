<?php
function pangkat($a, $b){
  $bil = $a;
  for($i=0; $i<($b-1); $i++){
    $bil = $bil * $a;
  }
  return $bil;
}

echo pangkat(3,3);
?>