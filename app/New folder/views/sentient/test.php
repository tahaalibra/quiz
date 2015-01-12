<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="http://localhost/quiz/public/css/home.css">
   
    <script src="http://localhost/quiz/public/js/jquery-2.1.3.js"></script>
    
    <script>
    var i=0;
    var phpVar = "<?php echo $this->all_question[0]['answer1']; ?>";
    $(document).ready(function () {

    //var arrayFromPHP = <?php echo $this->all_question[0]['answer1']; ?>;
    
    $("#button1").click(function () {
            $('.nice').hide();
            
            $('#myResults').html('Hello World!');
         $('#myResults').html(phpVar);
            $('.nice').show();
         
    });
    $("#button2").click(function () {
            $('.nice').hide();
         
    });
               
	
});
    </script>
</head>
<body>
 <h1>Question</h1>
   <div class="nice">
   
  <?php echo $ques; ?>
   
    <form action="#" method="post">
        <input type="radio" name="answer" value="1" id="answer1" required><?php echo $answer1; ?>
        <input type="radio" name="answer" value="2" id="answer2"><?php echo $answer2; ?>
        <input type="radio" name="answer" value="3" id="answer3"><?php echo $answer3; ?>
        <input type="radio" name="answer" value="4" id="answer4"><?php echo $answer4;  ?><br>
        <input type="submit" value="next" id="bbutton1">
        <input type="submit" value="skip" id="bbutton2">
        
        <input type="text" value="<?php echo $ans_disp; ?>" name="result" id="result" style="display;">
        
    </form>
    </div>
    <div id="myResults"></div>
    <?php
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
//echo $this->all_question[0]['answer1'];
$temp = json_encode($this->all_question,JSON_FORCE_OBJECT);
echo $temp;

?>
</body>
</html>