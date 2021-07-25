<?php 
	require_once 'database/connect.php';	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php 
		include 'blocks/menu.php';
?>
<div class="contact_main_div">
	<div class="contact_parts_flex">
		<div class="contact_first_part_div"></div>
		<div class="contact_second_part_div">
			<form class="contact_form" action="contact_action/action.php" method="post" enctype="multipart/form-data">
				<div class="contact_form_title_div"><h1 class="contact_form_title">Contact Us</h1></div>
				<div class="contact_form_h4_div"><h4 class="contact_form_h4">We'd love to hear from you!</h4></div>
				<div class="contact_form_firstname_and_lastname_flex">
					<div class="contact_form_firstname_div"><input name="firstname" class="contact_form_firstname_input" type="text" placeholder="    Firstname"></div>
					<div class="contact_form_lastname_div"><input name="lastname" class="contact_form_lastname_input" type="text" placeholder="    Lastname"></div>
				</div>
				<div class="contact_form_recipename_and_email_flex">
					<div class="contact_form_recipename_div"><input name="title" class="contact_form_recipename_input" type="text" placeholder="    Recipe name"></div>
					<div class="contact_form_email_div"><input name="email" class="contact_form_email_input" type="text" placeholder="    Email"></div>
				</div>
				<div class="contact_form_ingredients_textarea_div">
					<textarea class="contact_form_ingredients_textarea" name="ingredients"  placeholder="    Ingredients"></textarea>
				</div>
				<div class="contact_form_steps_textarea_div">
					<textarea class="contact_form_steps_textarea" name="steps" placeholder="    Steps"></textarea>
				</div>
				<div class="contact_form_description_textarea_div">
					<textarea class="contact_form_description_textarea" name="description" placeholder="    Notes"></textarea>
				</div>
				<div class="contact_form_submit_main_div"><div class="contact_form_submit_div"><input class="contact_form_submit" type="submit" value="Send"></div></div>
			</form>
		</div>
	</div>	
</div>
<?php 
		include 'blocks/footer.php';
?>
</body>
</html>