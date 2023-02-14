<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $connection = new mysqli ("database", "root", "1234", "mysql");

        $query = "SELECT * FROM user";
        $response = $connection -> query($query);

        echo $response -> num_rows;

        $connection -> close();

    ?>
</body>
</html>