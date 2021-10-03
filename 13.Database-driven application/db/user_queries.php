<?php 
    function register(PDO $connection, string $username, string $password): bool{
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $query = "INSERT INTO users (username,password) VALUES(?,?)";
        echo $query;
    
        $statement = $connection->prepare($query);
        $result = $statement->execute([
            $username,
            password_hash($password, PASSWORD_ARGON2I)
        ]);
        return $result;
    }
?>