<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>INTRODUEIX DADES</p>
    <form action="" method="POST">
    <textarea name="comentari" rows="4" cols="50"></textarea>
    <br>
    <label for="separador">SEPARADOR</label>
    <input type="text" id="separador" name="separador">    
    <input type="submit" value="Enviar">

    <?php

        if(isset($_POST["comentari"]) && isset($_POST["separador"])) {
            
            $file = fopen("comentaris.txt", "a");

            $separador = $_POST["separador"];
            $comentari = $_POST["comentari"];

            $replacedText = str_replace(" ", $separador, $comentari);

            echo "<p>$replacedText</p>";

            fwrite($file, $replacedText."\n");

            fclose($file);
        }
        


    ?>

</form>
</body>
</html>