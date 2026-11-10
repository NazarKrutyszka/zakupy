<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <?php
        $array = [];
        $x = 3;
        $y = 2;
        for ($i=0; $i < $x * $y; $i++) 
        { 
            do
                {
                    $number = rand(1, 100);
                } while (in_array($number, $array));
            $array[$i] = $number;
        }
        for ($i=0; $i < $y; $i++)
            {
                echo "<tr>";
                for ($j=0; $j< $x; $j++) 
                { 
                    $wartość = $array[$i*$x + $j];
                    echo "<td>$wartość</td>";
                }
                echo "</tr>";
            }
    ?>
    </table>
</body>
</html>