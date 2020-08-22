<?php require "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Basic Crud with PHP and mysqli | Update Data</h1>
    <?php
        $id=$_GET['id'];
        $viewq="SELECT * FROM students where id='$id'";
        $res=$con->query($viewq);
    ?>
    <form method="post" action="update-done.php?id=<?php echo $id; ?>">
          <?php
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    ?>
        <p>
            <label for="name" title="Name">Name
                <input type="text" value="<?php echo $row['name'] ?>" name="name" id="name" placeholder="Name" required>   
            </label>
        </p>
        <p>
            <label for="email" title="Email" >Email
                <input type="email" value="<?php echo $row['email'] ?>" name="email" id="email" placeholder="Email" required>
            </label>
        </p>
        <input type="submit" name="submit" value="submit">
                    <?php
                }
            }
            ?>
    </form>
</body>
</html>
