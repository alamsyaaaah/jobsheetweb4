<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Menggunakan for</h3>

    <?php
        for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i;
        }
        echo "<br>";
        }
    ?>

    <h3>Menggunakan while</h3>

    <?php
        $i = 1;
        while ($i <= 5) {
        $j = 1;
        while ($j <= $i) {
        echo $i;
        $j++;
        }
        echo "<br>";
        $i++;
        }
    ?>

    <h3>Looping for</h3>

    <?php
    function factorial($number) {
        $result = 1;
        for ($i = 1; $i <= $number; $i++) {
            $result *= $i;
        }
        return $result;
    }

    // Contoh penggunaan
    $number = 6;
    echo "Faktorial dari $number adalah: " . factorial($number);
    ?>

    <h3>Looping while</h3>

    <?php
    function factorialWhile($number) {
        $result = 1;
        $i = 1;
        while ($i <= $number) {
            $result *= $i;
            $i++;
        }
        return $result;
    }

    // Contoh penggunaan
    $number = 6;
    echo "Faktorial dari $number menggunakan while adalah: " . factorialWhile($number) . "<br>";
    ?>

    <h3>Lopping do-while</h3>

    <?php
    function factorialDoWhile($number) {
        $result = 1;
        $i = 1;
        do {
            $result *= $i;
            $i++;
        } while ($i <= $number);
        return $result;
    }

    // Contoh penggunaan
    $number = 6;
    echo "Faktorial dari $number menggunakan do-while adalah: " . factorialDoWhile($number) . "<br>";
    ?>

</body>
</html>