<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DR.online - Make Your Concern Easy</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            image src="C:\Users\Dell\Pictures\Screenshots"
            background-color: whitesmoke;
        }
        header {
            background: whitesmoke;
            color: white;
            padding: 20px;
            font-size: 24px;
        }
        main {
            margin: 50px;
        }
        .btn {
            padding: 10px 20px;
            font-size: 18px;
            border: 2px solid transparent;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            margin: 10px;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
        }
        .btn-outline {
            background: none;
            border-color: #007BFF;
            color: #007BFF;
        }
        .btn-outline:hover {
            background: #007BFF;
            color: white;
            box-shadow: 0 0 15px #007BFF;
        }
        .btn-google {
            border-color: #DB4437;
            color: #DB4437;
        }
        .btn-google:hover {
            background: #DB4437;
            color: white;
            box-shadow: 0 0 15px #DB4437;
        }
        .btn-facebook {
            border-color: #1877F2;
            color: #1877F2;
        }
        .btn-facebook:hover {
            background: #1877F2;
            color: white;
            box-shadow: 0 0 15px #1877F2;
        }
        .login-container {
            margin-top: 30px;
            padding: 20px;
            background: white;
            display: inline-block;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        input {
            display: block;
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        footer {
            margin-top: 50px;
            padding: 20px;
            background: whitesmoke;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>DR.online</h1>
        <p>Make Your Concern Easy</p>
    </header>
    <main>
        <section>
            <h2>Welcome to DR.online</h2>
            <p>Your trusted online consultation platform. Get expert advice anytime, anywhere.</p>
            <button class="btn btn-outline" onclick="animateButton(this)">Get Started</button>
        </section>
        
        <div class="login-container">
            <h3>Login</h3>
            <form action="module_page.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required pattern="(?=.\d)(?=.[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters">
                <button type="submit" class="btn btn-outline">Login</button>
            </form>
            <p>Or login with:</p>
            <button onclick="location.href='https://accounts.google.com/'" class="btn btn-google">Google</button>
            <button onclick="location.href='https://www.facebook.com/'" class="btn btn-facebook">Facebook</button>
        </div>
    </main>
    <footer>
        <p>&copy; 2025 DR.online. All rights reserved.</p>
    </footer>
    <script>
        function animateButton(btn) {
            btn.style.transform = "scale(1.2)";
            setTimeout(() => {
                btn.style.transform = "scale(1)";
            }, 200);
        }
    </script>
</body>
</html>