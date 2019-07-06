<!DOCTYPE html>
<html>
<head>
    <?php
        $text = $_GET["text"];
        $cor = $_GET["cor"];
        $size = $_GET["size"];
    ?>
    <meta charset="utf-8">
    <title>Aula</title>
    <style>
        span{
            font-size: <?php echo $size; ?>;
            color: <?php echo $cor; ?>; 
        }
    </style>

</head>
<body>
    <?php
        echo "<span>$text<span>";
    ?>
</body>
</html>