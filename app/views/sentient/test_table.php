<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <?php echo $html->includeCss("bootstrap.min"); ?>
    <?php echo $html->includeCss("home"); ?>
    <?php echo $html->includeCss("pace"); ?>
    <?php echo $html->includeJs("pace.min"); ?>
   
    <script src="http://localhost/quiz/public/js/jquery-2.1.3.js"></script>
    
      <script>

    $(document).ready(function(){
     
      var $minute= <?php echo $_SESSION['time_limit'];?>;
      $("#minute").html($minute);
      $("#min").val($minute);

      setInterval(function () {
        
        $minute-=1;
       
        $("#minute").html($minute);
        $("#min").val($minute);
        var formData = {"time_limit":$minute};  
        $.ajax({
            type: "POST",
            url: '/quiz/test/minute' ,
            data: formData,
            success: function(result){
                   // alert(result);
                }
         }); 
             if($minute<1){window.location.href = "/quiz/test";
        }
      }, 1000);

    });

  </script>
</head>

<body class="container">
  <div class="jumbotron vertical-center">
    <div class="container text-center">
      <div class="time">
          time left: <div id="minute"></div><br>
      </div>
      <table>
      <tr><?php echo $question; ?></tr>
      <form action="" method="post">
          <tr>
            <td><input type="radio" name="answer" value="1" id="answer1" required><span class="label label-primary"><?php echo $answer1; ?></span></td>
            <td><input type="radio" name="answer" value="2" id="answer2"><span class="label label-primary"><?php echo $answer2; ?></span></td>
          </tr>
          <tr>
            <td><input type="radio" name="answer" value="3" id="answer3"><span class="label label-primary"><?php echo $answer3; ?></span></td>
            <td>
              <input type="radio" name="answer" value="4" id="answer4"><span class="label label-primary"><?php echo $answer4;  ?></span>
              <input type="text" name="qid" value="<?php echo $qid; ?>" id="qid" style="display:none">
            </td>
          </tr>
          <td><input type="submit" value="next" id="button1"></td>
          </table>        
    </form>
    </div>
  </div>
</body>

<!--
<body class="container">
  <div class="jumbotron vertical-center">
    <div class="container text-center">
      <h1><?php echo $title; ?></h1>
          <form class="form-inline" action="<?php echo ''.INSTALL_FOLDER.'signin';?>" method="post">
      <div class="input-group">
        <input type="text" name="username" class="form-control" placeholder="Your username" aria-describedby="basic-addon2">
        <span class="input-group-addon" id="basic-addon2">@example.com</span>
      </div>
      <div class="input-group">
        <input type="password" name="password" class="form-control" placeholder="Your password" aria-describedby="basic-addon2">
      </div>
        <input type="submit" class="btn btn-info">
      </form>
      <form class="form-inline" action="<?php echo ''.INSTALL_FOLDER.'signin';?>" method="post">
      </form>
    </div>
  </div>
</body>
-->


</html>