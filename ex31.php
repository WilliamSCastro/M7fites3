<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>PROCESSA CONTACTES</p>

    <table style='border: 1px solid black; border-collapse: collapse;'> 
        <tr>
            <td style='border: 1px solid black; border-collapse: collapse; padding: 15px;'>NAME</td>
            <td style='border: 1px solid black; border-collapse: collapse; padding: 15px;'>FIRST SURNAME</td>
            <td style='border: 1px solid black; border-collapse: collapse; padding: 15px;'>SECOND SURNAME</td>
            <td style='border: 1px solid black; border-collapse: collapse; padding: 15px;'>TELEPHONE</td> 
        </tr>
    <?php

        $file = fopen("contactes31.txt", "r");
        

        while(!feof($file)) {

            $line = fgets($file);
            $lineSplitted = explode(", ", $line);

            $name = $lineSplitted[0];
            $surname1 = $lineSplitted[1];
            $surname2 = $lineSplitted[2];
            $telephone = $lineSplitted[3];

            echo "<tr>";
                echo "<td style='border: 1px solid black; border-collapse: collapse; padding: 15px;'>$name</td>";
                echo "<td style='border: 1px solid black; border-collapse: collapse; padding: 15px;'>$surname1</td>";
                echo "<td style='border: 1px solid black; border-collapse: collapse; padding: 15px;'>$surname2</td>";
                echo "<td style='border: 1px solid black; border-collapse: collapse; padding: 15px;'>$telephone</td>";
            echo "</tr>";

            $newFile = fopen("contactes31b.txt","a");
            fwrite($newFile,"$name# $surname1# $surname2# $telephone");
            fclose($newFile);

        }

        fclose($file);

    ?>

    </table>
    

</body>
</html>