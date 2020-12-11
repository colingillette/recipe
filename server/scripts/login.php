<?php

require_once("domain/user.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
}

$conn = new mysqli("localhost","develop","develop","recipe");
if ($conn->connect_error) {
    exit();
}

$query = $conn->prepare("select id, username, displayName, joinDate, lastLogin, role from users where username = ?");
$query->bind_param("s", $username);
$query->execute();
$result = $query->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $user = new User();
        
        $user->setId($row["id"]);
        $user->setUsername($row["username"]);
        $user->setDisplayName($row["displayName"]);
        $user->setJoinDate($row["joinDate"]);
        $user->setLastLogin($row["lastLogin"]);
        $user->setRole($row["role"]);
        $user->setIsLoggedIn(true);

        $_SESSION["user"] = $user;
        logNewLogin($user, $conn);
        header('Location: /recipe/index.php');
    }
    
    $_SESSION["loginError"] = false;
} else {
    $_SESSION["loginError"] = true;
    header('Location: /recipe/login.php');
}

$query->close();
$conn->close();

//------------------------------
// Functions
//------------------------------

function logNewLogin($user, $conn) {
    $lastLoginQuery = $conn->prepare("update users set lastLogin = now() where id = ?");
    $lastLoginQuery->bind_param("i", $user->getId);
    $lastLoginQuery->execute();
    $lastLoginQuery->close();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>