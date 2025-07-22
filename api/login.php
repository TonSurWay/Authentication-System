<?php

    session_start();
    header('Content-Type: application/json');
    require_once '../config/db.php';

    $response = ['status' => 'error', 'message' => 'An unexpected error occurred.'];
    

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $username = trim($_POST['username']) ?? '';
        $password = $_POST['password'] ?? '';

    }

    // --- Validation server side ---
    if(empty($username) || empty($password)) {
        $response['message'] = 'Please enter your username and password.';
        echo json_encode($response);
        exit;
    }

    try{
        $sql = ("SELECT id, username, password FROM users WHERE username = :username");
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':username'=> $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user){
            // Verify Password
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['logged_in'] = true;

                $response['status'] = 'success';
                $response['message'] = 'Login successful! Redirecting to dashboard...';
                $response['redirect_url'] = 'dashboard.php';

            } else {
                $response['message'] = 'Invalid Username or Password.';
            }
        } else{
            $response['message'] = 'Invalid Username or Password.';
        }

        } catch (PDOException $e) {
            $response['message'] = 'Server error occurred.' . $e->getMessage();
        }  
    echo json_encode($response);
    exit;

?>