<!DOCTYPE html>
<html lang="en" ng-app="LoginApp">

<head>
    <?php \dales\view\HTML::includeCss( 'bower_components/angular-material/angular-material.min');
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
                <md-whiteframe class="md-whiteframe-z1" layout-padding>
                    Total number of questions: <span>${{total}}</span>
                </md-whiteframe>
                <br/>
                <br/>
                <md-whiteframe class="md-whiteframe-z1" layout-padding>
                    Total number of questions Selected for Quiz: <span>${{quiz_total}}</span>
                </md-whiteframe>
                <br/>
                <br/>
                <br/> ${{response}}
                <br>
                <br>

                <md-list>
                    <?php if(isset($category)){ foreach($category as $key) { ?>
                    <div flex layout="row" layout-align="left left">
                        

                            <div flex="25">
                                <h3><?php echo $key['name'] ?></h3>
                            </div>

                            <div flex="25">
                                <p>Total Questions:
                                    <?php echo $key[ 'total'] ?>
                                </p>
                            </div>

                            <div flex="25">
                                <p>Question Selected for Quiz:
                                    <?php echo $key[ 'q_count'] ?>
                                </p>
                            </div>

                            <div flex="25">
                                <form name="myForm" action="" method="post">
                                    <div layout="row" layout-align="center center">

                                        <md-input-container>
                                            <input  style="border-bottom:1px solid black;" type="number" placeholder="" name="q_count" max="<?php echo $key['total'] ?>" min="0" />
                                            <input type="hidden" name="category" value="<?php echo $key['id']; ?>" />
                                        </md-input-container>

                                        <md-button class="md-primary" layout layout-align="center end">Save</md-button>
                                    </div>

                                </form>
                            </div>
                    </div>
                    <md-divider ng-if="!$last"></md-divider>


                    <?php }} ?>
                </md-list>

            </md-card-content>
        </md-card>





        <md-card>
            <md-card-content layout="row" layout-align="center center">
                <div flex>
                </div>
                <div flex>
                    <form action="<?php echo ''.BP.'admin.php';?>" method="post">
                        <section layout="row" layout-sm="column" layout-align="center center">
                            <md-button class="md-raised md-primary" style="min-width: 20em; height: 3em;">Back</md-button>
                        </section>
                    </form>
                </div>
                <div flex>
                </div>
            </md-card-content>
        </md-card>
    </md-content>



    <!-- Angular Material Dependencies -->
    <?php \dales\view\HTML::includeJs( "bower_components/angular/angular.min"); ?>
    <?php \dales\view\HTML::includeJs( "bower_components/angular-animate/angular-animate.min"); ?>
    <?php \dales\view\HTML::includeJs( "bower_components/angular-aria/angular-aria.min"); ?>
    <?php \dales\view\HTML::includeJs( "bower_components/angular-material/angular-material.min"); ?>
    <script src="//cdn.jsdelivr.net/angular-material-icons/0.4.0/angular-material-icons.min.js"></script>
    <?php \dales\view\HTML::includeJs( "script"); ?>




</body>

</html>