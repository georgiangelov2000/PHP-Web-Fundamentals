<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            table-layout: fixed;
        }
        td {
            border: 1px solid saddlebrown;
            padding: 5px;
        }
        #keys{
            background: sandybrown;
        }
        #values{
            text-align: right;
        }
    </style>
</head>
<body>

<?php 
    $info=[];
    $info['name']='Yoana';
    $info['Phone Number']="0896831628";
    $info['age']='10';
    $info['address']='Someplace nice';
?>

<table>
    <?php  foreach($info as $key => $value): ; ?>
    <tr>
    <td id = "keys"><?php echo $key;?></td>
    <td id = "values"><?php echo $value;?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
<!-- 
second variant

<?php 

$name="George";
$number="0896831628";
$age="24";
$address="peyo yavorov 16";

 echo "<table> 
    <tbody> 
    <tr> 
        <td> Name:  $name || </td>
        <td> Number: $number || </td> 
        <td> Age: $age || </td>
        <td> Addres: $address || </td>
    </tr>
    </tbody>
 </table>"

?> -->