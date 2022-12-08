<?php
    include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <?php
        $testObj = new Test();
        $testObj->setUsersStmt("John", "Doe", "1984-03-02");
    ?>
    
</body>
</html>