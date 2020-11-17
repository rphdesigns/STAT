<?php 

require_once('db_connections.php');

$ticket_query = "SELECT * FROM tickets";

    if($ticket_results = mysqli_query($link, $ticket_query)){

        $ticket_display_row = mysqli_fetch_array($ticket_results);

    }

?>