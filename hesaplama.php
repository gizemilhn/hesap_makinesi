<?php
function hesaplama($num1, $num2, $operator) {
    if ($operator == "+") {
        return $num1 + $num2;
    } elseif ($operator == "-") {
        return $num1 - $num2;
    } elseif ($operator == "*") {
        return $num1 * $num2;
    } elseif ($operator == "/") {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Sıfıra bölme hatası!";
        }
    } else {
        return "Geçersiz operatör!";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen değerleri kontrol et
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        $result = hesaplama($num1, $num2, $operator);
    } else {
        echo "Hata: Form verileri eksik!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesap Makinesi</title>
</head>
<body>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($result)) : ?>
        <h2>Sonuç: <?php echo $result; ?></h2>
    <?php else: ?>
        <h2>Sonuç: </h2>
    <?php endif; ?>
    <a href="index.php">Geri Dön</a>
</body>
</html>
