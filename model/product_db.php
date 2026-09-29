<?php

require_once('database.php');

// Get every product stored in the products table
function get_all_products()
{
    // Open the database connection
    $conn = get_db_conn();

    // Pull all three required product fields from the database
    $query = "SELECT ProductNo, Name, Type FROM products";
    $result = mysqli_query($conn, $query);

    return $result;
}

?>