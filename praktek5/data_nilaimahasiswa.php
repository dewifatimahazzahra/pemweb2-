<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php 
    require_once "class_nilaimahasiswa.php";
    ?>

<body>

  <div class="container mt-3">
    <fieldset>
      <legend>Form Nilai Ujian</legend>
        <hr>
      <form>
        <div class="row mb-3">
          <label for="nim" class="col-sm-2 col-form-label">NIM</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nim" name="nim">
          </div>
        </div>
        <div class="row mb-3">
          <label for="nim" class="col-sm-2 col-form-label">Mata Kuliah</label>
          <div class="col-sm-10">
            <select class="form-select" id="prodi" name="prodi">
              <option selected>MATKUL...</option>
              <option value="ddp">DDP</option>
              <option value="PWEB">PWEB</option>
              <option value="STATISTIK">STATISTIK</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label for="nim" class="col-sm-2 col-form-label">Nilai</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nilai" name="nilai">
          </div>
        </div>
        <hr>
        <?php 
        echo ""
        ?>

        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>

    </fieldset>
  </div>
    



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>