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
            Click on Category to Add Questions
            <br/><br/>
            ${{response}}

            <md-list>
                <?php
                if(isset($category)){
                foreach($category as $key) {
                ?>
                <md-list-item class="md-3-line">

                    <div class="md-list-item-text">
                        <form action="<?php echo ''.BP.'admin/add.php';?>" method="post">
                        <md-button><?php echo $key['name'] ?></md-button>
                        <input type="hidden" name="id" value="<?php echo $key['id']; ?>"/>
                        </form>
                    </div>
                    <md-divider ng-if="!$last"></md-divider>

                </md-list-item>
                <?php
                }}
                ?>
            </md-list>
        </md-card-content>
    </md-card>

    <md-card>
        <md-card-content layout="row" layout-align="center center">
            <div flex>
                <form action="<?php echo ''.BP.'admin/setting.php';?>" method="post">
                    <section layout="row" layout-sm="column" layout-align="center center">
                        <md-button class="md-raised md-primary" style="min-width: 15em; height: 3em;">Setting</md-button>
                    </section>
                </form>
            </div>
            <div flex>
                <form action="<?php echo ''.BP.'admin/category/create.php';?>" method="post">
                    <section layout="row" layout-sm="column" layout-align="center center">
                        <md-button class="md-raised md-primary" style="min-width: 15em; height: 3em;">New Category</md-button>
                    </section>
                </form>
            </div>
            <div flex>
                <form action="<?php echo ''.BP.'admin/reset.php';?>" method="post">
                    <section layout="row" layout-sm="column" layout-align="center center">
                        <md-button class="md-raised md-primary" style="min-width: 15em; height: 3em;">Reset</md-button>
                    </section>
                </form>
            </div>
            <div flex>
                <form action="<?php echo ''.BP.'signout.php';?>" method="post">
                    <section layout="row" layout-sm="column" layout-align="center center">
                        <md-button class="md-raised md-primary" style="min-width: 15em; height: 3em;">SignOut</md-button>
                    </section>
                </form>
            </div>
            <div flex>
                <form action="<?php echo ''.BP.'admin/result.php';?>" method="post">
                    <section layout="row" layout-sm="column" layout-align="center center">
                        <md-button class="md-raised md-primary" style="min-width: 15em; height: 3em;">Result</md-button>
                    </section>
                </form>
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