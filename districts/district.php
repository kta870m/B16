<?php
    require_once("database.php");
    require_once("function.php");

    get_connection();
    $rows=getAllDistrict();
    check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        table,tr,th,td{border: 1px solid black}
</style>
<body>
        <h2>District List</h2>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Provices_id</th>
                <th>Action</th>
            </tr>
            <?php foreach($rows as $row){ ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['provices_id']?></td>
                    <td><a href="edit-district.php?id=<?php echo $row['id']; ?>?provices_id=<?php echo $row['provices_id']?>">Edit</a></td>
                    <td><a href="delete-district.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
            <?php } ?>

        </table>
        <a href="add-district.php">Add</a>
        <p><a href="logout.php">Logout</a></p>

</body>
</html>