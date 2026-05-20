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
        .password-container {
            position: relative;
            width: 100%;
        }
        .password-input {
            width: 100%;
            padding: 0.625rem 2.5rem 0.625rem 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 0.9rem;
            font-family: inherit;
            outline: none;
            transition: border-color 0.15s;
        }
        .password-input:focus { border-color: #111; }
        .toggle-password-btn {
            position: absolute;
            right: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            padding: 0.25rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #888;
            transition: color 0.15s;
        }
        .toggle-password-btn:hover {
            color: #111;
        }
        .toggle-password-btn svg {
            width: 18px;
            height: 18px;
        }
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
            <div class="password-container">
                <input type="password" id="password" name="password" class="password-input" autofocus autocomplete="current-password">
                <button type="button" id="togglePassword" class="toggle-password-btn" aria-label="Toggle password visibility">
                    <svg class="eye-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    <svg class="eye-off-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;">
                        <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                        <line x1="1" y1="1" x2="23" y2="23"></line>
                    </svg>
                </button>
            </div>
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror
            <button class="login-btn" type="submit">Sign In</button>
        </form>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const togglePasswordButton = document.getElementById('togglePassword');
        const eyeIcon = togglePasswordButton.querySelector('.eye-icon');
        const eyeOffIcon = togglePasswordButton.querySelector('.eye-off-icon');

        togglePasswordButton.addEventListener('click', () => {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';
            
            if (isPassword) {
                eyeIcon.style.display = 'none';
                eyeOffIcon.style.display = 'block';
            } else {
                eyeIcon.style.display = 'block';
                eyeOffIcon.style.display = 'none';
            }
        });
    </script>
</body>
</html>
