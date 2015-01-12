<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/quiz/public/css/home.css">
    <script src="http://localhost/quiz/public/js/jquery.js"></script>
    
</head>
<body>
        Add New Question <br>
        <form action="<?php echo ''.INSTALL_FOLDER.'admin/add';?>" method="post">
            Question: <input type="text" name="question" required><br>
            answer 1:<input type="text" name="answere1" required><br>
            answer 2:<input type="text "name="answere2" required><br>
            answer 3:<input type="text" name="answere3" required><br>
            answer 4:<input type="text" name="answere4" required><br>
            correct answer:<input type="text" name="answere">
            <input type="submit" value="add">
        </form>        
</body>
</html>