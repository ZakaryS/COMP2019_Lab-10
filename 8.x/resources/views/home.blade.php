<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1><br><br>
    <form action="/login" method="POST">
        @csrf
        <input type="text" name="username" required placeholder="name"><br>
        <input type="password" name="password" required placeholder="password"><br>
        <button type="submit">Login</button>
    </form>
    <p>Not a member yet? Please <a href="/register">Sign Up</a> here</p>
</body>
</html>