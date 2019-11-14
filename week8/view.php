<?php
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "week8");

    $hasil = mysqli_query($conn, "select * from bukutamu");
    $jumlah = mysqli_num_rows($hasil);

    echo "DAFTAR PENGUNJUNG";
    echo "Jumlah Pengunjung : $jumlah";

    $x = 1;
    while ($baris = mysqli_fetch_array($hasil)){
        echo "<br>";
        echo $x;
        echo "<br>";
        echo "Nama      : ";
        echo $baris[0];
        echo "<br";
        echo "Email     : ";
        echo $baris[1];
        echo "<br";
        echo "Komentar  : ";
        echo $baris[2];
        $x++;
    }