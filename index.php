<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://wallpapercave.com/wp/wp4141018.jpg');
            font-family: 'Poppins-Regular', sans-serif;
            background-color: #f4f4f4;
        }

        .container-login {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;

            background-color: rgba(255, 255, 255, 0.288); /* Use rgba for transparency */
    width: 25%;
    margin: 120px auto;
    padding: 50px;
    box-shadow: 5px 5px 5px;
    backdrop-filter: blur(10px) saturate(100%);
    -webkit-backdrop-filter: rgba(233, 230, 230, 0.007);
    border-radius: 12px;
    border: 1px solid rgb(173, 6, 6);
    position: relative;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-login {
            background-color: #fc00ff;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #cc00e0;
        }
    </style>
</head>
<body>

<div class="container-login">
    <form class="login-form" method="post" action="cnn.php">
        <h2 class="text-center mb-4">Login Form</h2>

        <!-- Email input -->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <!-- Password input -->
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <!-- Additional fields -->
        <div class="form-group">
            <label for="ID">Student ID:</label>
            <input type="text" id="ID" name="ID" class="form-control">
        </div>
        <div class="form-group">
            <label for="Name">Student Name:</label>
            <input type="text" id="Name" name="Name" class="form-control">
        </div>
        <div class="form-group">
            <label for="Address">Student Address:</label>
            <input type="text" id="Address" name="Address" class="form-control">
        </div>

        <button type="submit" name="save" class="btn btn-login btn-block">Save</button>
        <div class="form-check mt-3">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
