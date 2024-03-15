<?php

/**
 * fpm-auth-server - flutter-php-mysql authentication with push notifications(server part(php-mysql))
 *
 * PHP version 8.2.12
 *
 * @category    Frontend + Backend
 * @package     fpm-auth-server
 * @author      Hillary Chesaro
 * @license     Saro Labs
 * @link        https://github.com/Hillario/fpm-auth-server.git
 */

/**
 * login.php
 *
 * This is the API that sends and receives data from database to server 
 * 
 * @author Hillary Chesaro
 */

include "api/MySql.php";

$db = new MySql();

$json_data = file_get_contents('php://input');
$json_data_trimmed = trim($json_data);
$data = json_decode($json_data_trimmed, true); // true parameter to decode as associative array

$username = $data[0]['username'];
$password = $data[0]['password'];


//check if data is empty
if (!empty($username) && !empty($password)) {
    //Query database for authentication
    $dbQuery = "SELECT * FROM users WHERE username = '$username'";
    $dbSelect = $db->select($dbQuery);

    if (count($dbSelect) == 0) {
        // Send authentication response in JSON format
        echo json_encode(['success' => false, 'message' => 'Invalid username/password combination']);
    } elseif (count($dbSelect) == 1) {
        // Send authentication response in JSON format
        echo json_encode(['success' => true, 'message' => 'Login successful']);
    }
} else {
    // Send authentication response in JSON format
    echo json_encode(['success' => false, 'message' => 'Data is empty']);
}
