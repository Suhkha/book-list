<?php 
class Book extends Eloquent
{
    protected $table = 'books';

    protected $fillable = array('title', 'author', 'available');

    public static $rules = array(
            'title' => 'required|min:3',
            'author'=> 'required|min:3'
        );
}


?>