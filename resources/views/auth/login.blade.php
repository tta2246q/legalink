<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="">
</head>

<body class="body1">
    <div class="login">
        <div class="logo3"><img class="logo2" src="/assets/wp-content/uploads/sites/6/2023/09/logo-demo-7.png"
                title="logo"></div>
        <br>
        <input class="text1" type="text" placeholder="Usrename">
        <br>
        <input class="pass1" type="password" placeholder="Password">
        <br>
        <a class="forgot" href="">Forgot password?</a>
        <br>
        <button class="but1" type="submit">Login</button>
        <p class="create">
            No account yet?
            <a class="create" href="{{ route('register') }}">Create now</a>
        </p>
    </div>
</body>

</html>
