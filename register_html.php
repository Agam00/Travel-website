<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/register.jpg');
            background-size: cover;
            background-position: center;
            padding: 50px;
            display: flex;
            justify-content: space-between;
        }
        h1 {
            color: #fff;
            font-size: 150px;
            margin-top: 0;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
    .welcome-text {
            margin-right: 20px;
        }
    
        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        label {
            display: block;
            margin-top: 20px;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: black;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            margin-top: 20px;
        }
        input[type="submit"]:hover {
            background-color: #8e44ad;
        }
        a {
            display: block;
            margin-top: 20px;
            font-size: 14px;
            color: #333;
            text-decoration: none;
        }
        a:hover {
            color: #8e44ad;
            text-decoration: underline;
        }
        h2 {
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="welcome-text">
        <h1>Welcome to 
            <br>A&A <br>
            Travels...</h1>
        
    </div>
    <div>
        <h2 style="color: #fff;">Register</h2>
        <form action="register.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <input type="checkbox" id="show-password" onclick="showPassword()">
            <label for="show-password">Show password</label>
            <input type="submit" value="Register">
            <a href="login_html.php">Already have an account? Login</a>
        </form>
    </div>
    <script>
        function showPassword() {
            var passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
</body>
</html>