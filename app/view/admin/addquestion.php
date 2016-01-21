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

            <md-whiteframe class="md-whiteframe-z1" layout-padding>
                <span>Add a new question</span>
            </md-whiteframe>
            <br/><br/><br/>
            ${{response}}
            <br>
            <br>
            <form action="<?php echo BP.'admin/add.php'?>" method="post" novalidate>
                <md-input-container flex>
                    <label>Question</label>
                    <textarea style="border-bottom:1px solid grey;" id="mytextarea" name="question" columns="3" placeholder="Enter a new question" required></textarea>
                </md-input-container>


                <!--<md-button class="md-fab md-primary md-hue-2" aria-label="Profile">
                    <ng-md-icon icon="photo" style="fill: #fff" size="42"></ng-md-icon>
                </md-button>-->

                <div layout layout-sm="column">
                    <md-input-container flex>
                        <label>Option 1</label>
                        <textarea style="border-bottom:1px solid grey;" name="answere1" columns="3" placeholder="Option #1 for this question" required></textarea>
                    </md-input-container>
                    <div flex="5"></div>
                    <md-input-container flex>
                        <label>Option 2</label>
                        <textarea style="border-bottom:1px solid grey;" columns="3" name="answere2" placeholder="Option #2 for this question" required></textarea>
                    </md-input-container>
                </div>
                <div layout layout-sm="column">
                    <md-input-container flex>
                        <label>Option 3</label>
                        <textarea style="border-bottom:1px solid grey;" columns="3" name="answere3" placeholder="Option #3 for this question" required></textarea>
                    </md-input-container>
                    <div flex="5"></div>
                    <md-input-container flex>
                        <label>Option 4</label>
                        <textarea style="border-bottom:1px solid grey;" columns="3" name="answere4" placeholder="Option #4 for this question" required></textarea>
                    </md-input-container>
                </div>
                <div layout layout-sm="column">
                    <md-input-container flex>
                        <label>Correct Option (Ex 1)</label>
                        <input style="border-bottom:1px solid grey;" name="answere" placeholder="Ex 1 or 2..." required>
                    </md-input-container>
                </div>
                <br>
                <input type="hidden" value="${{id}}" name="category"/>
                <input type="hidden" value="${{id}}" name="id"/>

                <section layout="row" layout-sm="column" layout-align="center center">
                    <md-button class="md-raised md-primary" style="min-width: 20em; height: 3em;">Add Question</md-button>
                </section>
                <br>
            </form>
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
<?php \dales\view\HTML::includeJs("bower_components/angular/angular.min"); ?>
<?php \dales\view\HTML::includeJs("bower_components/angular-animate/angular-animate.min"); ?>
<?php \dales\view\HTML::includeJs("bower_components/angular-aria/angular-aria.min"); ?>
<?php \dales\view\HTML::includeJs("bower_components/angular-material/angular-material.min"); ?>
<?php \dales\view\HTML::includeJs("tinymce/tinymce.min"); ?>
<script src="//cdn.jsdelivr.net/angular-material-icons/0.4.0/angular-material-icons.min.js"></script>
<!--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>-->
<?php \dales\view\HTML::includeJs("script"); ?>

<script type="text/javascript">
    tinymce.init({
        selector: "#mytextarea"
    });
</script>

</body>

</html>