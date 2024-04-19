<?php 
require_once "db_koneksi.php";

//tangkap data form yang dikirim
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$kategori = $_POST['kategori'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];
$unit_kerja_id = $_POST['unit_kerja_id'];
//simpan data array
$data = [$nama, $gender, $tmp_lahir, $tgl_lahir, $kategori, $telpon, $alamat, $unit_kerja_id];
//cek nilai proses
switch ($_POST['proses_paramedik']) {
    case 'Simpan':
        //sql
        $insertDokterSQL = "INSERT INTO paramedik (nama, gender, tmp_lahir, tgl_lahir, kategori, telpon, alamat, unit_kerja_id) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        //prepare statement
        $stmt = $dbh->prepare($insertDokterSQL);
        //eksekusi
        $stmt->execute($data);
        break;

    case 'Ubah':
        //Logic Mnegubah data
        $dokter_id = $_POST['id'];
        $data[] = $dokter_id;
        $updateDokterSQL = "UPDATE paramedik SET nama =?, gender= ?, tmp_lahir =?, tgl_lahir =?, 
                             kategori =?, telpon =?, alamat=?, unit_kerja_id =? WHERE id =?";
        $stmt = $dbh->prepare($updateDokterSQL);
        $stmt->execute($data);
        break;
    case 'Hapus':
        //logic hapus data
        $dokter_id = $_POST['id'];
        $deleteDokterSQL = "DELETE FROM paramedik WHERE id =?";
        $stmt = $dbh->prepare($deleteDokterSQL);
        $stmt->execute([$dokter_id]);
        break;
    default:
    header('location: ./data_paramedik.php');

}
//redirect ke halaman pasien
header('Location: ./data_paramedik.php');
?>