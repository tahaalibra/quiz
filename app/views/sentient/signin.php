<html lang="en" ng-app="LoginApp">

<head>
     <?php echo $html->includeCss("angular-material.min"); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="style.css">
</head>

<body layout="column" ng-controller="AppCtrl">
    <md-toolbar>
        <div class="md-toolbar-tools">
            <div flex></div>
            <div flex layout="row" layout-align="center center"><h2>Login</h2></div>
            <div flex></div>
        </div>
    </md-toolbar>
    <md-content layout="row" layout-fill layout-align="center center">
        <div flex="66">
            <md-content class="md-padding" layout-align="center center" style="font-size:1.2em">
                <md-whiteframe class="md-whiteframe-z2" layout="column" layout-align="center center" layout-padding>
                    <form action="<?php echo INSTALL_FOLDER.'/signin';?>" method="post">
                    
                    <md-input-container md-no-float flex style="width:100%">
                        <ng-md-icon icon="email" style="fill: #01579b" size="48"></ng-md-icon>
                        <input type="text" name="username">
                    </md-input-container>
                    <md-input-container md-no-float flex style="width:100%">
                        <ng-md-icon icon="vpn_key" style="fill: #42bd41" size="48"></ng-md-icon>
                        <input type="password" name="password">
                    </md-input-container>
                    <br>
                    <section layout="row" layout-sm="column" layout-align="center center">
                        <md-button class="md-raised md-warn" style="min-width: 10em;">Login</md-button>
                    </section>
                    <br>
                    </form>
                </md-whiteframe>
            </md-content>
        </div>
    </md-content>

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
