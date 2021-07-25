<?php 
	require_once '../database/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Recipe</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<?php 
		require_once '../blocks/link_menu.php';
	?>
	<?php 
		require_once '../blocks/header.php';
	?>
	<?php 
		require_once '../blocks/link_recipe_menu.php';
	?>
	<?php 
		$id=$_GET['id'];	
		$post = mysqli_query($connect, query: "SELECT * FROM `index_recipes` WHERE `id`='$id'");
		$post = mysqli_fetch_assoc($post);
	?>
	<div class="index_recipes_main_content">
				<div class="index_recipes_title_div"><h1 class="index_recipes_title"><?php echo $post['title'] ?></h1></div>
	<div class="index_recipes_card">
		<div class="index_recipes_card_main_image_div"><img class="index_recipes_card_main_image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($post['image']); ?>"></div>
</div>
<div class="index_recipes_right_float">
	<div class="index_recipes_right_float_prep_time_div">
		<p class="index_recipes_right_float_prep_time"><?php echo $post['prep time'] ?></p>
	</div>
	<div class="index_recipes_right_float_total_time_div">
		<p class="index_recipes_right_float_total_time"><?php echo $post['total time'] ?></p>
	</div>
	<div class="index_recipes_right_float_author_div">
		<p class="index_recipes_right_float_author"><?php echo $post['yield'] ?></p>
	</div>
	<div class="index_recipes_right_float_author_div">
		<p class="index_recipes_right_float_author"><?php echo $post['author'] ?></p>
	</div>
</div>
<div class="index_recipes_info_div">
	<p class="index_recipes_info_paragraph"><?php echo $post['info'] ?></p>
</div>
<div class="index_recipes_description_div">
	<div class="index_recipes_description_title_div"><h2 class="index_recipes_ingredients_title"><?php echo $post['Tips to Keep In Mind'] ?></h2></div>
	<div class="index_recipes_description_paragraph_div"><p class="index_recipes_description_paragraph"><?php echo $post['description'] ?></p></div>
</div>
<div class="index-recipes_ingredients_and_steps_flex_div">
<div class="index_recipes_ingredients_div">
	<div class="index_recipes_ingredients_title_div"><h2 class="index_recipes_ingredients_title">Ingredients</h2></div>
	<p class="index_recipes_ingredients_paragraph"><?php echo $post['ingredients'] ?></p>
</div>
<div class="index_recipes_steps_div">
	<div class="index_recipes_steps_div_title"><h2 class="index_recipes_steps_title">Steps</h2></div>
	<div class="index_recipes_steps_single_div">
		<ul class="index_recipes_steps_single_div_ul">
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step1'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step2'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step3'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step4'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step5'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step6'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step7'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step8'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step9'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step10'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step11'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step12'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step13'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step14'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step15'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step16'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step17'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step18'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step19'] ?></li></p>
		<br>
		<li class="index_recipes_steps_single_div_li"><p class="index_recipes_steps_single_div_li_paragraph"><?php echo $post['step20'] ?></li></p>
	</ul>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</div>
</div>
</div>
<?php 
	require_once '../blocks/footer.php';
?>
</body>
</html>
