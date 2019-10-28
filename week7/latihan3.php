<!DOCTYPE html>
<html>

<head>
<title> Faktorital </title>
</head>

<body>
    <h1>Menghitung Faktorial</h1>
    <form action="" name="" method="POST">
        <table>
            <tr>
                <td>Input Bilangan : </td>
                <td><input type="text" name="txtAngka" size="6" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="hasil" value="hasil" /></td>
            </tr>
        </table>

        <?php
        error reporting(0);
        if ($_POST['hasil'!='']){
            $bilangan = $_POST['txtAngka'];

            function faktorial($bilangan){
                if ($bilangan<=1){
                    $hasil=1;
                    return $hasil;
                } elseif ($angka>1){
                    for($i=1;$i<=$bilangan;$i++){
                        $hasil=$bilangan*faktorial($bilangan-1);
                    }
                    return $hasil;
                }
            }
            echo "\n";
            echo "Faktorial dari "." ".$bilangan." "."adalah:"." ". faktorial($bilangan);
        }
        ?>
    </form>
</body>
</html>