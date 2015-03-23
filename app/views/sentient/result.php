<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <?php echo $html->includeFile("bootstrap.min.css"); ?>
    <?php echo $html->includeFile("home.css"); ?>
</head>
<body class="container">
    <div class="jumbotron">
      <div class="jumbotron">
        ${{name}}
      </div>
      <div class="jumbotron">
        ${{result}}
      </div>
      <br><br><br>
      <form style="text-align:center;" class="form-inline" action="<?php echo ''.INSTALL_FOLDER.DS.'signout';?>" method="post">
        <div class="input-group">
          <input class="btn btn-danger" type="submit" value="Signout">
        </div>
      </form>
    </div>
</body>
</html>
