<?php
    require "action/add_action.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
        <label for="">Model: </label>
        <input type="text" name="model">
        <label for="">Brand:</label>
        <input type="text" name="brand">
        <label for="">Quantity: </label>
        <input type="number" name="quantity">
        <label for="">Image: </label>
        <input type="file" name="image" accept=".jpg, .jpeg, .png">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>