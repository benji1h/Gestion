<!-- resources/views/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <form method="GET" action="{{ route('login.google') }}">
            @csrf
            <button type="submit" style="background-color: #dd4b39; color: white; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer;">
                Se connecter avec Google
            </button>
        </form>
    </div>
</body>
</html>
