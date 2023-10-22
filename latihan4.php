<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>

<body>

    <?php
    function Prima($j)
    {
        if ($j <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($j); $i++) {
            if ($j % $i == 0) {
                return false;
            }
        }
        return true;
    }
    echo "Pengulangan untuk Mencari kategori bilangan :";
    echo "<br>";
    for ($i = 1; $i <= 19; $i++) {
        echo "<br>";
        if ($i % 2 == 0) {
            echo "<li>Angka $i adalah bilangan genap";
        } else {
            echo "<li>Angka $i adalah bilangan ganjil";
        }

        if (Prima($i)) {
            if ($i > 10) {
                echo " dan sekaligus bilangan prima";
            } else {
                echo " sekaligus bilangan prima";
            }
        }
    }

    ?>


</body>

</html>