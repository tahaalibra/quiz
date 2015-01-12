<html>
<head>
    <title><?php echo $title;?></title>
     
      <link rel="stylesheet" type="text/css" href="http://localhost/quiz/public/css/home.css">
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <div>
        
        <form action="<?php echo ''.INSTALL_FOLDER.'test';?>" method="post">
                <input type="submit" value="start quiz">
        </form>
        
        <form action="<?php echo ''.INSTALL_FOLDER.'signout';?>" method="post">
                <input type="submit" value="signout">
        </form>
    </div>
</body>
</html>