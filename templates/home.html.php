<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$title?></title>
	<link rel="stylesheet" type="text/css" href="../styles/main.css">
	<style>
		form {
			display: block;
			width: 700px;
			height: 430px;
			position: fixed;
			margin-top: 10px;
			margin-bottom: 300px;
			/* margin: 10px auto; */
			padding: 10px;
			border-radius: 10px;
			background-color: #333;
			box-shadow: 10px 10px 50px rgba(0, 0, 0, 0.9);
			opacity: 0.89;
		}
		#title {
			/* text-align: center; */
			font-size: 20px;
			padding: 15px;

			color: white;
			/* text-shadow: 2px 2px 20px #000000; */
		}

		
		input[type='text'] {
			width: 100%;
			padding: 10px;
			font-size: 20px;
			/* border: 1px solid #f5f5f5; */
			box-shadow: 1px 1px 2px #000000;
			border-radius: 6px;
			margin-bottom: 40px;
			background-color: #333333;
			color: white;
		}
		
		textarea {
			width: 100%;
			height: 150px;
			padding: 10px;
			margin-bottom: 30px; 
			box-shadow: 2px 2px 20px #000000;
			border-radius: 6px;
			resize: none;
			font-size: 20px;
			background-color: #333333;
			color: white;
		}

		button[type='submit'] {
			display: block;
			width: 15%;
			padding: 10px;
			border: none;
			border-radius: 6px;
			float: right;
			background-color: #0022fc;
			color: white;
			font-weight: bold;
			cursor: pointer;
			opacity: 0.95;
			font-size: 20px;
			transition: 0.3s;
		}

		button[type='submit']:hover {
			opacity: 1;
			background-color: #051a9f;
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

<form method='post' action='new_post.php' id='new_post'>
	<h1 style="color: white">Ask Something</h1>
	<div>
		<input type='text' name='title' id='title' required placeholder='Enter Your Title'>
	</div>
	<div>
		<textarea name='question' id='question' required placeholder='Enter Your Question'></textarea>
	</div>
	
	<button type='submit'>Post</button>

</form>





<footer>&copy;Copyright 2024, Zen & Ishar Studio</footer>
</body>
</html>