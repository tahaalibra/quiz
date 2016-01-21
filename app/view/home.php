<!DOCTYPE html>
<html lang="en" ng-app="LoginApp">

<head>
    <?php
    \dales\view\HTML::includeCss('bower_components/angular-material/angular-material.min');
    \dales\view\HTML::includeCss('style.css');
    ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
</head>

<body layout="column" ng-controller="AppCtrl">
    <md-content layout="row" layout-fill layout-align="center center">
        <div flex="33">
            <div layout-fill layout-padding layout-margin>
                <md-whiteframe class="md-whiteframe-z2">
                    <form class="form-inline" action="" method="post">

                            <input type="hidden" name="start_test" value="start">
                        <div flex="15">
                            <section layout="row" layout-sm="column" layout-align="center center">
                                <md-button class="md-raised md-primary" style="min-width: 10em;">Start Quiz</md-button>
                            </section>
                        </div>
                    </form>
                    <br>
                    <form class="form-inline" action="<?php echo ''.BP.'signout.php';?>" method="post">
                        <section layout="row" layout-sm="column" layout-align="center center">
                            <md-button class="md-raised md-primary" style="min-width: 10em;">Signout</md-button>
                        </section>
                    </form>


                </md-whiteframe>
            </div>
        </div>
    </md-content>


    <?php \dales\view\HTML::includeJs("bower_components/angular/angular.min"); ?>
    <?php \dales\view\HTML::includeJs("bower_components/angular-animate/angular-animate.min"); ?>
    <?php \dales\view\HTML::includeJs("bower_components/angular-aria/angular-aria.min"); ?>
    <?php \dales\view\HTML::includeJs("bower_components/angular-material/angular-material.min"); ?>
    <script src="//cdn.jsdelivr.net/angular-material-icons/0.4.0/angular-material-icons.min.js"></script>
    <?php \dales\view\HTML::includeJs("script"); ?>




</body>

</html>