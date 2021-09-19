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
            margin-left: 80px;
            margin-top: 30px;
        }

        th,
        td {
            border: 1px solid;
            padding: 3px;
            text-align: left;
            width: auto;
        }
    </style>
</head>

<body>
    <form action="">
        <div>
            <textarea name="input" rows="2" cols="50" required></textarea>
        </div>
        <div>
            <input type="submit" value="Count words" name="countBtn">
        </div>
    </form>

    <?php

    if (isset($_GET['input'])) :
        $input = $_GET['input'];
        $words = array_filter(preg_split("/[^a-z]+/i", $input));
        $words = array_map('strtolower', $words);
        $occurrences = array_count_values($words);
        $table = '';
        foreach ($occurrences as $word => $count) {
            $table .= "<tr><td>$word</td><td>$count</td></tr>";
        }
    ?>
        <table border='2'><?= $table ?></table>

    <?php endif; ?>

</body>

</html>