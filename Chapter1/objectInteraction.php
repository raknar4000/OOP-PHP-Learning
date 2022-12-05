<?php
    //song class
class Song 
{
    // public properties
    public $songId;
    public $title;
    
}

$octopusSong= new Song();

$octopusSong->songId = 1;
$octopusSong->title = "Octopus's Garden";

class Playlist
{
    public $name;
    public $songs = [];
    // create a method function, song object as an arguement
    public function addSong($song) {

        $this->songs[] = $song;
    }
}

$nasSong= new Song();

$nasSong->songId = 2;
$nasSong->title = "Halftime";


$playlist = new Playlist();
//give playlist some properties
$playlist->name = 'Rock';
//calling a method
$playlist->addSong($octopusSong);
$playlist->addSong($nasSong);
var_dump($playlist->songs);