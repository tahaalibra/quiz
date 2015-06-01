<html lang="en" ng-app="LoginApp">

<head>
    <?php
    \dales\view\HTML::includeCss('bower_components/angular-material/angular-material.min');
    \dales\view\HTML::includeCss('style.css');
    ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />


    <script>
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
        }

        function getCookie(cname) {
                var name = cname + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i].trim();
                    if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
                }
                return "";
            }
            //check existing cookie
        cook = getCookie("my_cookie");
        if (cook == "") {
            //cookie not found, so set seconds=60
            var seconds = 120; //set time in seconds
        } else {
            seconds = cook;
            console.log(cook);
        }

        function secondPassed() {
            var minutes = Math.round((seconds - 30) / 60);
            var remainingSeconds = seconds % 60;
            if (remainingSeconds < 10) {
                remainingSeconds = "0" + remainingSeconds;
            }
            //store seconds to cookie
            //setCookie("my_cookie", seconds, 5); //here 5 is expiry days
            document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
            if (seconds == 0) {
                clearInterval(countdownTimer);
                document.getElementById('countdown').innerHTML = "Buzz Buzz";
                //location.reload();
            } else {
                seconds--;
            }
        }
        var countdownTimer = setInterval(secondPassed, 1000);
    </script>
</head>

<body layout="column" ng-controller="AppCtrl">
    <md-toolbar>
        <h2 class="md-toolbar-tools">
        <div flex="15" class="qno">Question <span class="number">#${{question_no}} / ${{question_total}} </span></div>
        <div flex></div>

    </h2>
        <md-progress-linear class="md-accent" md-mode="determinate" value="{{ ( ${{question_done}}/${{question_total}} )*100 }}"></md-progress-linear>
    </md-toolbar>
    <br>
    <md-content>
        <div layout="row" layout-sm="column">
            <div flex="5"></div>
            <div flex="90">
               <br>
                <md-card>
                    ${{image}}
                     <div flex>
                    <md-card-content layout-padding>
                        <div flex>
                            <p style="word-wrap: break-word;">${{question}}</p>
                        </div>                        
                    </md-card-content>
                    </div>
                </md-card>
            </div>
            <div flex="5"></div>
        </div>
        <br>
        <form action="" method="post">

            <md-radio-group ng-model="data">
                <div layout="row" layout-sm="column">
                    <div flex="5"></div>
                    <div flex>
                        <md-radio-button name="answer" value="1" id="answer1" required>
                            <md-whiteframe class="md-whiteframe-z1" layout layout-align="center center" layout-padding>
                                <span>${{answer1}}</span>
                            </md-whiteframe>
                        </md-radio-button>
                    </div>
                    <div flex="5"></div>
                    <div flex>
                        <md-radio-button name="answer" value="2" id="answer2" required>
                            <md-whiteframe class="md-whiteframe-z1" layout layout-align="center center" layout-padding>
                                <span>${{answer2}}</span>
                            </md-whiteframe>
                        </md-radio-button>
                    </div>
                    <div flex="5"></div>
                </div>
                <div layout="row" layout-sm="column">
                    <div flex="5"></div>
                    <div flex>
                        <md-radio-button name="answer" value="3" id="answer3" required>
                            <md-whiteframe class="md-whiteframe-z1" layout layout-align="center center" layout-padding>
                                <span>${{answer3}}</span>
                            </md-whiteframe>
                        </md-radio-button>
                    </div>
                    <div flex="5"></div>
                    <div flex>
                        <md-radio-button name="answer" value="4" id="answer4" required>
                            <md-whiteframe class="md-whiteframe-z1" layout layout-align="center center" layout-padding>
                                <span>${{answer4}}</span>
                            </md-whiteframe>
                        </md-radio-button>
                    </div>
                    <div flex="5"></div>
                </div>
            </md-radio-group>
            <br>
            <section layout="row" layout-sm="column" layout-align="center center">
                <input type="text" name="qid" value="${{qid}}" id="qid" style="display:none;">
                <input type="text" name="answer" ng-model="data" required style="display:none;">
                <input type="text" name="next" value="${{next}}" required style="display:none;">
                <md-button type="submit" class="md-raised md-warn" style="min-width: 10em;">Next</md-button>
            </section>
        </form>

        <br>
    </md-content>

    <?php \dales\view\HTML::includeJs("bower_components/angular/angular.min"); ?>
    <?php \dales\view\HTML::includeJs("bower_components/angular-animate/angular-animate.min"); ?>
    <?php \dales\view\HTML::includeJs("bower_components/angular-aria/angular-aria.min"); ?>
    <?php \dales\view\HTML::includeJs("bower_components/angular-material/angular-material.min"); ?>
    <script src="//cdn.jsdelivr.net/angular-material-icons/0.4.0/angular-material-icons.min.js"></script>
    <?php \dales\view\HTML::includeJs("script"); ?>




</body>

</html>