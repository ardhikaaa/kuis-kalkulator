<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jawaban</title>
    <!-- cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body  style="background-color: #FFE7C1;">
    <div class="container">
    
 
  
  <form action="kuis2.php">
  <button type="submit" class="btn-close" aria-label="Close" style="font-size: 30px; margin-top: 30px;"></button>
  </form>
</div>

<?php 
// jawaban yang benar
$jawabanbenar = ["74", "6", "16", "2", "29", "7", "45", "5", "97", "8", "42", "3"];

// ambil jawaban dari formulir
$jawaban1  = $_POST['jawaban1'];
$jawaban2  = $_POST['jawaban2'];
$jawaban3  = $_POST['jawaban3'];
$jawaban4  = $_POST['jawaban4'];
$jawaban5  = $_POST['jawaban5'];
$jawaban6  = $_POST['jawaban6'];
$jawaban7  = $_POST['jawaban7'];
$jawaban8  = $_POST['jawaban8'];
$jawaban9  = $_POST['jawaban9'];
$jawaban10 = $_POST['jawaban10'];
$jawaban11 = $_POST['jawaban11'];
$jawaban12 = $_POST['jawaban12'];

// inisialisasi jumlah jawaban yang benar
$jumlahbenar = 0;
$salah = 0;

// memeriksa jawaban pertama
if($jawaban1 == $jawabanbenar[0]){
    $jumlahbenar++;
}
if($jawaban2 == $jawabanbenar[1]){
    $jumlahbenar++;
}
if($jawaban3 == $jawabanbenar[2]){
    $jumlahbenar++;
}
if($jawaban4 == $jawabanbenar[3]){
    $jumlahbenar++;
}
if($jawaban5 == $jawabanbenar[4]){
    $jumlahbenar++;
}
if($jawaban6 == $jawabanbenar[5]){
    $jumlahbenar++;
}
if($jawaban7 == $jawabanbenar[6]){
    $jumlahbenar++;
}
if($jawaban8 == $jawabanbenar[7]){
    $jumlahbenar++;
}
if($jawaban9 == $jawabanbenar[8]){
    $jumlahbenar++;
}
if($jawaban10 == $jawabanbenar[9]){
    $jumlahbenar++;
}
if($jawaban11 == $jawabanbenar[10]){
    $jumlahbenar++;
}
if($jawaban12 == $jawabanbenar[11]){
    $jumlahbenar++;
}


$salah = 12 - $jumlahbenar;
$progres = $jumlahbenar/12 * 100;

// menampilkan hasil

// echo "<p>jawaban anda: <p>";
// echo "<p>Pertanyaan 1 : $jawaban1 <p>";
// echo "<p>Pertanyaan 2 : $jawaban2 <p>";
// echo "<p>Pertanyaan 3 : $jawaban3 <p>";
// echo "<p>Pertanyaan 4 : $jawaban4 <p>";
// echo "<p>Pertanyaan 5 : $jawaban5 <p>";
// echo "<p>Pertanyaan 6 : $jawaban6 <p>";
// echo "<p>Pertanyaan 7 : $jawaban7 <p>";
// echo "<p>Pertanyaan 8 : $jawaban8 <p>";
// echo "<p>Pertanyaan 9 : $jawaban9 <p>";
// echo "<p>Pertanyaan 10: $jawaban10 <p>";
// echo "<p>Pertanyaan 11: $jawaban11 <p>";
// echo "<p>Pertanyaan 12: $jawaban12 <p>";


?>

<div class="container" style="margin-top: 180px; background-color: #AC7D88; width: 400px; border-radius: 20px; color: white;">
    <div class="header">
    <h2 style="text-align: center; padding-top: 10px;">Jawaban Kuis</h2>
</div>
<hr>
        <div class="teks" style="padding-bottom: 30px;">
            <?php 
                echo "<p>Jumlah jawaban yang benar: $jumlahbenar <p>";
                echo "<p>Jumlah jawaban yang salah: $salah <p>";
                echo "<p>Progress pengerjaan: ".round($progres)." % <p>";
                echo '<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="'.round($progres).'" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: '.round($progres).'%">'.round($progres).'%"</div>
              </div>'
            ?>
            
        </div>
</div>
<br><br><br><br><br>
<h2 class="text-center">Hasil Kuis</h2>
<hr>

<div class="container text-center">
    <form action="jawaban.php" method="POST">
    <div class="row mt-5">
        <div class="col">
        <img src="aset/1.jpg" alt="" style="border-radius: 50px">
        <p style="margin-top: 15px; font-size: 30px;"> <?php echo $jawaban1 ?> </p>
        </div>
        <div class="col">
        <img src="aset/2.jpg" alt="" style="border-radius: 50px">
        <p style="margin-top: 15px; font-size: 30px;"> <?php echo $jawaban2 ?> </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
        <img src="aset/3.jpg" alt="" style="border-radius: 50px">
        <p style="margin-top: 15px; font-size: 30px;"> <?php echo $jawaban3 ?> </p>
        </div>
        <div class="col">
        <img src="aset/4.jpg" alt="" style="border-radius: 50px">
        <p style="margin-top: 15px; font-size: 30px;"> <?php echo $jawaban4 ?> </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
        <img src="aset/5.jpg" alt="" style="border-radius: 50px">
        <p style="margin-top: 15px; font-size: 30px;"> <?php echo $jawaban5 ?> </p>
        </div>
        <div class="col">
        <img src="aset/6.jpg" alt="" style="border-radius: 50px">
        <p style="margin-top: 15px; font-size: 30px;"> <?php echo $jawaban6 ?> </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
        <img src="aset/7.jpg" alt="" style="border-radius: 50px">
        <p style="margin-top: 15px; font-size: 30px;"> <?php echo $jawaban7 ?> </p>
        </div>
        <div class="col">
        <img src="aset/8.jpg" alt="" style="border-radius: 50px">
        <p style="margin-top: 15px; font-size: 30px;"> <?php echo $jawaban8 ?> </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
        <img src="aset/9.jpg" alt="" style="border-radius: 50px">
        <p style="margin-top: 15px; font-size: 30px;"> <?php echo $jawaban9 ?> </p>
        </div>
        <div class="col">
        <img src="aset/10.jpg" alt="" style="border-radius: 50px">
        <p style="margin-top: 15px; font-size: 30px;"> <?php echo $jawaban10 ?> </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
        <img src="aset/11.jpg" alt="" style="border-radius: 50px">
        <p style="margin-top: 15px; font-size: 30px;"> <?php echo $jawaban11 ?> </p>
        </div>
        <div class="col">
        <img src="aset/12.jpg" alt="" style="border-radius: 50px">
        <p style="margin-top: 15px; font-size: 30px;"> <?php echo $jawaban12 ?> </p>
        </div>
    </div>
</form>
    </div>

</div>
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>