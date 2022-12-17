<form method="post" action="">
    Masukan Alas Segitiga : <input type="text" name="alas"><br>
    Masukan Tinggi Segitiga : <input type="text" name="tinggi"><br>
    <input type="submit" name="submit" value="Hitung">
</form>

<?php 
if(isset($_POST['submit'])) {
    $a = $_POST['alas'];
    $t = $_POST['tinggi'];
    $l = 0.5 * $a * $t;
    echo "Luas Segitiga adalah : " . $l;
}
?>