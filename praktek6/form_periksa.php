<?php

require_once "db_koneksi.php";

$pasienidd = $dbh->query("SELECT * FROM pasien ORDER BY id ASC");
$dokteridd = $dbh->query("SELECT * FROM paramedik WHERE unit_kerja_id = 1");

$error = false;

$periksa_id = $_GET['id'] ?? 0;
if($periksa_id){
    $findPeriksaSQL = "SELECT * FROM periksa WHERE id = $periksa_id LIMIT 1";
    $periksa = $dbh->query($findPeriksaSQL);
    if($periksa->rowCount()) $periksa = $periksa->fetch();
    else header('location: ./data_periksa.php');
}

include_once "layout/top.php";
include_once "layout/navbar.php";
include_once "layout/sidebar.php";

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>PERIKSA</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <?php if($error) : ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif ?>

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">FORM PERIKSA</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="proses_periksa.php">
                    <div class="form-group row">
                        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                        <div class="col-8">
                            <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?= $periksa['tanggal'] ??'' ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="kode" class="col-4 col-form-label">Berat</label>
                        <div class="col-8">
                            <input id="berat" name="berat" type="text" class="form-control" value="<?= $periksa['berat'] ??'' ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tinggi" class="col-4 col-form-label">Tinggi</label>
                        <div class="col-8">
                            <input id="tinggi" name="tinggi" type="text" class="form-control" value="<?= $periksa['tinggi'] ??'' ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tensi" class="col-4 col-form-label">Tensi</label>
                        <div class="col-8">
                            <input id="tensi" name="tensi" type="text" class="form-control" value="<?= $periksa['tensi'] ??'' ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keterangan" class="col-4 col-form-label">Keterangan</label>
                        <div class="col-8">
                            <textarea id="keterangan" name="keterangan" cols="40" rows="2" class="form-control"><?= $periksa['keterangan'] ??'' ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pasien_id" class="col-4 col-form-label">Pasien ID</label>
                        <div class="col-8">
                            <input id="pasien_id" name="pasien_id" type="pasien_id" class="form-control" value="<?= $periksa['pasien_id'] ??'' ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="doket_id" class="col-4 col-form-label">Dokter ID</label>
                        <div class="col-8">
                            <input id="doket_id" name="doket_id" type="doket_id" class="form-control" value="<?= $periksa['doket_id'] ??'' ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <input type="submit" name="proses_periksa" id="proses_periksa" class="btn btn-primary" value="<?= $periksa_id ? 'Ubah' : 
                            'Simpan' ?>">
                            <!--<button name="submit" type="submit" class="btn btn-primary">Tambah Pasien</button>-->
                        </div>
                    </div>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once "layout/bottom.php"
?>