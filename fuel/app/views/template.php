<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo "Social Media Directory | " . $title; ?></title>
        <?php echo Asset::css('bootstrap.css'); ?>
        <style>
            body { margin: 40px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="span12">
                <h1><?php echo "Social Media Directory  <br />"; ?></h1>
                <h3><?php echo $title; ?></h3>
                <hr>
                <div class="span12">
                    <?php echo $content; ?>
                </div>
                <footer>
                </footer>
            </div>
    </body>
</html>
