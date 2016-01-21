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
            <div flex>
            </div>
            <div flex>
               ${{response}}
            </div>
            <div flex>
            </div>
            <br>
            <br>
            <form action="<?php echo ''.BP.'/admin/category/create.php';?>" method="post">
                <md-input-container flex>
                    <label>Enter a new Category</label>
                    <input name="category" columns="3" placeholder="Enter a new Category" required>
                </md-input-container>
                <br>
                <section layout="row" layout-sm="column" layout-align="center center">
                    <md-button class="md-raised md-primary" style="min-width: 20em; height: 3em;">Add Category</md-button>
                </section>
                <br>
            </form>
            <div flex>
            </div>
            <div flex>
                <form action="<?php echo ''.BP.'admin.php';?>" method="post">
                    <section layout="row" layout-sm="column" layout-align="center center">
                        <md-button class="md-raised md-primary" style="min-width: 20em; height: 3em;">Go Back</md-button>
                    </section>
                </form>
            </div>
            <div flex>
            </div>
        </md-card-content>
    </md-card>

</md-content>



<?php \dales\view\HTML::includeJs("bower_components/angular/angular.min"); ?>
<?php \dales\view\HTML::includeJs("bower_components/angular-animate/angular-animate.min"); ?>
<?php \dales\view\HTML::includeJs("bower_components/angular-aria/angular-aria.min"); ?>
<?php \dales\view\HTML::includeJs("bower_components/angular-material/angular-material.min"); ?>
<script src="//cdn.jsdelivr.net/angular-material-icons/0.4.0/angular-material-icons.min.js"></script>
<?php \dales\view\HTML::includeJs("script"); ?>




</body>

</html>