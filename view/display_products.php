<?php

// Load the controller and get the products for this page
require_once('../controller/product_controller.php');
$product_arr = get_products();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Week4 PA - Wallace Tyner</title>

    <style>
        table {
            border-spacing: 5px;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: lightskyblue;
        }

        tr:nth-child(even) {
            background-color: whitesmoke;
        }

        tr:nth-child(odd) {
            background-color: lightgray;
        }
    </style>
</head>

<body>

    <h2>Current Products:</h2>

    <table>
        <tr>
            <th>Product #</th>
            <th>Name</th>
            <th>Type</th>
        </tr>

        <?php foreach ($product_arr as $product): ?>
            <tr>
                <td><?php echo $product["ProductNo"]; ?></td>
                <td><?php echo $product["Name"]; ?></td>
                <td><?php echo $product["Type"]; ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>
</html>