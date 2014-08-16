<!DOCTYPE html>

<html>
    <head>
        <title>PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        $month = date("F");
        $year = date("Y");
        $totalDays = date("t");

        for($i = 1; $i <= $totalDays; $i++) {
            $date = strtotime("$i $month $year");
            if(date("l", $date) == "Sunday") {
                echo date("jS F, Y", $date) . "</br>";
            }
        }
        ?>
    </body>
</html>
