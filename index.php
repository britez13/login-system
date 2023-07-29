<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sign up</h1>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="username">
        <input type="password" name="pwd" id="pwd" placeholder="password">
        <input type="password" name="pwdrepeat" id="pwdrepeat" placeholder="repeat password">
        <input type="email" name="email" id="email" placeholder="email">
        <button type="submit">Sign up</button>
    </form>
    <form action="includes/login.inc.php" method="post">
        <h2>Login</h2>
        <input type="text" name="uid" placeholder="username">
        <input type="password" name="pwd" id="pwd" placeholder="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>