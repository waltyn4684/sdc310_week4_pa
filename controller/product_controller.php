<?php

require_once('../model/product_db.php');

// Get the product records and organize them for the view
function get_products()
{
    $product_rows = get_all_products();
    $products = array();

    if ($product_rows)
    {
        // Go through each database record one at a time
        while ($row = mysqli_fetch_assoc($product_rows))
        {
            $products[] = array(
                "ProductNo" => $row["ProductNo"],
                "Name" => $row["Name"],
                "Type" => $row["Type"]
            );
        }
    }

    return $products;
}

?>