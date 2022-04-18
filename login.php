<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="frm">
        <form action="process.php" method="POST">
            <h1>Welcome to GADS Platform</h1>
            <p>
                <label for="Username">Username:</label>
                <input type="text" id="user" name="user" placeholder="Enter user id">
            </p>
            <p>
                <label for="Password">Password:</label>
                <input type="password" id="pass" name="pass" placeholder="enter pass code">

            </p>
            <p>
                <input type="submit" id="btn"  value="Login">
            </p>
        </form>

    </div>
    
</body>
</html>