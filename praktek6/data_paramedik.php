<?php 
require_once "db_koneksi.php";

//Ngambil data 
$sql = "SELECT * FROM paramedik";
//Query
$getdokter = $dbh->query($sql);
 
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

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">DATA PARAMEDIK</h3>
        </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama </th>
                  <th>tempat lahir</th>
                  <th>Alamat</th>
                  <th>Unit Kerja</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($getdokter as $key => $dokter) : ?>
                  <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $dokter['nama'] ?></td>
                    <td><?= $dokter['tmp_lahir'] ?></td>
                    <td><?= $dokter['alamat'] ?></td>
                    <td><?= $dokter['unit_kerja_id'] ?></td>
                    <td>
                      <a href="./form_paramedik.php?id=<?= $dokter['id'] ?>" class="btn ntn-sm btn-warning">Ubah</a>
                      <form action="./proses_paramedik.php?id<?= $dokter['id'] ?>" method="POST">
                      <input type="submit" name="proses" class="btn btn-sm btn-danger" value="Hapus">
                      </form>
                    <input type="submit" >
                    </a>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>        
          </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php 
include_once "layout/bottom.php";
?>