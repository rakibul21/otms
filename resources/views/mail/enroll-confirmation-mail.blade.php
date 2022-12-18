<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .div-one{
            height: auto;
            width: 60%;
            margin: 0 auto;
            background-color: red;
            color: white;
            text-align: center;
            padding: 40px;
        }
    </style>
</head>
<body>
<h1 class="div-one">
    <h4>Congratulation {{$value['name']}}, your enroll submit successfully.
        You may see your enroll status after login.</h4>
    <h5>Your login credential is given bellow</h5>
    <p>Login url: <a href="{{$value['login_url']}}" target="_blank">Click Here For Login</a></p>
    <h1>Email : {{$value['email']}}</h1>
    <h1>Password : {{$value['password']}}</h1>
    <hr/>
    <p>Thank you....</p>
</h1>
</body>
</html>
