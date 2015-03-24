<html lang="en" ng-app="AdminApp">

<head>
    <?php echo $html->css("bower_components//angular-material/angular-material.min"); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <?php echo $html->includeCss("style"); ?>
</head>

<body layout="column" ng-controller="AppCtrl">
    <md-toolbar>
        <div class="md-toolbar-tools">
            <div flex></div>
            <div flex layout="row" layout-align="center center">
                <h2>Admin</h2>
            </div>
            <div flex></div>
        </div>
    </md-toolbar>
    <br>
    <md-content>
        <md-card>
            <md-card-content>
                <h3>Total number of questions <span>${{noofq}}</span></h3>
                <md-whiteframe class="md-whiteframe-z1" layout-padding>
                    <span>Add a new question</span>
                </md-whiteframe>
                <br>
                <br>
                <form action="<?php echo ''.INSTALL_FOLDER.'/admin/add';?>" method="post" enctype="multipart/form-data">
                    <md-input-container flex>
                        <label>Question</label>
                        <textarea name="question" columns="3" placeholder="Enter a new question" required></textarea>
                    </md-input-container>

                    <md-input-container flex>
                        <input type="file" name="image" id="image" accept="image/*">
                    </md-input-container>
                    <!--<md-button class="md-fab md-primary md-hue-2" aria-label="Profile">
                        <ng-md-icon icon="photo" style="fill: #fff" size="42"></ng-md-icon>
                    </md-button>-->

                    <div layout layout-sm="column">
                        <md-input-container flex>
                            <label>Option 1</label>
                            <input name="answere1" placeholder="Option #1 for this question">
                        </md-input-container>
                        <md-input-container flex>
                            <label>Option 2</label>
                            <input name="answere2" placeholder="Option #2 for this question">
                        </md-input-container>
                    </div>
                    <div layout layout-sm="column">
                        <md-input-container flex>
                            <label>Option 3</label>
                            <input name="answere3" placeholder="Option #3 for this question">
                        </md-input-container>
                        <md-input-container flex>
                            <label>Option 4</label>
                            <input name="answere4" placeholder="Option #4 for this question">
                        </md-input-container>
                    </div>
                    <div layout layout-sm="column">
                        <md-input-container flex>
                            <label>Correct Option</label>
                            <input name="answere" placeholder="Ex 1 or 2...">
                        </md-input-container>
                    </div>
                    <br>
                    <section layout="row" layout-sm="column" layout-align="center center">
                        <md-button class="md-raised md-primary" style="min-width: 20em; height: 3em;">Add Question</md-button>
                    </section>
                    <br>
                </form>
            </md-card-content>
        </md-card>
        <md-card>
            <md-card-content layout="row" layout-align="center center">
                <div flex="50">
                    <form action="admin/register" method="post">
                        <section layout="row" layout-sm="column" layout-align="center center">
                            <md-button class="md-raised md-primary" style="min-width: 20em; height: 3em;">Add Users</md-button>
                        </section>
                    </form>
                </div>
                <div flex>
                    <form action="admin/result" method="post">
                        <section layout="row" layout-sm="column" layout-align="center center">
                            <md-button class="md-raised md-primary" style="min-width: 20em; height: 3em;">Result</md-button>
                        </section>
                    </form>
                </div>
            </md-card-content>
        </md-card>
    </md-content>


    <div flex>
    </div>
    <div flex layout="row" layout-align="center center" style="text-align:center;">
        <div>
            <br>
            <br>
            <br> Sometimes it&#39;s the people no one imagines anything of who do the things that no one can imagine
            <br>
            <br> Quiz V1.1 Material Developed At CatchPenny Lab
            <br>
        </div>
    </div>
    <div flex>
    </div>
    <!-- Angular Material Dependencies -->
    <?php echo $html->js("bower_components/angular/angular.min"); ?>
    <?php echo $html->js("bower_components/angular-animate/angular-animate.min"); ?>
    <?php echo $html->js("bower_components/angular-aria/angular-aria.min"); ?>
    <?php echo $html->js("bower_components/angular-material/angular-material.min"); ?>
    <script src="//cdn.jsdelivr.net/angular-material-icons/0.4.0/angular-material-icons.min.js"></script>
    <?php echo $html->includeJs("script"); ?>
</body>


</html>