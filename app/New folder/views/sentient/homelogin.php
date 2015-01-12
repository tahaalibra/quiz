<html>
<head>
    <title><?php echo $title;?></title>
     
      <link rel="stylesheet" type="text/css" href="http://localhost/quiz/public/css/home.css">
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <div>
        <form action="<?php echo ''.INSTALL_FOLDER.'signin';?>" method="post">
        UserName: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<input type="submit">
</form>
    </div>
</body>
</html>