
<? include "../header.php";?>
<? include "sub_img.php";?>
<? include "sub_menu.php";?>

<article>
<h1>Join Us</h1>
<form id="join" method="get" action="./member_insert.php">
	<fieldset>
		<legend>Basic Info</legend>
		<label>User Id</lable>
		<input name="id" type="text" class="id">
		<div class="clear"></div>
		<label>Password</lable>
		<input name="passwd" type="password" class="pass">
		<div class="clear"></div>
		<label>Confirm Password</lable>
		<input name="pass_confirm" type="password" class="pass">
		<div class="clear"></div>
		<label>Name</lable>
		<input name="name" type="text" class="nick">
		<div class="clear"></div>
		<label>Nickname</lable>
		<input name="nick" type="text" class="nick">
		<div class="clear"></div>
		<label>Mobile Phone Number</lable>
		<input name="hp" type="tel" class="mobile">
		<div class="clear"></div>
		<label>E-Mail</lable>
		<input name="e-mail" type="text" class="email">
		<div class="clear"></div>
	</fieldset>
	<div id="buttons">
		<input type="submit" value="Submit" class="submit">
		<input type="button" value="Cancel" class="cancel" onClick="javascript:location.href='../index.php';">
	</div>
</form>
</article>

<? include "../footer.php";?>
