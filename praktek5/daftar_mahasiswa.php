<?php 
require_once './class_mahasiswa.php';

$apis = new Mahasiswa('02011', 'Apis Ngaku Nabi');
$alisya = new Mahasiswa('02012', 'Alisya Syafitri');
$dewi = new Mahasiswa('01011', 'Dewi Zakam');
$ardy = new Mahasiswa('01013', 'Ardy Muhammad');

$apis->prodi = 'TI';
$apis->thn_angkatan = '2012';
$apis->ipk = '3.8';

$alisya->prodi = 'TI';
$alisya->thn_angkatan = '2021';
$alisya->ipk = '2.8';

$dewi->prodi = 'SI';
$dewi->thn_angkatan = '2023';
$dewi->ipk = '3.8';

$ardy->prodi = 'SI';
$ardy->thn_angkatan = '2022';
$ardy->ipk = '2.8';

$ar_mahasiswa = [$apis, $alisya, $dewi, $ardy];

echo "<br>". $apis->nim;
echo "<br>". $apis->prodi;
echo "<br>". $apis->thn_angkatan;
echo "<br>". $apis->ipk;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ar_mahasiswa as $key => $mahasiswa): ?>   
                <tr>
                    <th scope="row"><?= ++$key ?></th>
                    <td><?= $mahasiswa->nim ?></td>
                    <td><?= $mahasiswa->nama ?></td>
                    <td><?= $mahasiswa->prodi ?></td>
                    <td><?= $mahasiswa->thn_angkatan ?></td>
                    <td><?= $mahasiswa->ipk ?></td>
                    <td><?= $mahasiswa->predikat_ipk() ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
