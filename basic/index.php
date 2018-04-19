<? session_start();?>
<html>
	<head>
	<link href="/basic/css/main.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	
	<div id="wrap">
		<header>
		<?php 
			if(! $_SESSION['userid'])
			{
				?>
				<div id="login"><a href="./login/login_form.php">Login</a>
				| <a href="./member/join.php">Join</a>
				</div>
		<?php 
			} else {
		?>
			<div id="login"><a href="./login/logout.php">Logout</a>
				| <a href="./member/member_modify.php">Modify</a>
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
		<div id="main_img">
			<img src="images/main_img.jpg" width="971" height="282">
		</div>
		<article id="front">
		<div id="solution">
			<div id="hosting">
				<h3>Web Hosting Solution</h3>
					<p>A web hosting service is a type of Internet hosting service that allows individuals and organizations to make their website accessible via the World Wide Web.</p>
			</div>
			<div id="security">
				<h3>Web Security Solution</h3>
				<p>Web application security is a branch of Information Security that deals specifically with security of websites, web applications and web services.</p>
			</div>
			<div id="payment">
				<h3>Web Payment Solution</h3>
				<p>The consumer uses web pages displayed or additional applications downloaded and installed on the mobile phone to make a payment.</p>
			</div>
		</div>
		 <div class="clear"></div>
		 	<div id="sec_news">
		 		<h3><span class="orange">Security </span> News</h3>
					<dl>
		 				<dt>Middle Title1</dt>
		 					<dd>content1</dd>
		 				<dt>Middle Title2</dt>
		 					<dd>content2</dd>
		 			</dl>
		 	</div>
		 	<div id="news_notice">
		 		<h3 class="brown">News &amp; Notice</h3>
		 		<table>
		 			<tr>
		 				<td class="contxt"><a href="#">Notice Tilte1</a></td>
		 				<td><a href="#">2016.10.11</a></td>
		 			</tr>
		 			<tr>
		 				<td class="contxt"><a href="#">Notice Tilte2</a></td>
		 				<td><a href="#">2016.10.12</a></td>
		 			</tr>
		 		</table>
		 	</div>
		</article>
		<footer>
			<hr>
			
			<div id="copy">
			Copyright 2016 kyes Inc. all rights reserved 
			contact mail : wingofbluesky@kgitbank.co.kr Tel: +82 010-1234-1234
			</div>
			<div id="social">
				<img src="images/facebook.gif" width="33" height="33" alt="Facebook">
				<img src="images/twitter.gif" width="33" height="33" alt="twitter">
				
			</div>
			
		</footer>
	</div><!-- wrap -->
	</body>
</html>
