<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Or go to <a href="login_form.php">login</a>, if you have an account
    <form method="post">
        Username:<input type="text" value="<?= $username; ?>" name="username" /><br />
        Pass: <input type="<?= !empty($password) ? 'text' : 'password'; ?>" value="<?= $password; ?>" name="password" /><br />
        <input type="submit" />
    </form>
    <div id="response">
        <?= $response; ?>
    </div>
</body>

</html>