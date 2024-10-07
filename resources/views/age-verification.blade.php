<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/styless.css') }}">
</head>
<body>

    <div class="form-container">
        <h4 class="modal-title">Age Verification 📅</h4>
        <p class="text-center">For verification, please enter your age. This ensures that you meet the required age to access the source codes.</p>
        <form action="{{ route('verify-age') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age" required>
            </div>
            <div class="form-group">
                <label for="destination">Choose where to go:</label>
                <div>
                    <input type="radio" id="dashboard" name="destination" value="dashboard" required>
                    <label for="dashboard">Dashboard</label>
                    <input type="radio" id="source-code" name="destination" value="source-code" required>
                    <label for="source-code">Source Code</label>
                    <input type="radio" id="code-tutorials" name="destination" value="code-tutorials" required>
                    <label for="code-tutorials">Code Tutorials</label>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-secondary">Submit</button>
            </div>  
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
