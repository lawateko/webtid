<?php

$nama = $_POST['nama'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];

$nilai_akhir = $uts * 0.3 + $uas * 0.3 + $tugas * 0.4;
$grade = $status = "";

if ($nilai_akhir >= 80 && $nilai_akhir <= 100) {
    $grade = "A";
} else if ($nilai_akhir >= 70 && $nilai_akhir <= 79) {
    $grade = "B";
} else if ($nilai_akhir >= 60 && $nilai_akhir <= 69) {
    $grade = "C";
} else if ($nilai_akhir >= 50 && $nilai_akhir <= 59) {
    $grade = "D";
} else if ($nilai_akhir >= 0 && $nilai_akhir <= 49) {
    $grade = "E";
} else {
    $grade = "-";
}

switch ($grade) {
    case "A":
    case "B":
    case "C":
        $status = "LULUS";
        break;
    case "D":
        $status = "PERBAIKAN";
        break;
    case "E":
        $status = "TIDAK LULUS";
        break;
    default:
        $status = "-";
        break;
}

echo "Nama : $nama <br> UTS : $uts <br> UAS : $uas <br> Tugas : $tugas <br> Nilai Akhir : $nilai_akhir <br> Grade : $grade <br> Status : $status";
