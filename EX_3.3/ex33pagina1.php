<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php

        $file = fopen("ex33.txt", "r");
        while(!feof($file)) {

            $line = fgets($file);
            echo "<p>$line</p>";
            echo "<hr>";
        }
        fclose($file);

        if(isset($_POST["comentari"])){
            $file = fopen("ex33.txt", "a");
            fwrite($file, "\n".$_POST["comentari"]);
            echo "<p>".$_POST["comentari"]."</p>";
            fclose($file);
        }

    ?>

    <form action="" method="POST">
    <textarea name="comentari" rows="4" cols="50"></textarea>  
    <input type="submit" value="Enviar">
    </form>

</body>
</html>