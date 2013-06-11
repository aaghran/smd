<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo "Social Media Directory | " . $title; ?></title>
        <?php echo Asset::css('bootstrap.css'); ?>
        <style>
            .header{height:80px; background-color: black; padding: 20px}
        </style>
    </head>
    <body>
        <div class="header ">
            <div class="container">
                <h1 style="color: white"><?php echo "Social Media Directory  <br />"; ?></h1>
                <h3 style="color: white;margin-left: 30px"><?php echo $title; ?></h3>
            </div>
        </div>
        <div class="container">
            <div class="span12">

                <hr>
                <div class="span12">
                    <?php echo $content; ?>
                </div>
                <footer>
                </footer>
            </div>
    </body>
</html>
