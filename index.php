<?php

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
    <div class="container">
        <form action="greetings.php" method="get">

        <div >
            <label for="paragrafo">Testo</label>
            <input type="text" name="paragrafo" id="paragrafo" placeholder="Inserisci il tuo testo...">
        </div>
       <div>
         <label for="censura">Censura</label>
        <input type="text" name="censura" id="censura" placeholder="Censura...">
       </div> 
        <div class="button">
           <button type="submit">invio</button>
        <button type="reset">reset</button> 
        </div>
        
    </div>
   
       
      
    </form> 
</body>
</html>