<?php
    require "../admin/action/connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent a Car</title>
</head>
<body>
    <table>
        <tr>
            <td>Model</td>
            <td>Brand</td>
            <td>Quantity</td>
            <td>Image</td>
        </tr>
        <?php
            $i = 1;
            $data = mysqli_query($conn, "SELECT * FROM carsTbl ORDER BY carId DESC")
        ?>

        <?php foreach($data as $row) : ?>
        <tr>
            <td><?php echo $row['model'] ; ?></td>
            <td><?php echo $row['brand']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><img src="../carsImg/<?php echo $row['image'];?>" alt=""></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>