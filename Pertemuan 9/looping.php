<?php 
echo "Looping menggunakan FOR : </br>";
for ($i = 1; $i <= 10 ; $i++) {
    echo "<li>urutan ke-$i</li>";
}

echo "looping menggunakan while";
$i = 1;
while ($i <= 10) {
    echo "<li>urutan ke-$i</li>";
    $i++;
}
?>