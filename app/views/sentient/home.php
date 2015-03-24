<!DOCTYPE html>
<html lang="en" ng-app="LoginApp">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <?php echo $html->includeCss("angular-material.min"); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <?php echo $html->includeCss("style"); ?>
</head>

<body layout="column" ng-controller="AppCtrl">
    <md-content layout="row" layout-fill layout-align="center center">
        <div flex="33">
            <div layout-fill layout-padding layout-margin>
                <md-whiteframe class="md-whiteframe-z2">
                    <form class="form-inline" action="" method="post">
                        <md-input-container md-no-float flex style="width:100%">
                           <label>Full Name</label>
                            <input type="text" name="name">
                        </md-input-container>
                        <div flex="15">
                            <section layout="row" layout-sm="column" layout-align="center center">
                                <md-button class="md-raised md-primary" style="min-width: 10em;">Start Quiz</md-button>
                            </section>
                        </div>
                    </form>
                    <br>
                    <form class="form-inline" action="<?php echo ''.INSTALL_FOLDER.'/signout';?>" method="post">
                        <section layout="row" layout-sm="column" layout-align="center center">
                            <md-button class="md-raised md-primary" style="min-width: 10em;">Signout</md-button>
                        </section>
                    </form>
                </md-whiteframe>
            </div>
        </div>
    </md-content>
    <!-- Angular Material Dependencies -->
    <?php echo $html->js("bower_components/angular/angular.min"); ?>
    <?php echo $html->js("bower_components/angular-animate/angular-animate.min"); ?>
    <?php echo $html->js("bower_components/angular-aria/angular-aria.min"); ?>
    <?php echo $html->js("bower_components/angular-material/angular-material.min"); ?>
    <script src="//cdn.jsdelivr.net/angular-material-icons/0.4.0/angular-material-icons.min.js"></script>
    <?php echo $html->includeJs("script"); ?>
</body>

</html>