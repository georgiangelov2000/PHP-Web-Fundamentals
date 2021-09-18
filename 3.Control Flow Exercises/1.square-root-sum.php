<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid;
            padding: 1px;
        }

        th,
        td {
            border: 1px solid;
            padding: 1px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Number</th>
            <th>Square</th>
        </tr>
        <?php
        $total = 0;
        for ($i = 0; $i <= 100; $i++) {
            $root = round(sqrt($i), 2);
            $total += $root;
            echo "<tr><td>{$i}</td><td>{$root}</td></tr>";
        }
        ?>
        <tr>
            <td><b>Total:</b></td>
            <td><?php echo $total ?></td>
        </tr>
    </table>
</body>

</html>