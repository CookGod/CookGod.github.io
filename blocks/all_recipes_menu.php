<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<div class="groups_menu">
	<div class="groups_menu_pages">
		<ul class="groups_menu_pages_ul">
			<?php 
			$result = mysqli_query($connect, query: "SELECT * FROM `menu_dropdown`");
				if (mysqli_num_rows($result)){
					while($post = mysqli_fetch_array($result))
					{	?>
 			<a class="groups_menu_pages_ul_href" href="<?php echo $post['url']; ?>"><li class="groups_menu_pages_li"><?php echo $post['title']; ?></li></a>
 					<?php } ?>
				<?php } ?>
		</ul>
	</div>
</div>