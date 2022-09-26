<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registration</title>
</head>
<body>

<div class="container">
    <label><b> mail registration</b></label><br>
    <form method="post" action="/post-register">
        <label>Name</label><br>
        <input id="name" type="text" placeholder="Enter Name" name="name" required><br>
        <label>Surname</label><br>
        <input id="surname" type="text" placeholder="Enter surname" name="surname" required><br>
        <label>User name</label><br>
        <input type="text" placeholder="Enter Username" name="email" required><br>
        <label>password</label><br>
        <input type="password" placeholder="Enter Password" name="password" required><br>
        <input type="password" placeholder="Submit Password" name="submitPassword" required><br>
        <input id="phone_number" type="text" placeholder="+374-97-22-22-22" name="phone_number" required><br>
        <button type="submit">registration</button>
        <br>
    </form>
</div>
</body>
</html>