<?php 
function volume_Dua_Kubus($a, $b) {
    $Volume_a = $a * $a * $a;
    $Volume_b = $b * $b * $b;

    $total = $Volume_a + $Volume_b;

    return $total;
}

echo volume_Dua_Kubus($a, $b)
?>