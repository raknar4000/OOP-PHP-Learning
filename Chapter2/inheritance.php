<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
<?php

    
    require 'premiumCheckingAccount.php';
     
    $premiumCheckingAccount = new premiumCheckingAccount();

    
    echo $premiumCheckingAccount->minimumBalance . '<br>';

    $premiumCheckingAccount->deposit(20);
    $premiumCheckingAccount->withdraw(10);
    $premiumCheckingAccount->transfer(1000);

?>
</body>
</html>