<html>
<head>
    <title>Welcome to Quiz</title>
    <?php echo $html->includeFile("bootstrap.min.css"); ?>
    <?php echo $html->includeFile("home.css"); ?>
</head>
<body class="container">
    <div class="jumbotron vertical-center">
        <div class="container text-center">
            <h1>Welcome to Quiz</h1>
            <form class="form-inline" action="" method="post">
            <input type="text" id="name" name="name" placeholder="Enter Your Name" required><br><br>
            <div class="input-group">
                <input class="btn btn-info" type="submit" value="Start Quiz" >
            </div>
            </form>
            <form class="form-inline" action="<?php echo ''.INSTALL_FOLDER.DS.'signout';?>" method="post">
            <div class="input-group">
                <input class="btn btn-danger" type="submit" value="Signout">
            </div>
            </form>
        </div>
    </div>
</body>
</html>
