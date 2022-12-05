<?php

class Comment
{
    public $text;
    public $userId;
    //passing a text property
    public function __construct($text, $userId)
    {
        $this->text = $text;
        $this->userId = $userId;
    }
}

