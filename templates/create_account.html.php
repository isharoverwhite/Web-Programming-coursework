<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q&A System - Create Account</title>
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
    <link rel="stylesheet" type="text/css" href="../styles/create_account.css">
</head>
<body>
    <header>
        <ul id="main_menu">
            <li><a href="/">Home</a></li>
            <li><a href="/questions.php">Questions</a></li>
            <li><a href="/answers.php">Answers</a></li>
            <li><a href="/login.php">Login</a></li>
        </ul>
    </header>
    <h1>Q&A System</h1><br>
    <p>Born To Find Solution</p>

    <form action="create_account.php" method="post" id="post_form">
        <div>
            <input type="text" name="username" id="username" class="create_input" required autofocus='1' placeholder="Username"><br>
        </div>
        <div>
            <input type="email" name="email" id="email" class="create_input" required autofocus='1' placeholder="E-mail"><br>
        </div>
        <div>
            <input type="password" name="password" id="password" class="create_input" required autofocus='1' placeholder="Password"><br>
        </div>
        <div>
            <input type="password" name="confirm_password" id="confirm_password" class="create_input" required autofocus='1' placeholder="Confirm Password"><br>
        </div>
        <p id="notification"></p>
        <button type="submit">Create Account</button>
        <br><a href="login.php">Already have account? Login</a>

</form>


<div id="footer">
    <footer>&copy;Copyright 2024, Zen & Ishar Studio</footer>
</div>
</body>
<script>
    const form = document.getElementById('post_form');
    const username = document.getElementById('username');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const confirm_password = document.getElementById('confirm_password');
    const notification = document.getElementById('notification');

    form.addEventListener('submit', (event) => {
        if (password.value !== confirm_password.value) {
            event.preventDefault();
            notification.innerText = "Password and Confirm Password must be same";
        }
    });
</script>
</html>