<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $pagina_inicio = file_get_contents('ex34.txt');
        $datosSeparados = array_filter(explode("## ", $pagina_inicio));

        foreach ($datosSeparados as $titulo) {
            echo "<h1>$titulo</h1>";
            echo "<br>";
        }

    ?>  

</body>
</html>