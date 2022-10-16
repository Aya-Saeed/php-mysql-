<?php
$conn = mysqli_connect("localhost", "root", "306306ay", "website");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>home page</title>
</head>

<body>
    <h2 class="headerhome">home page</h2>
    <table>

    </table>
    <form method="get" class="content">
        <table dir="ltr" style="font-size: 16px">
            <tr>
                <th> No.</th>
                <th>Item_Name</th>
                <th>Price</th>
                <th>expdate</th>
                <th>Type</th>
            </tr>
            <tr>
                <td> <?php
                        $result = mysqli_query($conn, "select * from items");
                        if (!$result) {
                            die("Error in query");
                        }
                        ?>
                    <?php

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li>' . $row['id'] . '</li>';
                    } ?>
                </td>
                <td> <?php
                        $result = mysqli_query($conn, "select * from items ");
                        if (!$result) {
                            die("Error in query");
                        }
                        ?>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li>' . $row['itemname'] . '</li>';
                    } ?></td>

                <td> <?php
                        $result = mysqli_query($conn, "select * from items");
                        if (!$result) {
                            die("Error in query");
                        }
                        ?>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li>' . $row['itemprice'] . '</li>';
                    } ?></td>

                <td> <?php
                        $result = mysqli_query($conn, "select * from items");
                        if (!$result) {
                            die("Error in query");
                        }
                        ?>
                    <?php

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li>' . $row['expdate'] . '</li>';
                    } ?></td>

                <td> <?php
                        $result = mysqli_query($conn, "select * from items");
                        if (!$result) {
                            die("Error in query");
                        }
                        ?>
                    <?php

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li>' . $row['type'] . '</li>';
                    } ?></td>
            </tr>
        </table>
        <p>Go to admin panel<a href="admin.php">Admin</a></p>
    </form>
</body>

</html>