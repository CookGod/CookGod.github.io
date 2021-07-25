<?php 
	require_once 'database/connect.php';	
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Recipes</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
	require_once 'blocks/menu.php';
?>
	<?php
	require_once 'blocks/header.php';
?>
<?php
	require_once 'blocks/all_recipes_menu.php';
?>
<div class="groups_salad_main_div">
	<div class="groups_salad_main_title_div"><h1 class="groups_salad_main_title">All Recipes</h1></div>
	<!--  searchbar -->
	<form action="search/all_recipes_search.php" method="POST">
	 <div class="wrapper">
      <div class="search-input">
        <a href="" target="_blank" hidden></a>
        <input type="text" placeholder="Type to search.." name="search">
        <div class="autocom-box">
        </div>
      </div>
    </div>
</form>
    <!--  endsearchbar -->
		<div class="groups_salad_recipe_main_div">
			<div class="groups_salad_recipe_flex">
				<div class="groups_salad_first_recipe_flex_wrap">
											<?php 
	$result = mysqli_query($connect, query: "SELECT * FROM `all recipes`");
	if (mysqli_num_rows($result)){
								while($post = mysqli_fetch_array($result))
								{	?>
					<div class="groups_salad_content_card_width">
						<div class="groups_salad_content_card">

								<div class="groups_salad_content_card_header">
								<a href="link/all_recipes_link.php?id=<?php echo $post['id']?>"><img class="groups_salad_content_card_image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($post['changed image']); ?>"></a>
								</div>
							<div class="groups_salad_content_card_footer">
								<div class="groups_salad_content_card_footer_title"><h4 class="groups_salad_content_card_title"><?php echo $post['title']?></h4></div>
								<div class="groups_salad_content_card_footer_paragraph"><h4 class="groups_salad_content_card_paragraph">You have never tasted such yummy !</h4></div>
								<div class="groups_salad_content_card_footer_button_div"><div class="groups_salad_content_card_footer_button"><a class="groups_salad_content_card_footer_href" href="link/all_recipes_link.php?id=<?php echo $post['id']?>">See More</a></div></div>
							</div>
						</div>			
					</div>
					<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
		include 'blocks/footer.php';
	?>
</body>
</html>