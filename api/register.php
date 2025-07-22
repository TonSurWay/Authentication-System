<?php

    header('Content-Type: application/json');

    require_once '../config/db.php';

    $response = ['status' => 'error', 'message' => 'An unexpected error occurred.'];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
        // Get data From POST request
        $username = trim($_POST['username']) ?? '';
        $email = trim($_POST['email']) ?? '';
        $password = $_POST['password']  ?? '';
        $confirm_password = $_POST['confirm_password']  ?? '';


        // --- Validation Server side ---
        if(empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
            $response['message'] = 'Please fill you info';
            echo json_encode($response);
            exit;
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response['message'] = 'Email format is invalid';
            echo json_encode($response);
            exit;
        }

        if(strlen($password) < 8) {
            $response['message'] = 'Password must be at least 8 character long.';
            echo json_encode($response);
            exit;
        }

        if($password !== $confirm_password) {
            $response['message'] = 'Password and Confirm Password do not match.';
            echo json_encode($response);
            exit;
        }

        try{
            // Check for existing email.
            $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            if ($stmt->fetch()) {
                    $response['message'] = 'Email already exists.';
                    echo json_encode($response);
                    exit;
            }

            // Check for existing username.
            $stmt = $pdo->prepare("SELECT id FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();

            if ($stmt->fetch()) {
                    $response['message'] = 'Username already exists.';
                    echo json_encode($response);
                    exit;
            }

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":username", $username);               
            $stmt->bindParam(":email", $email);             
            $stmt->bindParam(":password", $hashedPassword);                  
            

            if($stmt->execute()){
                $response['status'] = 'success';
                $response['message'] = 'Registration is successful!';
            } else {
                $response['message'] = 'An error occured while saving data to the database.';
            }


        }catch (PDOException $e){
            $response['message'] = 'A server error occured' . $e->getMessage();
        }

    } else {
        $response['message'] = 'Invalid request method.';
    }
        echo json_encode($response);
        exit;
    
    
?>