<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penilaian Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Hasil Penilaian Siswa</h2>
        <?php
    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['uts'];
    $nilai_uas = $_POST['uas'];
    $nilai_tugas = $_POST['tugas'];

    // Menghitung nilai total dengan presentase (uts30, uas35, tugas35)
    $nilai_total = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

    // Menentukan status kelulusan
    if ($nilai_total > 55) {
        $status = "LULUS";
    } else {
        $status = "TIDAK LULUS";
    }

    // Menentukan grade berdasarkan nilai total
    if ($nilai_total < 0 || $nilai_total > 100) {
        $grade = "I";
    } elseif ($nilai_total >= 85) {
        $grade = "A";
    } elseif ($nilai_total >= 70) {
        $grade = "B";
    } elseif ($nilai_total >= 56) {
        $grade = "C";
    } elseif ($nilai_total >= 36) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    // Menentukan grade berdasarkan nilai total
    switch (true) {
        case ($nilai_total < 0 || $nilai_total > 100):
            $predikat = "Tidak Ada";
            break;
        case ($nilai_total >= 85):
            $predikat = "Sangat Memuaskan";
            break;
        case ($nilai_total >= 70):
            $predikat = "Memuaskan";
            break;
        case ($nilai_total >= 56):
            $predikat = "Cukup";
            break;
        case ($nilai_total >= 36):
            $predikat = "Kurang";
            break;
        default:
            $predikat = "Sangat Kurang";
    }

?>
<div class="card">
            <div class="card-body">
                <h5 class="card-title">Nilai Siswa</h5><h5 class="card-title">Proses : <?php echo $proses; ?></h5>
                <p class="card-text">Nama       : <?php echo $nama_siswa; ?></p>
                <p class="card-text">Mata Kuliah: <?php echo $mata_kuliah; ?></p>
                <p class="card-text">Nilai UTS  : <?php echo $nilai_uts; ?></p>
                <p class="card-text">Nilai UAS  : <?php echo $nilai_uas; ?></p>
                <p class="card-text">Nilai Tugas: <?php echo $nilai_tugas; ?></p>
                <p class="card-text">Nilai Total: <?php echo $nilai_total; ?></p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Hasil Penilaian</h5>
                <p class="card-text">Status Kelulusan   : <?php echo $status; ?></p>
                <p class="card-text">Grade              : <?php echo $grade; ?></p>
                <p class="card-text">Predikat           : <?php echo $predikat; ?></p>
            </div>
        </div>
    </div>
</body>
</html>