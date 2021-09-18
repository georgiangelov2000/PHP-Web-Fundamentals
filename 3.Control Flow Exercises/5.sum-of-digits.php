<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        Input string: <input type="text" name="input" required>
        <input type="submit" value="Submit" name="button">
    </form>

    <table>
        <?php 
        
        if(isset($_GET['input'])){
            $input = $_GET['input'];
            $inputArr = explode(",", $input);

            foreach($inputArr as $item){
                if (strval($item) == strval(intval($item))) {
                    $digitSum = array_sum(str_split($item));
                }else{
                    $digitSum = "I cannot sum that";
                }
                echo "<tr><td>$item</td><td> = $digitSum</td></tr>";
            }

        }

        ?>
    </table>
</body>

</html>