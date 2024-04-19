<?php 
require_once "db_koneksi.php";

//tangkap data form yang dikirim
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kelurahan_id = $_POST['kelurahan'];

//simpan data array
$data = [$kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $email, $alamat, $kelurahan_id];
//cek nilai proses
switch ($_POST['proses']) {
    case 'Simpan':
        //sql
        $insertPasienSQL = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lahir, gender, email, alamat, kelurahan_id) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        //prepare statement
        $stmt = $dbh->prepare($insertPasienSQL);
        //eksekusi
        $stmt->execute($data);
        break;

    case 'Ubah':
        //Logic Mnegubah data
        $pasien_id = $_POST['id'];
        $data[] = $pasien_id;
        $updatePasienSQL = "UPDATE pasien SET kode =?, nama =?, tmp_lahir =?, tgl_lahir =?, 
                            gender= ?, email =?, alamat=?, kelurahan_id =? WHERE id =?";
        $stmt = $dbh->prepare($updatePasienSQL);
        $stmt->execute($data);
        break;
    case 'Hapus':
        //logic hapus data
        $pasien_id = $_POST['id'];
        $deletePasienSQL = "DELETE FROM pasien WHERE id =?";
        $stmt = $dbh->prepare($deletePasienSQL);
        $stmt->execute([$pasien_id]);
        break;
    default:
    header('location: ./data_pasien.php');

}
//redirect ke halaman pasien
header('Location: ./data_pasien.php');
?>