<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            Enter Tags: 
            <input type="text" name="inputs"/>
            <input type="submit" />
        </form>
        <?php
        if(isset($_POST['inputs'])){ 
            $tags = explode(", ", $_POST['inputs']); // Сплитва масива по запетайка и разстояние
            $c = array_count_values($tags); // функцията за която става въпрос - връща масив
            $val = array_search(max($c), $c); // намираме макса на масива
            arsort($c); // сортираме го по стойност
            foreach ($c as $key => $value) {
            echo "$key : $value times <br>"; // след това го принтим в този ред
            }
            echo "<p>Most Frequent Tag is: $val </p>"; 
        }
        ?>
    </body>
</html>