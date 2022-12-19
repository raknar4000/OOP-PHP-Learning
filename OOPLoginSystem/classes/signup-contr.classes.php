<?php

class SignUpContr // properties and methods here
{

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email) {
        
        // this property inside this class
        $this->$uid = $uid;
        $this->$pwd = $pwd;
        $this->$pwdRepeat = $pwdRepeat;
        $this->$email = $email;
    }

    private function signupUser() {
        if($this->emptyInput() == false) {
            // echo "empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();

        }

        $this->setUser($this->$uid, $this->$pwd, $this->$email);
        
    }

    private function emptyInput() {
        $result;
        if(empty($this->$uid) || empty($this->$pwd) || empty($this->$pwdRepeat) || empty($this->$email)) {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        $result;
        if (!$this->$checkUser($this->$uid, $this->$email))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }
}