<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php echo $html->includeCss("bootstrap.min"); ?>
    <?php echo $html->includeCss("jumbotron-narrow"); ?>
</head>
<body>
	<div>${{password}}</div>
	<form class="form-inline" action="<?php echo ''.INSTALL_FOLDER.DS.'admin/register';?>" method="post">
            <div class="input-group pad-bottom">
                <span class="input-group-addon" id="basic-addon2">User Name: </span>
                <input type="text" name="username" class="form-control" placeholder="Enter a new question" aria-describedby="basic-addon2">
            </div>
            <br><br>
            <input class="btn btn-info" type="submit" value="Add Question">
        </form>
</body>
</html>