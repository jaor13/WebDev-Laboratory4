<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('asset/css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div class="gandalf">
        <div class="fireball"></div>
        <div class="skirt"></div>
        <div class="sleeves"></div>
        <div class="shoulders">
            <div class="hand left"></div>
            <div class="hand right"></div>
        </div>
        <div class="head">
            <div class="hair"></div>
            <div class="beard"></div>
        </div>
    </div>
    <div class="message">
        <h1>Error 403 (Access Denied)</h1>
        <p>Oops! This page is age restricted at the moment.</p>
        <button class="btn btn-secondary" onclick="window.location='{{ route('homepage') }}'">Go Back to Homepage</button>
    </div>
</body>
</html>
