<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login to System</title>
  <style type="text/css">
    /* Base styles */
    * {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, '.SFNSText-Regular', sans-serif;
      box-sizing: border-box; /* Ensures padding/margin don't affect width/height */
    }

    body {
      background-color: #3A3A3A;
      margin: 0; /* Remove default margin from body */
      display: flex; /* Center form horizontally */
      justify-content: center;
      align-items: center;
      min-height: 100vh; /* Set minimum height for full viewport */
    }

    /* Login form styling */
    #login_form {
      margin: 0 auto; /* Center form within viewport */
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: #f5f5f5;
      width: 300px; /* Adjust width as needed */
      opacity: 0.89; /* Adjust opacity as needed */
    }

    .login_input {
      display: block; /* Makes each input occupy a full line */
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      margin-bottom: 1px;
    }

    /* Password field and button styling */
    #password {
      margin-right: 5px; /* Add space before button */
    }

    #show_btn {
      padding: 5px; /* Adjust padding for image */
      border: none;
      background-color: transparent; /* Remove default button styling */
      cursor: pointer; /* Indicate clickable behavior */
    }
    
    #login_btn {
      display: block; /* Makes button occupy a full line */
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 6px;
      background-color: #203be3;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }

    /* Link styling */
    a {
      text-decoration: none;
      color: #203be3;
    }

    a:hover {
      color: #000;
    }

    /* Placeholder text styling */
    ::placeholder {
      color: black;
      opacity: 0.5;
    }
  </style>
</head>
<body>

  <form action="login.php" method="post" id="login_form">
    <div>
      <div>
        <input type="text" name="username" class="login_input" autofocus="1" placeholder="Email Address or Username"><br>
      </div>

      <div>
        <input id="password" type="password" name="password" class="login_input" placeholder="Password">
        <button id="show_btn" type="button">
          <img src="eye.png" alt="Show Password" id="eyeIcon">
        </button><br>
      </div>
    </div>
    <button id="login_btn" type="submit">Log in</button>
    <br><a href="create_account.php">Do not have account? Create One</a>
  </form>
  
  
  <footer></footer>

  <script type="text/javascript">
    const button = document.getElementById('show_btn');
    const password = document.getElementById('password');

    button.addEventListener('click', tooglePasswordVisibility);

    function tooglePasswordVisibility() {
      if (password.type === "password"){
        password.type = "text";
        button.textContent = 'Hide password';
      } else {
        password.type = 'password';
        button.textContent = 'Show password';
      }
    }
  </script>
</body>
</html>
