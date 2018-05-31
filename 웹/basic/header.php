<? session_start();?>
<html>
<head>
	<link href="/basic/css/main.css" rel="stylesheet" type="text/css">
	<link href="/basic/css/submain.css" rel="stylesheet" type="text/css">

</head>
	<div id="wrap">
		<header>
			<?php 
			if(! $_SESSION['userid'])
			{
				?>
				<div id="login"><a href="/basic/login/login_form.php">Login</a>
				| <a href="/basic/member/join.php">Join</a>
				</div>
		<?php 
			} else {
		?>
			<div id="login"><a href="/basic/login/logout.php">Logout</a>
				| <a href="/basic/member/member_modify.php">Modify</a>
				</div>
		<?php } ?>
			<div id="logo">
			<h1>	<a href="/basic/index.php">CARE LAB</a> </h1>
			</div>
		
			<nav><ul>
				<li><a href="/basic/index.php">HOME</a></li>
				<li><a href="/basic/company/welcome.php">COMPANY</a></li>
				<li><a href="#">SOLUTIONS</a></li>
				<li><a href="/basic/greet/list.php">CUSTOMER CENTER</a></li>
			</ul></nav>
		</header>
		<div class="clear"></div>
		
	
		