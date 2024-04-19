<?php 
require_once "db_koneksi.php";

//tangkap data form yang dikirim
$tanggal = $_POST['tanggal'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$tensi = $_POST['tensi'];
$keterangan = $_POST['keterangan'];
$pasien_id = $_POST['pasien_id'];
$doket_id = $_POST['doket_id'];
//simpan data array
$data = [$tanggal, $berat, $tinggi, $tensi, $keterangan, $pasien_id, $doket_id];
//cek nilai proses
switch ($_POST['proses_periksa']) {
    case 'Simpan':
        //sql
        $insertPeriksaSQL = "INSERT INTO periksa (tanggal, berat, tinggi, tensi, keterangan, pasien_id, doket_id) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
        //prepare statement
        $stmt = $dbh->prepare($insertPeriksaSQL);
        //eksekusi
        $stmt->execute($data);
        break;

    case 'Ubah':
        //Logic Mnegubah data
        $periksa_id = $_POST['id'];
        $data[] = $periksa_id;
        $updatePeriksaSQL = "UPDATE periksa SET tanggal =?, berat= ?, tinggi =?, tensi =?, 
                             keterangan =?, pasien_id =?, doket_id=? WHERE id =?";
        $stmt = $dbh->prepare($updatePeriksaSQL);
        $stmt->execute($data);
        break;
    case 'Hapus':
        //logic hapus data
        $periksa_id = $_POST['id'];
        $deletePeriksaSQL = "DELETE FROM periksa WHERE id =?";
        $stmt = $dbh->prepare($deletePeriksaSQL);
        $stmt->execute([$periksa_id]);
        break;
    default:
    header('location: ./data_periksa.php');

}
//redirect ke halaman pasien
header('Location: ./data_periksa.php');
?>