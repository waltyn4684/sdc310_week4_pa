<?php

// Opens the connection to the Week 4 product database
function get_db_conn()
{
    $hostname = "localhost";
    $username = "ecpi_user";
    $password = "Password1";
    $dbname = "sdc310_wk4pa";

    // Return the connection so the model can use it
    return mysqli_connect($hostname, $username, $password, $dbname);
}

?>