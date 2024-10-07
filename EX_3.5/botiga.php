<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="GET">

        <input type="text" name="nombre">

        <?php

            $productos = file("productes.txt");

            foreach ($productos as $producto) {

                echo "<div>";
                echo "<input type='checkbox' id='$producto' name='productos[]' value='$producto'/>";
                echo "<label for='$producto'>$producto</label>";
                echo "</div>";

            }

        ?>

        <input type="submit" value="Hacer Pedido">
    </form>

    <?php

        if(isset($_GET["productos"]) && isset($_GET["nombre"])){

            $string = $_GET["nombre"];

            foreach ($_GET["productos"] as $product){
                $string .= ", ".trim($product);
            }

           $string .= ".\n";
            echo $string;

            $file = fopen("comanda.txt","a");
            fwrite($file, $string);
            fclose($file);

        }
        

    ?>

</body>
</html>