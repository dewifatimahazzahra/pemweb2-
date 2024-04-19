<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktek3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php
    $ar_prodi = [
        'ti' => 'Teknik Informatika',
        'si' => 'Sistem Informasi',
        'bd' => 'Bisnis Digital'
    ];

    $ar_skill = [
        'html' => 10,
        'css' => 10,
        'js' => 20,
        'rwd' => 20,
        'php' => 30,
        'py' => 30,
        'jv' => 50
    ];
?>


</head>
<body>

    <div class="container mt-3">
        <fieldset>
            <legend>Form Regristrasi IT Club Data Science</legend>
            <form action="" method="POST">
                <div class="row mb-3">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nim">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama">
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="name" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="name">
                            <label class="form-check-label" for="gridRadios2">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="prodi" name="prodi">
                            <?php foreach ($ar_prodi as $key
                                => $value) : ?>
                                <option value="<?= $key ?>"><?= $value ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Skill web & Programming</legend>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="html" value="html">
                            <label class="form-check-label" for="inlineCheckbox1">HTML</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="css" value="css">
                            <label class="form-check-label" for="inlineCheckbox2">CSS</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="js" value="js">
                            <label class="form-check-label" for="inlineCheckbox3">JavaScript</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="rwd" value="rwd">
                            <label class="form-check-label" for="inlineCheckbox3">RWD Bootstrap</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="php" value="php">
                            <label class="form-check-label" for="inlineCheckbox3">PHP</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="py" value="py">
                            <label class="form-check-label" for="inlineCheckbox3">Python</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="jv" value="jv">
                            <label class="form-check-label" for="inlineCheckbox3">Java</label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <label for="prodi" class="col-sm-2 col-form-label">Tempat Domisili</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="prodi" name="prodi">
                            <option value="jkt">Jakarta</option>
                            <option value="dpk">Depok</option>
                            <option value="bgr">Bogor</option>
                            <option value="tg">Tanggerang</option>
                            <option value="bk">Bekasi</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="mail" class="col-sm-2 col-form-label">E=Mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="mail">
                    </div>
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </fieldset>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>