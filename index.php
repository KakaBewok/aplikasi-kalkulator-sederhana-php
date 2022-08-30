<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <title>Calculator - Noprizal</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <!-- navigasi -->
            <div class="nav">
                <h1>Calculator</h1>
            </div>
            <!-- konten -->
            <div class="main">
                <!-- menampilkan elemen operasi perhitungan -->
                <div class="operation">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form-operation">
                        <input type="number" class="input" name="bilangan1" placeholder="Input Bilangan 1" required/>
                        <input type="number" class="input" name="bilangan2" placeholder="Input Bilangan 2" required/>
                        <!-- kumpulan tombol-tombol operasi matematika -->
                        <div class="button-group">
                            <button class="button" name="tambah" type="submit">+</button>
                            <button class="button" name="kurang" type="submit">-</button>
                            <button class="button" name="kali" type="submit">x</button>
                            <button class="button" name="bagi" type="submit">:</button>
                        </div>
                    </form>

                    <?php
                        // menginisialisasi nilai awal variabel hasil
                        $_NILAI_AKHIR_TAMBAH = "";
                        $_NILAI_AKHIR_KURANG = "";
                        $_NILAI_AKHIR_KALI = "";
                        $_NILAI_AKHIR_BAGI = "";

                        // melakukan operasi perhitungan
                        if(isset($_POST['tambah'])){
                            $bilangan1 = $_POST['bilangan1'];
                            $bilangan2 = $_POST['bilangan2'];
                            $_NILAI_AKHIR_TAMBAH = $bilangan1 + $bilangan2;
                        } elseif(isset($_POST['kurang'])){
                            $bilangan1 = $_POST['bilangan1'];
                            $bilangan2 = $_POST['bilangan2'];
                            $_NILAI_AKHIR_KURANG = $bilangan1 - $bilangan2;
                        }elseif(isset($_POST['kali'])){
                            $bilangan1 = $_POST['bilangan1'];
                            $bilangan2 = $_POST['bilangan2'];
                            $_NILAI_AKHIR_KALI = $bilangan1 * $bilangan2;
                        }elseif(isset($_POST['bagi'])){
                            $bilangan1 = $_POST['bilangan1'];
                            $bilangan2 = $_POST['bilangan2'];
                            $_NILAI_AKHIR_BAGI = $bilangan1 / $bilangan2;
                        }
                        
                        // menampilkan hasil perhitungan 
                        echo '<div class="results">';
                        echo    "<h3>Hasilnya adalah : {$_NILAI_AKHIR_TAMBAH}{$_NILAI_AKHIR_KURANG}{$_NILAI_AKHIR_KALI}{$_NILAI_AKHIR_BAGI}</h3>";
                        echo '</div>';
                    ?>
                </div>
            </div>
            <!-- footer -->
            <div class="footer">
                <p><a href="https://www.instagram.com/_kkbwk" target="_blank">Noprizal - 2022</a></p>
            </div>
        </div>
    </div>
</body>
</html>