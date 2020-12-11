<?php $activeTab = "login" ?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>recipe - login</title>
    <?php include_once("resources/cdn.php"); ?>
</head>

<body>
    <div class="d-flex justify-content-center login-row">
        <h1>login</h1>
    </div>
    <div class="d-flex justify-content-center login-row">
        <?php
            if (isset($_SESSION["loginError"])) {
                if ($_SESSION["loginError"] == true) {
                    echo '<p>That username was incorrect. Please Try again.</p>';
                }
            }
        ?>
    </div>
    <div class="d-flex justify-content-center login-row">
        <form action="server/scripts/login.php" method="post" name="loginForm">
            <input type="text" placeholder="username" name="username"></input>
    </div>

    <div class="d-flex justify-content-center login-row">
            <input type="submit" value="submit"></input>
        </form>
    </div>

    <style>
        .login-row {
            margin-top: 2em;
            margin-bottom: 1em;
        }
    </style>
</body>
</html>