<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <div class="container mt-3">
    <fieldset>
      <legend>Form Registrasi IT Club DataScience</legend>

      <form>
        <div class="row mb-3">
          <label for="nim" class="col-sm-2 col-form-label">NIM</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nim" name="nim">
          </div>
        </div>
        <div class="row mb-3">
          <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
          </div>
        </div>
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
          <div class="col-sm-10">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamimn" id="jenis_kelamimn" value="option1" checked>
              <label class="form-check-label" for="laki-laki">
                Laki-Laki
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamimn" id="jenis_kelamimn" value="option2">
              <label class="form-check-label" for="perempuan">
                Perempuan
              </label>
            </div>
          </div>
        </fieldset>
        <div class="row mb-3">
          <label for="nim" class="col-sm-2 col-form-label">Program Studi</label>
          <div class="col-sm-10">
            <select class="form-select" id="prodi" name="prodi">
              <option selected>Program Studi....</option>
              <option value="Bisnis Digital">Bisnis Digital</option>
              <option value="Sistem Informasi">Sistem Informasi</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label for="nim" class="col-sm-2 col-form-label">Skill Web & Programming</label>
          <div class="col-sm-10">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label" for="inlineCheckbox1">HTML</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">CSS</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Java Script</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            </div>
            <label class="form-check-label" for="inlineCheckbox2">RWD Bottstrap</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">PHP</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Python</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Java</label>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="nim" class="col-sm-2 col-form-label">Tempat Domisili</label>
          <div class="col-sm-10">
            <select class="form-select" id="domisili" name="domisili">
              <option selected>Domisili....</option>
              <option value="Bisnis Digital">Jakarta</option>
              <option value="Sistem Informasi">Bogor</option>
              <option value="Teknik Informatika">Depok</option>
              <option value="Sistem Informasi">Bekasi</option>
              <option value="Teknik Informatika">Tanggerang</option>
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="nim" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email">
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </fieldset>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>