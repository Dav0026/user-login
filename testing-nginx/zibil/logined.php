<?php
session_start();
var_dump($_SESSION["username"]);
if (!$_SESSION["username"]){
    header('Location: /');
}
include_once 'remember.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registration</title>
</head>
<body>

<div class="container">
    <label><b> successfully logged in</b></label><br>
    <form method="post" action="/logout">
        <button type="submit" name="logout"
        >logout</button>
        <br>
    </form>
</div>
</body>
</html>

<?php
