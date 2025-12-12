<?php
    function insert_user($username, $password){
        include "db.php";
        $stmt = $conn->prepare("INSERT INTO USERS (username, password) VALUES (?, ?)");
        $stmt->bind_param('ss', $username, $password);

        try{
            $stmt->execute();
            echo "User $username successfully added";
        } catch(mysqli_sql_exception $e){
            echo $e;
        } finally{
            $stmt->close();
        }
    }

    function insert_link(){}
?>