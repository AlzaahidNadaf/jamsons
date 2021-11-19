<?php
include('../includes/connection.php');
$id = $_GET['company_id'];
if ($conn->connect_error) {
    echo "there was error";
} else {
    echo $sql = "DELETE FROM company WHERE company_id=$id";
    
    $conn->query($sql);
    header('location:../list-brands.php');
}
