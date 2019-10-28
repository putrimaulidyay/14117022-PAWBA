<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/query.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
</head>

<body>
    <div class="container">
        <h1 align="center"> Biodata Mahasiswa </h1>

        <form method="POST" action="tugas_hasil.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama"> Nama : </label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter nama">
            </div>
            <div class="form-group">
                <label for="alamat"> Alamat : </label>
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Enter alamat">
            </div>

            <label for="jk" class="mr-5 mt-4 mb-4"> Jenis Kelamin : </label><br>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jk" value="Pria"> Pria <br>
                    <input type="radio" class="form-check-input" name="jk" value="Wanita"> Wanita <br>
                </label>
            </div><br>

            <div class="form-group">
                <label for="golongan"> Golongan Darah : </label>
                <select name="golongan" class="form-control" id="golongan">
                    <option value="A"> A </option>
                    <option value="B"> B </option>
                    <option value="AB "> AB </option>
                    <option value="O"> O </option>
                </select>
            </div>

            <label for="" class="mr- mt-4"> Hobby : </label>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="Membaca" name="hobi[]"> Membaca
                </label>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="Menulis" name="hobi[]"> Menulis
                </label>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-checl-input" value="Memasak" name="hobi[]"> Memasak
                </label>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checknox" class="form-check-input" value="Makan" name="hobi[]"> Makan
                </label>
            </div>

            <div class="form=group">
                <label for="keterangan"> Keterangan : </label>
                <textarea name="keterangan" id="ket" type="text" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">
            Simpan
            </button>
        </form>    
    </div>
</body>
</html>