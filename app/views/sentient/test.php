<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Quiz App</title>
    <?php echo $html->includeCss("bootstrap.min"); ?>
    <?php echo $html->includeCss("jumbotron-narrow"); ?>
    <script src="http://localhost/quiz/public/js/jquery-2.1.3.js"></script>
    <script>
   function setCookie(cname,cvalue,exdays)
{
var d = new Date();
d.setTime(d.getTime()+(exdays*24*60*60*1000));
var expires = "expires="+d.toGMTString();
document.cookie = cname + "=" + cvalue + "; " + expires;
}
function getCookie(cname)
{
var name = cname + "=";
var ca = document.cookie.split(';');
for(var i=0; i<ca.length; i++)
  {
  var c = ca[i].trim();
  if (c.indexOf(name)==0) return c.substring(name.length,c.length);
  }
return "";
}

//check existing cookie
cook=getCookie("my_cookie");

if(cook==""){
   //cookie not found, so set seconds=60
   var seconds = 3600;
}else{
     seconds = cook;
     console.log(cook);
}

function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;
    }
    //store seconds to cookie
    setCookie("my_cookie",seconds,5); //here 5 is expiry days

    document.getElementById('countdown').innerHTML = minutes + ":" +    remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "Buzz Buzz";
        location.reload();
    } else {
        seconds--;
    }
}

var countdownTimer = setInterval(secondPassed, 1000);
    </script>
</head>

<body class="container">
    <div class="jumbotron">
        <button class="btn btn-primary" type="button">
            Time: <span class="badge"><div id="countdown"></div></span>
        </button>
        <button class="btn btn-primary" type="button">
            QNo: <span class="badge">${{question_no}} / ${{question_total}}</span>
        </button>
        <br><br>
        <form class="form-inline" action="" method="post">
            <div class="input-group pad-bottom">
                <span class="input-group-addon" id="basic-addon2">Question</span>
                <textarea class="form-control" rows="1" id="comment" style="margin: 0px; height: 100px; width: 520px; text-align: center;" disabled>${{question}}</textarea>
            </div>
            <br><br>
            <div class="input-group answer">
              <span class="input-group-addon">
                <input type="radio" name="answer" value="1" id="answer1" aria-label="Option1" required>
              </span>
              <textarea class="form-control" rows="5" style="margin: 0px; height: 100px; width: 260px; text-align: center;" id="comment" disabled>${{answer1}}</textarea>
            </div>
            <div class="input-group answer">
              <span class="input-group-addon">
                <input type="radio" name="answer" value="2" id="answer2" aria-label="Option1">
              </span>
              <textarea class="form-control" rows="5" style="margin: 0px; height: 100px; width: 260px; text-align: center;" id="comment" disabled>${{answer2}}</textarea>
            </div>
            <div class="input-group answer">
              <span class="input-group-addon">
                <input type="radio" name="answer" value="3" id="answer3" aria-label="Option1">
              </span>
              <textarea class="form-control" rows="5" style="margin: 0px; height: 100px; width: 260px; text-align: center;" id="comment" disabled>${{answer3}}</textarea>
            </div>
            <div class="input-group answer">
              <span class="input-group-addon">
                <input type="radio" name="answer" value="4" id="answer4" aria-label="Option1">
              </span>
              <textarea class="form-control" rows="5" style="margin: 0px; height: 100px; width: 260px; text-align: center;" id="comment" disabled>${{answer4}}</textarea>
            </div>
            <br><br>

            <input type="submit" class="btn btn-info" value="Next" id="button1"><br>
          <input type="text" name="qid" value="${{qid}}" id="qid" style="display:none;">
        </form>
    </div>
</body>
</html>
