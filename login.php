<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form method="get">
        <?php include('errors.php') ?>
        <h2 class="header">login</h2>
        <label for="un">User_Name</label>
        <input type="text" name="username" value="<?php echo $username ?>" class="input" id="us">
        <label for="p">password</label>
        <input type="password" name="pass" value="<?php echo $password ?>" class="input" id="p">
        <button type="submit" class="btn" name="login">login</button>
        <p>Not Have Account?<a href="register.php">register</a></p>

        <!--<?php //echo $username 
            ?>  -->
        <?php //echo $password 
        ?>
    </form>
</body>

</html>