<?php

require_once 'fileReader.php';

class csvFileReader extends FileReader
{
    public function getData()
    {
        return $this->data;
    }
}