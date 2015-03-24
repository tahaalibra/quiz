<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <?php echo $html->includeCss("angular-material.min"); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="style.css">
</head>

<body class="container">
    <div layout="column" layout-fill>
        <md-whiteframe class="md-whiteframe-z1" layout layout-align="center center">
            <h2>Thank you for appearing for the test.</h2>
        </md-whiteframe>
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