<?php 

$nama = $_POST['namaa'];
$jabatan = $_POST['jabatan'];
$jamKerja = $_POST['jamKerja'];

function hitTotGaj($jabatan, $jamKerja) {
    include "array.php";

    foreach ($datas as $data) {
        if($data['jabatan'] == $jabatan){
            return $data['gajiPerjam'] * $jamKerja;
        }
    }
}

if ($nama != NULL && $jabatan != NULL && $jamKerja != NULL) {
    $total = hitTotGaj($jabatan, $jamKerja);
    
    $result = [$nama, $jabatan, $total];
} else {
    header("location:index.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1>Perhitungan</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card mt-5">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Name</td>
                                <td><?= $result[0] ?></td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td><?= $result[1] ?></td>
                            </tr>
                            <tr>
                                <td>Total gaji</td>
                                <td><?= number_format($result[2], 0, 2) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>