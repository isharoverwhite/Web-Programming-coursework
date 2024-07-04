<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$title?></title>
	<link rel="stylesheet" type="text/css" href="../styles/main.css">
    <style>
        #title {
            text-align: center;
            font-size: 50px;
            color: #1877F2;
            margin-top: 100px;
            opacity: 0.8;
            text-shadow: 2px 2px 20px #000000;
        }
        #note {
            list-style-type: none;
            display: block;
            text-align: center;
            width: 500px;
            font-size: 20px;
            margin-top: 5px;
            padding: 10px;
        }
        
    </style>
</head>
<body>
<header>
	<ul id="main_menu">
        <li><a href="home.php">Home</a></li>
    	<li><a href="questions.php">Questions</a></li>
        <li><a href="answers.php">Answers</a></li>
        <li><a href="login.php">Login</a></li>	
    </ul>
</header>
<div>
    <h1 id='title'>Q&A System Documentation</h1>
    <p style="font-size: 20px; color: white; font-weight: bold;">Here are the pages that are used in this system:</p>
    <ul id='note'>
        <li><a href="">Home Page Uses</a></li>
        <li><a href="">Question Page Uses</a></li>
        <li><a href="">Answers Page Uses</a></li>
        <li><a href="">Login Page Uses</a></li>
    </ul>

</div>
<footer>&copy;Copyright 2024, Zen & Ishar Studio</footer>
</body>
</html>