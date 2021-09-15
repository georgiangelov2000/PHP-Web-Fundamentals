<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$person=[];
$person['name']='toshko';
$person['age']='25';
$person['male']='male';
$person['famale']='famale';

?>

<form>
    <input type="text" name="name" placeholder="Name..." required><br>
    <input type="text" name="age" placeholder="Age..." required><br>
    <input type="radio" name="gender" value="male" checked> Male <br>
    <input type="radio" name="gender" value="female"> Female <br>
    <input type="submit" value="Submit">
</form>

<?php 

if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];

    echo "My name is {$name}. I am {$age} years old. I am {$gender}.";

}

?>

</body>
</html>

