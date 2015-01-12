<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php echo $html->includeCss("bootstrap.min"); ?>
    <?php echo $html->includeCss("jumbotron-narrow"); ?>
    <script src="http://localhost/quiz/public/js/jquery-2.1.3.js"></script>
    
</head>
<body class="container">
    <div class="jumbotron">
        <button class="btn btn-primary" type="button">
            Total Questions: <span class="badge"><?php echo $noofq; ?></span>
        </button>
        <br><br>

        <div class="well well-sm">Add a new question</div>
        <br>
        <form class="form-inline" action="<?php echo ''.INSTALL_FOLDER.'admin/add';?>" method="post">
            <div class="input-group pad-bottom">
                <span class="input-group-addon" id="basic-addon2">Question</span>
                <input type="text" name="question" class="form-control" placeholder="Enter a new question" aria-describedby="basic-addon2">
            </div>
            <br><br>
            <div class="input-group pad-bottom">
                <span class="input-group-addon" id="basic-addon2">Option 1</span>
                <input type="text" name="answere1" class="form-control" placeholder="Option 1" aria-describedby="basic-addon2">
            </div>
            <div class="input-group pad-bottom">
                <span class="input-group-addon" id="basic-addon2">Option 2</span>
                <input type="text" name="answere2" class="form-control" placeholder="Option 2" aria-describedby="basic-addon2">
            </div>
            <br>
            <div class="input-group pad-bottom">
                <span class="input-group-addon" id="basic-addon2">Option 3</span>
                <input type="text" name="answere3" class="form-control" placeholder="Option 3" aria-describedby="basic-addon2">
            </div>
            <div class="input-group pad-bottom">
                <span class="input-group-addon" id="basic-addon2">Option 4</span>
                <input type="text" name="answere4" class="form-control" placeholder="Option 4" aria-describedby="basic-addon2">
            </div>
            <br><br><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon2">Correct Option</span>
                <input type="text" name="answere" class="form-control" placeholder="One of the above options" aria-describedby="basic-addon2">
            </div>
            <br><br>
            <input class="btn btn-info" type="submit" value="Add Question">
        </form>

        <form class="form-inline" action="<?php echo ''.INSTALL_FOLDER.'admin/result';?>" method="post">
            <input class="btn btn-info" type="submit" value="View Results">
        </form>
    </div>        
</body>
</html>
