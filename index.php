<?php
echo "Xin chào";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Server Time</title>
</head>
<body>
<h1>The time now is :
    <?php date_default_timezone_set('Asia/Ho_Chi_Minh') ?>
    <?php echo date('Y-M-d h:m:s')?>
</h1>
</body>
</html>
