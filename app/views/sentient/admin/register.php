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
                <h2>Admin | Add User</h2>
            </div>
            <div flex></div>
        </div>
    </md-toolbar>
    <br>
    <md-content>
        <form class="form-inline" action="<?php echo ''.INSTALL_FOLDER.'/admin/register';?>" method="post">
            <md-input-container flex>
                <label>Username</label>
                <input name="username">
            </md-input-container>
            <section layout="row" layout-sm="column" layout-align="center center">
                <md-button class="md-raised md-primary" style="min-width: 20em; height: 3em;">Add Username</md-button>
            </section>
        </form>
    </md-content>
    <?php echo $html->js("bower_components/angular/angular.min"); ?>
    <?php echo $html->js("bower_components/angular-animate/angular-animate.min"); ?>
    <?php echo $html->js("bower_components/angular-aria/angular-aria.min"); ?>
    <?php echo $html->js("bower_components/angular-material/angular-material.min"); ?>
    <script src="//cdn.jsdelivr.net/angular-material-icons/0.4.0/angular-material-icons.min.js"></script>
    <?php echo $html->includeJs("script"); ?>
</body>


</html>