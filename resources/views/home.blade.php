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
    @foreach($errors->all() as $error)
        <div style="color: red">{{ $error }}</div>

    @endforeach
    @auth
        <div>
            <h1>Congratulations You are logged In</h1>
            <form action="/logout" method="POST">
                @csrf
                <button>Logout</button>
            </form>
        </div>
    @else
        <div style="border: 1px solid #000; padding: 1rem;">
            <h1>Registration</h1>
            <form action="/register" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button>Register</button>
            </form>
        </div>
        <div style="border: 1px solid #000; padding: 1rem;margin:1em 0">
            <h1>Login</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="text" name="email" placeholder="Name">
                <input type="password" name="password" placeholder="Password">
                <button>Log in</button>
            </form>
        </div>
    @endauth

</body>
</html>
