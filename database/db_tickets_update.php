<?php

include('db_connections.php');

$error = "";
$successMessage = "";

if(isset($_POST['submit'])){

    $owner = $_POST['owner'];
    $application = $_POST['application'];
    $status = $_POST['status'];
    $open_date = $_POST['open_date'];
    $poc = $_POST['poc'];
    $submit = $_POST['submit'];

    $owner = mysqli_real_escape_string($owner);
    
    
    
    $ticket_insert = "INSERT INTO `tickets` ( `owner`, `application`, `status`, `open_date`, `close_date`, `last_update`, `point_of_contact`, `external_ticket`, `ticket_description`, `work_notes`, `resolution_type`, `resolution_subtype`, `resolution_description`, `agent`) VALUES ('$owner', '$application', '$status', '$open_date', NULL, NULL, '$poc', NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
    
    if(isset($submit)&&!empty($owner)&&!empty($application)&&!empty($status)&&!empty($open_date)&&!empty($poc)){
        if(mysqli_query($link, $ticket_insert)){
            $successMessage = '<div class="alert alert-success" role="alert"><p>Ticket Submitted</p></div>';
        }else{
            $error ='<div class="alert alert-danger" role="alert"><p>ERROR</p></div>';
        }
    }
}



