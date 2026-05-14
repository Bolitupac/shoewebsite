<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login — Nelson Shoes</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Manrope', sans-serif;
            background: #f5f5f4;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: #fff;
            border: 1px solid #e5e5e3;
            border-radius: 6px;
            padding: 2.5rem 2rem;
            width: 100%;
            max-width: 360px;
        }
        .login-brand {
            font-size: 0.7rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: #888;
            margin-bottom: 0.5rem;
        }
        .login-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #111;
            margin-bottom: 2rem;
        }
        label {
            display: block;
            font-size: 0.78rem;
            font-weight: 600;
            color: #444;
            margin-bottom: 0.4rem;
        }
        input[type="password"] {
            width: 100%;
            padding: 0.625rem 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 0.9rem;
            font-family: inherit;
            outline: none;
            transition: border-color 0.15s;
        }
        input[type="password"]:focus { border-color: #111; }
        .error {
            font-size: 0.8rem;
            color: #c0392b;
            margin-top: 0.4rem;
        }
        .login-btn {
            display: block;
            width: 100%;
            margin-top: 1.5rem;
            padding: 0.7rem;
            background: #111;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-family: inherit;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.15s;
        }
        .login-btn:hover { background: #333; }
    </style>
</head>
<body>
    <div class="login-card">
        <p class="login-brand">Nelson Shoes</p>
        <h1 class="login-title">Admin Access</h1>
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <label for="password">Password</label>
            <input type="password" id="password" name="password" autofocus autocomplete="current-password">
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror
            <button class="login-btn" type="submit">Sign In</button>
        </form>
    </div>
</body>
</html>
