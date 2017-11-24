<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Menu - Sushi Website Template</title>
	<link rel="stylesheet" href="<?php echo base_url("/public/css/style.css"); ?>" type="text/css">
	<!--[if IE7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>
<body>

	<?php include_once('template/nav.php'); ?>

			</div>
			<div id="menu-adbox">
				<div class="details">
					<h1>Lorem ipsum</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet nulla ac purus iaculis quis fermentum lacus sodales
					</p>
				</div>
			</div>
		</div>
		<div id="contents">
			<ul id="gallery">
				<?php foreach ($menu as $object) { ?>
				<li>
					<a href="menu.html"> <img src="<?php echo base_url("/public/images/$object->picture"); ?>" alt="Img"> <b><?php echo $object->name;?></b>$NT <?php echo $object->price;?></a>
				</li>
			<?php } ?>
			</ul>
		</div>
<?php include_once('template/footer.php'); ?>
	</div>
</body>
</html>
