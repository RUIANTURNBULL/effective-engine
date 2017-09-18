<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--Author: Ian Turnbull
    Version: 12/6/16
    Itec 225 9am
    IanTurnbull.php
    Assignment 5-->

    <meta charset="utf-8" />
    <title>IanTurnbullCoffee</title>
</head>
<body>

<?php

echo $_POST["fn"];
echo $_POST["SumatranAmt"];
echo $_POST["FrenchAmt"];
echo $_POST["CaramelAmt"];
echo $_POST["DecafAmt"];
echo $_POST["pay"];

?>

<h2>Customer: <br></h2>

<table>
    <caption>Order Information</caption>

    <tr>
        <td>Product</td>
        <td>Unit Price</td>
        <td>Quantity Ordered</td>
        <td>Item Cost</td>
    </tr>
    <tr>
        <td>Sumatran Coffee</td>
        <td>$10.00</td>
        <td>sumatran</td>
        <td>item cost</td>
    </tr>
    <tr>
        <td>French Morning Roast</td>
        <td>$11.50</td>
        <td>french</td>
        <td>item cost</td>
    </tr>
    <tr>
        <td>Caramel Nut Roast</td>
        <td>$12.00</td>
        <td>caramel</td>
        <td>item cost</td>
    </tr>
    <tr>
        <td>Decaf</td>
        <td>$9.50</td>
        <td>decaf</td>
        <td>item cost</td>
    </tr>
</table>
</table>

<br>

<p>
You ordered "" pounds of coffee<br>
Your total bill is: $<br>
Your chosen method of payment is: ""<br>

<br>

Thank you ""
</p>


</body>
</html>