<?php 
error_reporting(0);
$nilai = $_POST['nilai'];
$genap = array();
$ganjil = array();

function rekursif($kolom, $baris) {
    if ($kolom > 0) {
        if ($baris > 0) {
            echo "*";
            $baris--;
            rekursif ($kolom, $baris);
        }
        else {
            echo "<br>";
            $kolom--;
            rekursif ($kolom, $kolom);
        }
    }
}
rekursif($nilai, $nilai);

//=========================================================

for ($kolom = 1; $kolom <= $nilai; $kolom++) {
    if($kolom % 2 == 0) {
        array_push($genap, $kolom);
    }

    else{
        array_push($ganjil, $kolom);
    }
}

echo "<br>";

echo "Genap : ";

for($kolom = 0; $kolom < count($genap); $kolom++) {
    echo $genap[$kolom].' ';
}
echo "Jumlah Deret Genap : ".count($genap)."<br>";

echo "<br>";
echo "Ganjil : ";

for($kolom = 0; $kolom <count($ganjil); $kolom++) {
    echo $ganjil[$kolom].' ';
}
echo "Jumlah Deret Ganjil : ".count($ganjil);
?>
