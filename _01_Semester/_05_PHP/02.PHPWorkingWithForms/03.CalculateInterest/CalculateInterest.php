<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            <span>Enter Amout</span>
            <span><input type="text" name="Amout"></span></br>
            <input type="radio" name="currency" value="USD">USD
            <input type="radio" name="currency" value="EUR">EUR
            <input type="radio" name="currency" value="BNG">BNG</br>
            <span>Compound Interest Amount</span>
            <span><input type="text" name="Compound"></span></br>
            <select name="times">
                <option value="6">6 Months</option>
                <option value="1">1 Year</option>
                <option value="2">2 Years</option>
                <option value="5">5 Years</option>
            </select>
            <input type="submit" value="Calculate">
        </form>
        <?php
        if (isset($_POST['Amout'])) {
            $amout = $_POST['Amout'];
        }
         if (isset($_POST['currency'])) {
            $currency = $_POST['currency'];
        }
         if (isset($_POST['Compound'])) {
            $compound = $_POST['Compound'];
        }
         if (isset($_POST['times'])) {
            $times = $_POST['times'];
        }
        
        if($times == '6') {
            $times = 6;
        }
        else if($times == '1') {
            $times = 12;
        }
        else if($times == '2') {
            $times = 24;
        }
        else {
            $times = 60;
        }
        
        $result = round($amout * pow(1 + (($compound / 100) / 12), $times / 12 * 12), 2);
        echo "Interest: " . $result . " " . $currency;
        ?>
    </body>
</html>
