<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
echo "Hello World! <br>";
print("hello world <br>");
print_r("Hwlooo <br>");
var_dump("ajh <br>");

$kelas = "11 PPLG 1"
    ?>

    <h1> ini kelas <?php echo $kelas ?></h1>

    <!-- <?php

    $x = 2;
    $x += 3;
    $x *= 5;

    // menggunakan concat (. ,)
    echo "Hasilnya adalah $x";

    ?> -->



<?php
$presensi = 2;
$tanggal = 31;

$presensi += $tanggal;

echo "Hasilnya adalah $presensi";
?>

<!-- <?php
$x = 31;
$y = 35 - 4;
$z = "Tiga satu";
$xy = $x <= $y; //true
$xz = $z !== $x; //true

var_dump("<br>$xz || $xy");
?> -->

<?php

$x = 31; // tanggal sekarang
$y = 16; // umur
$z = 2;  // no urut

$result = ($y >= $x) || ($z !== $x);

echo " <br>Hasil dari ($y) >= ($x) or ($z) !== ($x) adalah " . ($result ? 'true' : 'false');

?>


<?php

for ($i = 1; $i <= 10; $i++) {
    echo "Sekarang urutan ke-$i<br>";
}

$a = 1;
while ($a <= 10) {
    echo "Sekarang urutan ke-$a<br>";
    $a++;
}

do {
    echo "Sekarang urutan ke-$a<br>";
    $a++;

}while ($a <= 10);


$x = 5;
if (5 >= $x){
    echo "Hasilnya sama <br>";
}else {
    echo "Hasilnya berbeda <br>";
}

?>


<?php

// Input data
$tinggi = 172; // dalam cm
$jenisKelamin = 'pria'; // 'pria' atau 'wanita'
$berat = 70; // berat badan dalam kg

// Hitung berat ideal
if ($jenisKelamin == 'pria') {
    $beratIdeal = $tinggi - 100 - (($tinggi - 100) * 0.1);
} else if ($jenisKelamin == 'wanita') {
    $beratIdeal = $tinggi - 100 - (($tinggi - 100) * 0.15);
} else {
    $beratIdeal = "Jenis kelamin tidak valid";
}

// Tentukan kategori berat badan
if (is_numeric($beratIdeal)) {
    if ($berat < $beratIdeal * 0.9) {
        $kategori = "kurus";
    } else if ($berat > $beratIdeal * 1.1) {
        $kategori = "obesitas";
    } else {
        $kategori = "ideal";
    }

    // Output hasil
    echo "Karena tinggi $tinggi cm dan jenis kelamin $jenisKelamin, berat badan Anda termasuk $kategori.";
} else {
    echo $beratIdeal;
}

?>


<?php
//array
$dataSiswa = [
    ["Aldi","Satria","Dzaky"],
    // ["Kudus","Pati","Tangerang"],
    // [1,2,3],
];

?>

<ul>
    <?php foreach ($dataSiswa as $siswa) { ?>
        <?php foreach ($siswa as $nama) { ?>
            <li><?= $nama; ?></li>
        <?php } ?>
    <?php } ?>
</ul>

<h3>Data Siswa</h3>
 <?php
 $dataSet = [
   ["nama" => "Jadin",
    "asal" => "Semarang"],

    [
      "nama" => "Hilmi",
      "asal" => "Kudus"
    ],

    [
      "nama" => "Arsya",
      "asal" => "Jepara"
    ],
   
 ]
 ?>
<ul>
   <?php
   foreach ($dataSet as $siswa) { ?>
   <li>Nama : <?=$siswa["nama"];?></li>
   <li>Asal : <?=$siswa["asal"];?></li>
   <?php
   }
   ?>

</ul>



// function
<?php
 
 function salam($nama) {
     echo "Hello, $nama! <br>";
 }



?>

<h3> <?=salam("John Doe");?> </h3>


<?php
// Function dengan tiga parameter
function perkenalan($nama, $asal, $umur) {
    return "Halo, nama saya $nama. Saya berasal dari $asal dan saya berumur $umur tahun.";
}

// Memanggil fungsi dengan parameter
$kalimat = perkenalan("Aldi", "Kudus", 16);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkenalan</title>
</head>
<body>
    <h3><?= $kalimat; ?></h3>
</body>
</html>

</body>
</html>



</body>
</html>

