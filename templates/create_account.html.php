<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q&A System - Create Account</title>
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
    <style>
        #post_form {
        margin: 0 auto; /* Center form within viewport */
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #f5f5f5;
        width: 300px;
        box-shadow: 10px 10px 50px rgba(0, 0, 0, 0.9);
        opacity: 0.89;
        }

    .create_input {
        display: block;
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        margin-bottom: -10px;

        }

    .major_opt {
        display: block;
        width: 95%;
        height: 100%;
        padding: 10px;
        margin-bottom: 1px;
        font-size: 16px; 
        cursor: pointer; 
        appearance: none;
        background-repeat: no-repeat;
        background-position: calc(100% - 20px) center;
        }


    button[type='submit'] {
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 6px;
        background-color: #203be3;
        color: white;
        font-weight: bold;
        cursor: pointer;
        opacity: 0.85;
        transition: 0.3s;
        }

    button[type='submit']:hover {
        opacity: 1;
        background-color: #0022fc;
        }

    a {
        text-decoration: none;
        color: #203be3;
        }

    a:hover {
        color: #000;
        }

    input::placeholder {
        font-weight: bold;
        color: #000;
        opacity: 0.2;
        }
</style>
</head>
<body>
    <header>
        <ul id="main_menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="/questions.php">Questions</a></li>
            <li><a href="/answers.php">Answers</a></li>
            <li><a href="/login.php">Login</a></li>
        </ul>
    </header>
    <h1 class='logo'>Q&A System</h1><br>
    <p id='maxim'>Born To Find Solution</p>

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
        <div class="major_opt">
            <select name="major" id="major_opt" required>
                <option value="">Choose Your Major</option>
                <option value="IT">Information Technology Student</option>
                <option value="BE">Business Student</option>
                <option value="DE">Design Student</option>
            </select>
        </div>
        <br>
        <button type="submit">Create Account</button>
        <br>
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
            alert('Password and Confirm Password must be the same');
        }
        
    });
</script>
</html>