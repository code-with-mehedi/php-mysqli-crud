<?php require "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>view</h1>
    <?php
        $viewq="SELECT * FROM students";
        $res=$con->query($viewq);
    ?>
    <table border="1px solid #d3d3d3">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><a href="update.php?id=<?php echo $row['id'] ?>">Edit</a></td>
                            <td><a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>

                        </tr>
                    <?php
            }
        }
        ?>

        
    </table>
</body>
</html>
