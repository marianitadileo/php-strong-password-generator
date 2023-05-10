<?php 
$elements = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@%&-+*.;,";
$length = $_GET["length"];

if($length && is_numeric($length)) {
    for($i = 0; $i < $length; $i++) {
        $number = rand(0, strlen($elements));
        $password .= $elements[$number];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <div class="containe">
        <h1>Password Generator</h1>
        <h2>Genera la tua password sicura</h2>
        <form action="index.php" method="GET">
            <label for="length">La lunghezza della tua password:</label>
            <input type="text" id="length" name="length">
            <button type="submit">Invia</button>
        </form>
        <h2>La tua password è: <?php echo $password ?></h2>
    </div>
</body>
</html>