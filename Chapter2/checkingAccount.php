<?php

require_once 'account.php';


class CheckingAccount extends Account
{
       // transfer method
       public function transfer($amount)
       {
            echo 'Transferring ' . $amount . '<br>';
       }

}


