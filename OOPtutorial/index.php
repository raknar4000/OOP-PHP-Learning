<?php
  include 'includes/autoloader.php';
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
        $person1 = new Person\Person("Ragnar", 28);
        echo $person1->getPerson();

       
    ?>
    
</body>
</html>