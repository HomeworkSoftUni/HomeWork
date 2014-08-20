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
            $arr = $_POST['inputs']; 
            $wors = preg_split('/[ ,]+/', $arr);
            for ($i = 0; $i < count($wors); $i++) {
                echo $i . " :" . $wors[$i] . "</br>";
            }
        }
        ?>
    </body>
</html>
