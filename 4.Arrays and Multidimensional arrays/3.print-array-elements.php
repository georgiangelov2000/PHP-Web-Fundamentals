<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        $numbers = [10, 20, 30, 40, 50];
        for ($i = 0; $i < count($numbers); $i++) :;  ?>
            <li><?php echo $numbers[$i]; ?></li>
        <?php endfor; ?>
    </ul>


</body>

</html>