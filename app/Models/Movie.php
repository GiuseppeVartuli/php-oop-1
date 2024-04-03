<?php 


/**
 * Class Movie
 */

class Movie 
{
    /*
    public $title;
    public $overview;
    public $duration;
    public $cast;
    public $genres;
    */

    public function __construct(public $title, public $overview, public $duration, public $cast, public array $genres)
    {
        $this->title = $title;
        $this->overview = $overview;
        $this->duration = $duration;
        $this->cast = $cast;
        $this->genres = $genres; 
    }

}




?>