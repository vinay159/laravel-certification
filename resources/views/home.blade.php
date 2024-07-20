<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>
    @auth
        <div>
            <h1>Login Successfully</h1>
            <form action="/logout" method="POST">
                @csrf
                <button>Logout</button>
            </form>
        </div>
    @else
        <div style="border: 1px solid #000; padding: 1rem;">
            <h1>Registration</h1>
            <form action="/register" method="post">
                @csrf
                <input type="text" placeholder="Name" name="name">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <button>Register</button>
            </form>
        </div>

<!--        <div style="border: 1px solid #000; padding: 1rem;">-->
<!--            <h1>Registration</h1>-->
<!--            <form action="/register" method="post">-->
<!--                @csrf-->
<!--                <input type="text" placeholder="Name" name="loginname">-->
<!--                <input type="password" placeholder="Password" name="loginpassword">-->
<!--                <button>Register</button>-->
<!--            </form>-->
<!--        </div>-->
    @endauth

</body>
</html>
