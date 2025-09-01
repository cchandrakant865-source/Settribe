<?php 
        include 'connect.php';
        if(isset($_POST["login"])){
             $user_name = $_POST['user_name'];
             $password = $_POST['password'];

            
           $sql = "SELECT id, user_name FROM STUDENT WHERE user_name = '{$user_name}' AND password = '{$password}'";
            $result = mysqli_query($con, $sql) or die("Query failed");

            if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_assoc($result)){
                    session_start();
                    $_SESSION["user_name"] = $row['user_name'];
                    $_SESSION["id"] = $row['id'];

                    header("Location: {$localhost} /chandrakant/view.php");
                    
                }
            }else{
                
            $_SESSION['status'] = "login not Successfully";
            $_SESSION['status_code'] = "error";

                header("Location: login.php");
                exit(0);

            }
        }
        ?>