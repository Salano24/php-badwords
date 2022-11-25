<?php
$paragrafo = $_GET['paragrafo'];
$censura = $_GET['censura'];



$newstring = str_ireplace($censura, "***", $paragrafo) ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
    <link rel="stylesheet" href="style.scss">
</head>
<body>
    <div class="container_result">
        
        <h1 class="string"> <?php echo $paragrafo."<br>";?> </h1>
        <h2 class="lunghezza"> <?php echo "Il seguente paragrafo è lungo " . strlen($paragrafo) ." caratteri"; ?> </h2>

        <br>

        <h1 class="string"> <?php echo $newstring ."<br>";?> </h1>
        <h2 class="lunghezza"> <?php echo "Il nuovo paragrafo è lungo " . strlen($newstring) ." caratteri"; ?> </h2>

    </div>
</body>
</html>