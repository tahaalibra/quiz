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
<md-toolbar>
    <div class="md-toolbar-tools">
        <div flex></div>
        <div flex layout="row" layout-align="center center">
            <h2>Login</h2>
        </div>
        <div flex></div>
    </div>
</md-toolbar>
<md-content layout="row" layout-fill layout-align="center center">
    <div flex="66">
        <md-whiteframe class="md-whiteframe-z2" layout="column" layout-align="center center" layout-padding>
            <md-content class="md-padding" layout-align="center center" style="font-size:1.2em">
                ${{response}}
                <form action="" method="post">
                    <md-input-container md-no-float flex style="width:100%">
                        <label>Full Name</label>
                        <input style="border-bottom:1px solid blue;" type="text" name="name" required>
                    </md-input-container>
                    <md-input-container md-no-float flex>
                        <ng-md-icon icon="email" style="fill: #01579b;" size="48"></ng-md-icon>
                        <label>Username</label>
                        <input style="border-bottom:1px solid blue;" type="text" name="username" required>
                    </md-input-container>
                    <md-input-container md-no-float flex>
                        <ng-md-icon icon="vpn_key" style="fill: #42bd41;" size="48"></ng-md-icon>
                        <label>Password</label>
                        <input style="border-bottom:1px solid blue;" type="password" name="password" required>
                    </md-input-container>
                    <br>
                    <section layout="row" layout-sm="column" layout-align="center center">
                        <md-button class="md-raised md-warn" style="min-width: 10em;">SignUp</md-button>
                    </section>
                    <br>
                </form>
                <form action="<?php echo ''.BP.'signin.php';?>" method="post">
                    <section layout="row" layout-sm="column" layout-align="center center">
                        <md-button class="md-raised md-primary" style="min-width: 20em; height: 3em;">Back To SignIn</md-button>
                    </section>
                </form>
            </md-content>
        </md-whiteframe>
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