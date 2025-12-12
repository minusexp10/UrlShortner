<?php
    
    
    //while signing up, checks if the username already exists in the database
    function check_user_exists($username){
        include 'db.php';
        $stmt = $conn->prepare("SELECT * FROM USERS WHERE username = ? LIMIT 1");
        $stmt->bind_param('s', $username);
        try{
            $stmt->execute();
            $stmt->store_result();

            if($stmt->num_rows > 0){
                return true;
            }
            else{
                return false;
            }
        } catch(mysqli_sql_exception $e){
            echo $e;
        } finally{
            $stmt->close();
        }
    }

    #checks if the username contains any whitespaces
    function valid_username($username){
        for($i = 0; $i<strlen($username); $i++){
            if($username[$i] == ' ')
                return false;
        }
        return true;
    }

    function verify_user($username, $password){
        include 'db.php';
        if(check_user_exists($username)){
            $stmt = $conn->prepare('SELECT password FROM USERS WHERE username = ?');
            $stmt->bind_param('s', $username);
            try{
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();
                
                if($row['password'] == $password){
                    return true;
                }
                else   
                    return false;
            } catch(mysqli_sql_exception $e){
                echo $e;
            } finally{
            $stmt->close();
        }
        }
    }
?>