<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="welcome-message">Welcome to QuickNotes Pro!</h1>
        <div class="cta-buttons">
            <!-- Button for Login -->
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            <!-- Button for Signup -->
            <a href="{{ route('register') }}" class="btn btn-success">Sign Up</a>
        </div>
    </div>
    <!-- Bootstrap JS (optional, if you need JavaScript functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
