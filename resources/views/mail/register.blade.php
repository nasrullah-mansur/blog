<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello, {{ $user_info['username']}} <br> 
    Your email is, {{ $user_info['email'] }} <br>
    Your password is, {{ $user_info['password'] }}
</body>
</html>