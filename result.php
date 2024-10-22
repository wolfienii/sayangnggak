<?php
$lovePercentage = $_POST['lovePercentage'];

if ($lovePercentage <= 50) {
    $message = "Kamu nggak sayang aku :(";
    $gif = "https://i.pinimg.com/originals/ae/d6/44/aed644271cae41c592365e2a69da40a2.gif"; // Ekspresi sedih
} else {
    $message = "Hehe aku juga sayang sama kamu!";
    $gif = "https://i.pinimg.com/originals/0d/60/f0/0d60f00b8deaaef010d4bdff8334027c.gif"; // Memberikan cinta
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1><?php echo $message; ?></h1>
        <img src="<?php echo $gif; ?>" alt="Response GIF" style="width: 100%; border-radius: 15px;">
    </div>
</body>
</html>
