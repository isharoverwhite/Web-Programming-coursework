<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Q&A System - Login</title>
  <link rel="stylesheet" type="text/css" href="..\styles\main.css">
  <link rel="stylesheet" type="text/css" href="..\styles\login.css">
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

  <form action="login.php" method="post" id="login_form">
    <div>
      <div>
        <input type="text" name="username" class="login_input" placeholder="Email Address or Username"><br>
      </div>

      <div>
        <input id="password" type="password" name="password" class="login_input" placeholder="Password">
        <button id="show_btn" type="button">
          <img src="../images/show_password.png" alt="Show Password" id="eyeIcon">
        </button><br>
      </div>
    </div>
    <button id="login_btn" type="submit">Log in</button>
    <br><a href="create_account.php">Do not have account? Create One</a>
  </form>
  
  

  <script type="text/javascript">
    const button = document.getElementById('show_btn');
    const password = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    button.addEventListener('click', tooglePasswordVisibility);

    function tooglePasswordVisibility() {
      if (password.type === "password"){
        password.type = "text";
        eyeIcon.src = "../images/hide_password.png";
      } else {
        password.type = 'password';
        eyeIcon.src = "../images/show_password.png";
      }
    }
  </script>
  <div id="footer">
    <footer>&copy;Copyright 2024, Zen & Ishar Studio</footer>
  </div>

</body>


</html>
