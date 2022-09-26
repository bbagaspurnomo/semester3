<?php

$nama = ["Ahmad", "Budi", "Chika","dhini", "Erwin"];

?>

<DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Looping for Array</title>
</head>
<body>
    <?php

    for ($i = 0; $i ++) {//count berguna untuk menentukan jumlah elemen ada array.
                         //sehingga looping akan berhenti ketika isi array sudah tampil.

    echo "<li>$nama[$i]</li>";                   
    }

?>
</body>
</html>

         