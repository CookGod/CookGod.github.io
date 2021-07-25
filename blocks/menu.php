<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=KoHo:wght@200;300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<div class="main_menu">
	<div class="menu_icon_and_title">
	<div class="menu_icon"><a href="index.php"><img class="menu_icon_img" src="img/menu_icon.png"></a></div>
	<div class="menu_icon_title"><h1 class="menu_icon_title_name">CookGod</h1></div>
	</div>
	<div class="menu_pages">
		<ul class="menu_pages_ul">
			<a class="menu_pages_ul_href" href="index.php"><li class="menu_pages_li">Home</li></a>
			<div class="dropdown">
  			<li class="menu_pages_ul_href">Recipes<i class="fa fa-caret-down"></i></li>
 			<div class="dropdown-content">
 				<?php 
			$result = mysqli_query($connect, query: "SELECT * FROM `menu_dropdown`");
				if (mysqli_num_rows($result)){
					while($post = mysqli_fetch_array($result))
					{	?>
 			<a href="<?php echo $post['url']; ?>"><?php echo $post['title']; ?></a>
 					<?php } ?>
				<?php } ?>
 			</div>
			</div>
			<a class="menu_pages_ul_href" href="contact.php"><li class="menu_pages_li">Contact</li></a>
		</ul>
	</div>
</div>