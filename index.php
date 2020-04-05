<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <fieldset>
        <legend><h1>Future Value Calculator</h1></legend>
        <h2>Inventment Amount:</h2><input type="text" name="amount" placeholder="Tiền ban đầu"/>
        <h2>Yearly Interest Rate:</h2><input type="text" name="rate" placeholder="Lãi suất năm"/>
        <h2>Number of Years:</h2><input type="text" name="years" placeholder="Số năm đầu tư"/>
        <button type="submit">Calculate</button>
        <h3>Tổng tiền:</h3><span><?php
                if ($_SERVER['REQUEST_METHOD']=="POST"){
                    $money_first=$_POST['amount'];
                    $interest=$_POST['rate'];
                    $years=$_POST['years'];
                    $result= $money_first+(($money_first*$interest)/100)*$years;
                    echo $result."$";
                }
                ?></span>
    </fieldset>
</form>
</body>
</html>
