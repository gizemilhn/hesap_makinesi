<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HESAP MAKİNESİ</title>
</head>
<body>
    <h2>HESAP MAKİNESİ</h2>
    <form method ="post" action ="hesaplama.php">
        <input type="BİRİNCİ SAYI" name="num1" required>
        <?php echo"<br>"
        ?>
        <select name="operator" required>
            <option value ="+">+</option>
            <option value ="-">-</option>
            <option value = "*">*</option>
            <option value = "/">/</option>
        </select>
        <?php echo"<br>"
        ?>
        <input type="İKİNCİ SAYI " name="num2"required>
        <?php echo"<br>"
        ?>
        <button type= "HESAPLA">HESAPLA</button>
    </form>
    <?php if($_SERVER["REQUEST_METHOD"]=="POST" && isset($result)):
    ?>
    <h3>Sonuc:<?php echo $result;?></h3>
    <?php endif; ?>

</body>
</html>