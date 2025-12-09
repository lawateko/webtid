<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <h1>Server Side Programming</h1>
    </div>
    <nav>
        <a href="">Home</a>
        <a href="">Profil</a>
    </nav>
    <div class="content">
        <table>
            <tr>
                <td width="50%">
                    <!-- post = form -> action 
                get  = form -> url -> action -->
                    <form class="form" action="" method="POST">
                        <div>
                            <label for="">Nama</label>
                            <input type="text" name="nama">
                        </div>
                        <div>
                            <label for="">Nilai UTS</label>
                            <input type="text" name="uts">
                        </div>
                        <div>
                            <label for="">Nilai UAS</label>
                            <input type="text" name="uas">
                        </div>
                        <div>
                            <label for="">Nilai TUGAS</label>
                            <input type="text" name="tugas">
                        </div>
                        <div>
                            <button class="hijau" type="submit">Cetak</button>
                        </div>
                    </form>
                </td>
                <td width="50%">
                    <div class="form">
                        <?php
                        // isset    -> var sudah di set / belum
                        // empty    -> var kosong /  tidak
                        if (isset($_POST['nama'])) {
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
                        }
                        ?>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>