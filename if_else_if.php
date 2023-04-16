<html>

<head>
    <?php

    $nilai = 80;
    if ($nilai >= 80) {
        echo "Nilai Anda : A";
    } elseif ($nilai > 60) {
        echo "Nilai Anda : B";
    } else {
        echo "Nilai Anda : C";
    }
    echo ("<br>");

    $gaji = 15000000;
    if ($gaji > 20000000) {
        echo "Gaji Anda Sangat Cukup<br>";
    } else if ($gaji > 8000000 and $gaji < 19000000) {
        echo "Gaji Anda Cukup<br>";
    } else {
        echo "Gaji Anda Tidak Cukup<br>";
    }

    $a = 99;
    $b = 100;
    if ($a > $b) {
        echo "Nilai A Lebih Besar Dari Pada Nilai B";
    } elseif ($a == $b) {
        echo "Nilai A Sama Besar Dengan Nilai B";
    } else {
        echo "Nilai A Lebih Kecil Dari Pada Nilai B";
    }
    echo ("<br>");

    $gajah = 954;
    $babi  = 120;
    if ($gajah > $b) {
        echo "Gajah Lebih Berat Dari Pada Babi<br>";
    } elseif ($gajah == $babi) {
        echo "Gajah Sama Berat Dengan Babi<br>";
    } else {
        echo "Gajah Lebih Kecil Dari Pada Babi<br>";
    }

    $suhu = 10;
    if ($suhu  >= 100) {
        echo "Air Mendidih";
    } elseif ($suhu > 40 and $suhu < 99) {
        echo "Air Segera Mendidih ";
    } else {
        echo "Air Tidak Mendidih";
    }

    ?>
</head>

</html>