<?php
    // only one who is allowed to interact a database

class Users extends Dbh 
{
    // get single user from db
    protected function getUser($name) {
        $sql = "SELECT * FROM users WHERE users_firstname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        // all information we getting here is inside a array that we can pass to the next class
        return $results;
    }

    protected function setUser($firstname, $lastname, $dob) {
        $sql = "INSERT INTO users(users_firstname, users_lastname, users_dateofbirth) VALUES(?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $dob]);

        $results = $stmt->fetchAll();
        // all information we getting here is inside a array that we can pass to the next class
        return $results;
    }
}