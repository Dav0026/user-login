<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

<div class="container">
    <form method="post" action="/post-login">
        <label><b>Username</b></label><br>
        <label>
            <input type="text" placeholder="Enter Username" name="username" required>
        </label><br>
        <label><b>Password</b></label><br>
        <label>
            <input type="password" placeholder="Enter Password" name="password" required>
        </label><br>
        <?php
        if (isset($_SESSION) && $_SESSION['error']) {
            echo "<span style='color: red' > {$_SESSION['error']  } </span> ";
            $_SESSION['error'] = null;
        }
        ?>


        Remember me: <label>
            <input type="checkbox" name="remember">

        </label> <br>
        <button id="submit" type="submit">Login</button>
    </form>


    <!--        <label>-->
    <!--    <input type="checkbox" checked="checked" name="remember"> Remember me<br>-->
    <!--      </label>-->
    <!--        <form  method="post">-->
    <!--        </form>-->
    <a href="/View/login/registration.php">
        <button name="registration"> registration</button>
    </a>
</div>
<div class="container" style="background-color:#f1f1f1">
    <!--          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>-->
    <a href="/zibil/forgotPassword.php">Forgot password?</a>

</div>
<!--</form>-->
<!--</div>-->


</body>
</html>

