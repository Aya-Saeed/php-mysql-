<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>admin panel</title>
</head>

<body>
    <h2 class="headerhome">Admin panel</h2>
    <form method="get">
        <?php
        include('errors.php') ?>
        <label for="in">Item Name</label>
        <input type="text" name="itemname" id="in" value="<?php echo $itemname ?>" class="input">


        <label for="p">price</label>
        <input type="text" name="itemprice" id="p" value="<?php echo $itemprice ?>" class="input">

        <label for="a">Amount</label>
        <input type="text" name="amount" id="a" value="<?php echo $amount ?>" class="input">

        <label for="ed">Expiry Date</label>
        <input type="text" name="expdate" id="ed" value="<?php echo $expdate ?>" class="input">

        <label for="mylist">Types Of Product</label>


        <select id="mylist" name="type" style="font-size: 18px;">
            <option value="select-item">select-item</option>

            <option value="meat">meat</option>

            <option value="candy">candy</option>

            <option value="fruits">fruits</option>

            <option value="paperwork">paperwork</option>

            <option value="vegetables">vegetables</option>
        </select>
        <button type="submit" class="btn" name="send">save</button>
    </form>
</body>

</html>