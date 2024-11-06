<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encode</title>
    <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>

<body>
    <?php

    $current_time = round(microtime(true) * 1000);
    echo $current_time . "<br>";
    $str = date('YmdHis');
    $code = base64_encode($str);
    echo "{$str}<br>";
    echo "{$code}<br>";
    echo base64_decode($code);

    ?>
</body>

</html>