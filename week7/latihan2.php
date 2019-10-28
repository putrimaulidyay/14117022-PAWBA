<!DOCTYPE html>
<html lang="en">

<head>
<title>Latihan2</title>
</head>

<body>
    <form action="" method="GET">
        <label for="nama">Nama : </label>
        <input type="text" name="nama \n">
        <label for="color">Color< : /label>

        <select name="color" id="">
            <option value="red">Merah</option>
            <option value="yellow">Kuning</option>
            <option value="green">Hijau</option>
            <option value="blue">Biru</option>  
        </select>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
        if(isset($_GET['submit'])){
            $a = $_GET['nama'];
            $b = $_GET['color'];

            function piliihan($nama){
                if(strlen($nama > 20)){
                    return ((strlen($nama))* 700);
                } elseif (strlen($nama > 11)){
                    return ((strlen($nama))* 500);
                } else {
                    return ((strlen($nama))* 300);
                }
            }

            echo "\n";
            echo "<font color='$b'>Nama : $a \n";
            echo "<font color='$b'>Harga bet untuk nama $a adalah : " .pilihan($a);
            
        }
        ?>
</body>
</html>
