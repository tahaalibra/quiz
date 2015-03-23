<html lang="en" ng-app="TestApp">

<head>
    <link rel="stylesheet" href="bower_components/angular-material/angular-material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <?php echo $html->includeCss("style"); ?>
</head>

<body layout="column" ng-controller="AppCtrl">
    <md-toolbar>
        <h2 class="md-toolbar-tools">
        <div flex="10" class="qno">Question <span class="number">#${{question_no}} / ${{question_total}} </span></div>
        <div flex></div>
        <div flex="5" class="time">05:44</div>
    </h2>
        <md-progress-linear class="md-accent" md-mode="determinate" value="{{ ( ${{question_no}}/${{question_total}} )*100 }}"></md-progress-linear>
    </md-toolbar>
    <br>
    <md-content>
        <div layout="row" layout-sm="column">
            <div flex="5"></div>
            <div flex>
                <md-card>
                    ${{image}}
                    
                    <md-card-content>
                        <p>${{question}}</p>
                    </md-card-content>
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
            <md-button type="submit" class="md-raised md-warn" style="min-width: 10em;">Next</md-button>
        </section>
        </form>

        <br>
    </md-content>
    
    <script src="bower_components/angular/angular.min.js"></script>
    <script src="bower_components/angular-animate/angular-animate.min.js"></script>
    <script src="bower_components/angular-aria/angular-aria.min.js"></script>
    <script src="bower_components/angular-material/angular-material.min.js"></script>
    <script src="//cdn.jsdelivr.net/angular-material-icons/0.4.0/angular-material-icons.min.js"></script>
    
    
    <?php echo $html->includeJs("script"); ?>
</body>

</html>