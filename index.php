<?php 
include "array.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devlearn 4</title>
    <style>
        h1{
            justify-content: center;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <h1>Aizan Syalim</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card mt-5">
                    <div class="card-body">
                        <h5>Perhitungan Gaji</h5>
                        <hr>
                        <form action="proses.php" method="post">
                            <input type="text" name="namaa" class="form-control mb-3" placeholder="Masukkan Nama" required>
                            <select name="jabatan" id="" class="form-control mb-3">
                                
                                <option  disabled selected> Pilih Jabatan</option>
                                <?php 
                                foreach($datas as $data){
                                
                                ?>

                                <option value="<?php echo $data['jabatan']?>"> <?php echo $data['jabatan']?></option>
                                
                                <?php 
                                }
                                ?>
                                
                            </select>

                            <input type="number" name="jamKerja" class="form-control mb-3" placeholder="jam kerja" required>
                            <input type="submit"  value="Hitung" class="btn btn-primary px-4" >
                            <input type="reset"  value="Reset" class="btn btn-danger px-4" >

                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>