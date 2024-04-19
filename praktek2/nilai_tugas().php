<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIK2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form method="POST" action="form_nilai.php">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="" size="30">
            </div>
            <div class="form-group">
                <label for="matkul">Mata Kuliah:</label>
                <select class="form-control" id="matkul" name="matkul">
                    <option value="DDP">Dasar - dasar Pemrograman</option>
                    <option value="BDI">Basis Data 1</option>
                    <option value="PWEB">Pemrograman Web</option>
                </select>
            </div>
            <div class="form-group">
                <label for="uts">Nilai UTS:</label>
                <input type="text" class="form-control" id="uts" name="uts" value="" size="6">
            </div>
            <div class="form-group">
                <label for="uas">Nilai UAS:</label>
                <input type="text" class="form-control" id="uas" name="uas" value="" size="6">
            </div>
            <div class="form-group">
                <label for="tugas">Nilai Tugas/Praktikum:</label>
                <input type="text" class="form-control" id="tugas" name="tugas" value="" size="6">
            </div>
            <button type="submit" class="btn btn-primary" name="proses" value="Simpan">Simpan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
