<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">

	<title>部落格</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="normalize.css" />
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<nav class="navbar">
		<div class="wrapper navbar__wrapper">
			<div class="navbar__site-name">
				<a href='index.php'>Who's Blog</a>
			</div>
			<ul class="navbar__list">
				<div>
					<li><a href="#">文章列表</a></li>
					<li><a href="#">分類專區</a></li>
					<li><a href="#">關於我</a></li>
				</div>
				<div>
					<li><a href="#">管理後台</a></li>
					<li><a href="#">登出</a></li>
				</div>
			</ul>
		</div>
	</nav>
	<section class="banner">
		<div class="banner__wrapper">
			<h1>存放技術之地</h1>
			<div>Welcome to my blog</div>
		</div>
	</section>
	<div class="login-wrapper">
		<h2>登入</h2>
		<?php
		$message="";
		if(!empty($_GET['errorCode'])) {
			$errorCode = $_GET['errorCode'];
			if($errorCode === "1") {
				$message = "請輸入完整資訊";
			}else if($errorCode === "2") {
				$message = "查無此帳號";
			}
		}
   echo"<h3 class='missinfo'>" . $message . "</h3>";
		?>
		<form action="handle_login.php" method="POST">
			<div class="input__wrapper">
				<div class="input__label">帳戶名稱</div>
				<input class="input__field" type="text" name="username" />
			</div>

			<div class="input__wrapper">
				<div class="input__label">密碼</div>
				<input class="input__field" type="password" name="password" />
			</div>
			<input type='submit' value="登入" />
		</form>

	</div>
</body>
</html>