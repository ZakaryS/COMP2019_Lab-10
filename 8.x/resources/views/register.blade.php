<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration</h1><br><br>
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="username" required placeholder="name"><br>
        <input type="email" name="email" required placeholder="email"><br>
        <input type="password" name="password" required placeholder="password"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>