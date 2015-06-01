<html lang="en" ng-app="LoginApp">

<head>
    <?php
    \dales\view\HTML::includeCss('bower_components/angular-material/angular-material.min');
    \dales\view\HTML::includeCss('style.css');
    ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />

</head>

<body ng-controller="AppCtrl">
<div layout="column" layout-fill>

    <div flex>
        <md-whiteframe class="md-whiteframe-z1" layout layout-align="center center">
            <h2>Result</h2>
        </md-whiteframe>
    </div>

    <md-content>
        <md-card>
            <md-card-content>
                <md-list>
                    
                    <div flex layout="row" layout-align="left left">
                        <div flex="25">Name</div>
                        <div flex="25">Score</div>
                        </div>
                    
                    <?php
                    $i = 1;
                    if(isset($result)){
                    foreach($result as $key) {
                        ?>
                        
                        <div flex layout="row" layout-align="left left">
                        <div flex="25"><?php echo $key['name'] ?></div>
                        <div flex="25"><?php echo $key['score'] ?></div>
                        </div>
                    
                        <md-divider ng-if="!$last"></md-divider>
                        <?php
                        $i++;
                    }}
                    ?>
                </md-list>
            </md-card-content>

        </md-card>
    </md-content>



    <div flex layout="row" layout-align="center center">
        <div flex></div>
        <div flex>
            <md-card>
                <md-card-content>
                    <form class="form-inline" action="<?php echo BP.'admin.php';?>" method="post">
                        <section layout="row" layout-sm="column" layout-align="center center">
                            <md-button class="md-raised md-primary" style="min-width: 10em;">Go Back</md-button>
                        </section>
                    </form>
                </md-card-content>
            </md-card>
        </div>
        <div flex></div>
    </div>




</div>

<!-- Angular Material Dependencies -->
<?php \dales\view\HTML::includeJs("bower_components/angular/angular.min"); ?>
<?php \dales\view\HTML::includeJs("bower_components/angular-animate/angular-animate.min"); ?>
<?php \dales\view\HTML::includeJs("bower_components/angular-aria/angular-aria.min"); ?>
<?php \dales\view\HTML::includeJs("bower_components/angular-material/angular-material.min"); ?>
<script src="//cdn.jsdelivr.net/angular-material-icons/0.4.0/angular-material-icons.min.js"></script>
<?php \dales\view\HTML::includeJs("script"); ?>




</body>

</html>