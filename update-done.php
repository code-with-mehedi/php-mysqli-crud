<?php
require 'db.php';
if (isset($_GET['id'])) {
    $id=$_GET['id'];
}

if (isset($_POST['submit'])) {
    if (isset($_POST['name'])) {
        $name=$_POST['name'];
    }
    if (isset($_POST['email'])) {
        $email=$_POST['email'];
    }
    
    $update=" UPDATE students 
    SET name='$name' , email='$email'
    WHERE id=$id";
    if ($con->query($update) == true) {
        echo "data updated successfully";
        header('Location: view.php');
    } else {
        echo "Error $update $con->error";
    }
}
