<?php

if(isset($POST["submit"]))
{
    // Grabbing the data

    $uid = $_POST["uid"]; // ["uid"] should be exact same as name tag we got in html
    $uid = $_POST["pwd"];
    $uid = $_POST["pwdrepeat"];
    $uid = $_POST["email"];

    // Instantiate SignUpContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);


    // Running error handlesrs and user signup

    // Going to back to front page 
}