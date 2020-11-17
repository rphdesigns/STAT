<?php

    $link = mysqli_connect("localhost", "statdb", "P@ssword1234!", "ticket_test");

    if (mysqli_connect_error()){
        die ("There was an error connectiong to the database");
    }

?>