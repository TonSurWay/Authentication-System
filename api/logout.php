<?php
session_start();
header('Content-Type: application/json');


$response = ['status' => 'error', 'message' => 'logout failed'];

$_SESSION = array();

if(session_destroy()) {
    $response['status'] = 'success';
    $response['message'] = 'Logged out successsfully';
} else {
    $response['message'] = 'Failed to destroy the session';
}

echo json_encode($response);
exit;

?>