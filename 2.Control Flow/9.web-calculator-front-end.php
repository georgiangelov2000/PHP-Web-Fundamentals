<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <div>
            Operation:
            <select name="operation">
                <option value="sum">Sum</option>
                <option value="subtract">Subtract</option>
            </select>
        </div>
        <div>
            Number 1:
            <input type="text" name="number-one" required>
        </div>
        <div>
            Number 2:
            <input type="text" name="number-two" required>
        </div>
        <?php if (isset($output)) :; ?>
            <div>
                Result:
                <input type="text" disabled="disabled" readonly="readonly" value="<?= $output; ?>">
            </div>
        <?php endif; ?>
        <div>
            <input type="submit" name="calculate" value="Calculate!">
        </div>
    </form>
</body>

</html>