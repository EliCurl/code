<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Order Summary</title>
        <link href="orderSummary.css" type="text/css" rel="stylesheet" />
    </head>

    <body>

    <?php
    if($_POST["items"] && $_POST["firstname"] && $_POST["lastname"] && $_POST["street"] && $_POST["city"] && $_POST["state"] && $_POST["zip"])
    {
        $items=$_POST["items"];
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        $street=$_POST["street"];
        $city=$_POST["city"];
        $state=$_POST["state"];
        $zip=$_POST["zip"];
        $total=0;
        $shipping=0;

        ?> 
        
        <h1>Order Summary</h1>
        <p>Thank you <?= $firstname ?> for your order to:</p>
        <p><?= $street ?></p>
        <p><?= $city ?>, <?= $state ?> <?= $zip ?></p>

        <p>You ordered the followeing</p>
        <table>
            <tr>
                <th>Item </th>
                <th>Price</th>
            <tr>


        <?php

        foreach($items as $item=>$price)
        {
            ?>
            <tr>
                <td><?= $item ?></td>
                <td><?= $price ?></td>
            </tr>
            <?php
            $total+=$price;
        }

        if ($total<50000){
            $shipping=250;
        } elseif($total<250000){
            $shipping=500;
        } else{
            $shipping=1000;
        }
        $total+=$shipping;
        ?>
        <tr>
            <td>Shipping</td>
            <td><?= $shipping ?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td><?= $total ?></td>
        </tr>
    </table>

    <?php
    }
    else
    {
        ?>
        <a href="Shop.html">Go back and complete the form properly</a>
        <?php
    }
    ?>

    </body>
</html>