<html>
<head>
    <title><?php echo $title;?></title>
      <?php echo $html->includeCss("bootstrap.min"); ?>
      <?php echo $html->includeCss("home"); ?>
</head>
<body class="container">
	<div class="jumbotron vertical-center">
		<div class="container text-center">
			<h1><?php echo $title; ?></h1>
	        <form class="form-inline" action="<?php echo ''.INSTALL_FOLDER.'signin';?>" method="post">
			<div class="input-group">
				<input type="text" name="username" class="form-control" placeholder="Your username">
			</div>
			<div class="input-group">
				<input type="password" name="password" class="form-control" placeholder="Your password">
			</div>
				<input type="submit" class="btn btn-info">
			</form>
			<form class="form-inline" action="<?php echo ''.INSTALL_FOLDER.'signin';?>" method="post">
			</form>
		</div>
	</div>
</body>
</html>