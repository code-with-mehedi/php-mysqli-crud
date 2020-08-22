<?php
require "db.php";
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $deleteQuery="DELETE from students where id=$id";
    if ($con->query($deleteQuery) === true) {
          echo "Record deleted successfully";
          header('Location: view.php');
    } else {
        echo "Error deleting record: " . $con->error;
    }

    $con->close();
}
