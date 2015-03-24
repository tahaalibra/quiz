<!DOCTYPE html>
<html lang="en" ng-app="ResultApp">

<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <?php echo $html->css("bower_components/angular-material/angular-material.min"); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="style.css">
</head>

<body ng-controller="AppCtrl">
    <div layout="column" layout-fill>
        <div flex>
            <md-whiteframe class="md-whiteframe-z1" layout layout-align="center center">
                <h2>Thank you for appearing for the test.</h2>
            </md-whiteframe>
        </div>
        <div flex layout="row" layout-align="center center">
            <div flex></div>
            <div flex>
                <md-card>
                    <md-card-content>
                        <form class="form-inline" action="<?php echo ''.INSTALL_FOLDER.'/signout';?>" method="post">
                            <section layout="row" layout-sm="column" layout-align="center center">
                                <md-button class="md-raised md-primary" style="min-width: 10em;">Signout</md-button>
                            </section>
                        </form>
                    </md-card-content>
                    <img src="photo.php?id=yoda.jpg" alt="">
                </md-card>
            </div>
            <div flex></div>
        </div>

        <div div layout="row" layout-align="center end">
            <div flex>
            </div>
            <div flex layout="row" layout-align="center center" style="text-align:center;">
                <div>
                    <br>I remember the first time I saw someone move like they were from another planet.
                    <br> Quiz V1.1 Material Developed By The A Club, MIT
                    <br>
                </div>
            </div>
            <div flex>
            </div>
        </div>


    </div>

    <!-- Angular Material Dependencies -->
    <?php echo $html->includeJs("angular.min"); ?>
    <?php echo $html->includeJs("angular-animate.min"); ?>
    <?php echo $html->includeJs("angular-aria.min"); ?>
    <?php echo $html->includeJs("angular-material.min"); ?>
    <script src="//cdn.jsdelivr.net/angular-material-icons/0.4.0/angular-material-icons.min.js"></script>
    <!-- My Script -->
    <?php echo $html->includeJs("script"); ?>
</body>

</html>