<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kuis</title>
</head>
<body>
<h2>Hasil Kuis</h2>

<?php 
// jawaban yang benar
$jawabanbenar = array("4", "HyperText Markup Languange");

// ambil jawaban dari formulir
$jawaban1 = $_POST['jawaban1'];
$jawaban2 = $_POST['jawaban2'];

// inisialisasi jumlah jawaban yang benar
$jumlahbenar = 0;
$salah = 0;

// memeriksa jawaban pertama
if($jawaban1 == $jawabanbenar[0]){
    $jumlahbenar++;
}

// memeriksa jawaban kedua
if(strtolower($jawaban2) == strtolower($jawabanbenar[1])) {
    $jumlahbenar++;
}

$salah = 2 - $jumlahbenar;

// menampilkan hasil
echo "<p>jawaban anda: <p>";
echo "<p>Pertanyaan 1: $jawaban1 <p>";
echo "<p>Pertanyaan 2: $jawaban2 <p>";

echo "<p>Jumlah jawaban yang benar: $jumlahbenar <p>";
echo "<p>Jumlah jawaban yang salah: $salah <p>";

?>
    
</body>
</html>