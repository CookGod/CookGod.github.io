<?php 
	require_once 'database/connect.php';	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php 
		include 'blocks/menu.php';
	?>
	<?php 
		include 'blocks/header.php';
	?>
	<?php 
		$sql="SELECT * FROM `index_recipes`";
		$result=mysqli_query($connect,$sql);
		$posts=mysqli_fetch_all($result);
	 ?>
	<section class="main_section">
		<div class="first_content">
			<div class="first_content_groups_flex">
				<div class="first_content_groups_flex_wrap">
	<?php 
	$result = mysqli_query($connect, query: "SELECT * FROM `groups`");
	if (mysqli_num_rows($result)){
								while($post = mysqli_fetch_array($result))
								{	?>
				<div class="first_content_card_width">
					<div class="first_content_card">
						<div class="first_content_card_header">
						<a href="<?php echo $post['url']; ?>"><img class="first_content_card_image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($post['image']); ?>"></a>
						</div>
						<div class="first_content_card_footer">
							<h4 class="first_content_card_title"><?php echo $post['title']; ?></h4>
						</div>
					</div>
				</div>
					<?php } ?>
					<?php } ?>
		</div>
		</div>
		</div>
		<div class="second_content">
			<div class="second_content_title_div"><h1 class="second_content_title">New recipes</h1></div>
			<div class="second_content_array">
				<div class="second_content_three_dives_one">
						<?php 
	$result = mysqli_query($connect, query: "SELECT * FROM `index_recipes`");
	if (mysqli_num_rows($result)){
								while($post = mysqli_fetch_array($result))
								{	?>
					<div class="second_content_card">
						<div class="second_content_card_header">
						<a href="link/index_recipes.php?id=<?php echo $post['id']?>"><img class="second_content_card_image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($post['image']); ?>"></a>
						</div>
						<div class="second_content_card_footer">
							<div class="second_content_card_footer_title"><h4 class="second_content_card_title"><?php echo $post['title']?></h4></div>
							<div class="second_content_card_footer_paragraph"><h4 class="second_content_card_paragraph">You have never tasted such yummy !</h4></div>
							<div class="second_content_card_footer_button_div"><div class="second_content_card_footer_button"><a class="second_content_card_footer_href" href="link/index_recipes.php?id=<?php echo $post['id']?>">See More</a></div></div>
						</div>
					</div>
					<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>

		<div class="forth_content">
			<div class="forth_content_title_div"><h1 class="forth_content_title_title">
				OUR COOKERS
			</h1></div>
				<div class="forth_content_three_dives_one">
					<div class="forth_content_card">
						<div class="forth_content_card_header">
						<img class="forth_content_card_image" src="img/third_content_first_cooker.jpg">
						</div>
						<div class="forth_content_card_footer">
							<div class="forth_content_card_footer_title"><h2 class="forth_content_card_title">David Nelson</h2></div>
							</div>
					</div>
					<div class="forth_content_card">
						<div class="forth_content_card_header">
						<img class="forth_content_card_image" src="img/third_content_second_cooker.jpg">
						</div>
						<div class="forth_content_card_footer">
							<div class="forth_content_card_footer_title"><h2 class="forth_content_card_title">Helen Morgan</h2></div>
							</div>
					</div>
					<div class="forth_content_card">
						<div class="forth_content_card_header">
						<img class="forth_content_card_image" src="img/third_content_third_cooker.jpg">
						</div>
						<div class="forth_content_card_footer">
							<div class="forth_content_card_footer_title"><h2 class="forth_content_card_title">Nancie Miller</h2></div>
							</div>
					</div>
				</div>
		</div>
	</section>
	<?php 
		include 'blocks/footer.php';
	?>
</body>
</html>
