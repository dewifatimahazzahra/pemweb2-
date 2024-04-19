<?php

require_once "db_koneksi.php";

$data_unit = $dbh->query("SELECT * FROM unit_kerja ORDER BY nama ASC");

$error = false;

$dokter_id = $_GET['id'] ?? 0;
if($dokter_id){
    $findDokterSQL = "SELECT * FROM paramedik WHERE id = $dokter_id LIMIT 1";
    $dokter = $dbh->query($findDokterSQL);
    if($dokter->rowCount()) $dokter = $dokter->fetch();
    else header('location: ./data_paramedik.php');
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
                    <h1>PARAMEDIK</h1>
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
                <h3 class="card-title">FORM PARAMEDIK</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="proses_paramedik.php">
                    <div class="form-group row">
                        <label for="text" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input id="text" name="nama" type="text" class="form-control" value="<?= $dokter['nama'] ??'' ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Gender</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline"> 
                                <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="P" checked>
                                <label for="gender_0" class="custom-control-label">Pria</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="W"<?= 
                                $dokter_id && $dokter['gender'] == 'W' ? 'checked' : '' ?>>
                                <label for="gender_1" class="custom-control-label">Wanita</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                        <div class="col-8">
                            <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="<?= $dokter['tmp_lahir'] ??'' ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                        <div class="col-8">
                            <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" value="<?= $dokter['tgl_lahir'] ??'' ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telpon" class="col-4 col-form-label">Telpon</label>
                        <div class="col-8">
                            <input id="telpon" name="telpon" type="email" class="form-control" value="<?= $dokter['telpon'] ??'' ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-4 col-form-label">Alamat</label>
                        <div class="col-8">
                            <textarea id="alamat" name="alamat" cols="40" rows="2" class="form-control"><?= $dokter['alamat'] ??'' ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelurahan" class="col-4 col-form-label">Unit Kerja</label>
                        <div class="col-8">
                            <select id="kelurahan" name="kelurahan" class="custom-select">
                                <option disable selected>---- Pilih Unit Kerja ----</option>
                                <?php foreach ($data_unit as $key => $unit) : ?>  
                                    <option <?= $dokter_id && $dokter['unit_kerja_id'] == $unit['id'] ?'selected' : '' ?> value="<?= $unit['id'] ?>"><?= $unit['nama']?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <input type="submit" name="proses_paramedik" id="proses_paramedik" class="btn btn-primary" value="<?= $dokter_id ? 'Ubah' : 
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