<?php
/**
 * Created by PhpStorm.
 * User: sccouch
 * Date: 3/25/14
 * Time: 1:39 PM
 */

class BookSearch {

    protected $books;
    protected $results;

    public function __construct($books) {
        $this->books = $books;
    }

    public function find ($search, $exact) {

        if ($exact) {
            foreach($this->books as $book) {

                if(strcasecmp($book['title'], $search) == 0) {
                    var_dump($book);
                    array_push($results, $book);
                }
            }
        }

        else {
            foreach($this->books as $book) {
                if(stripos($book['title'], $search)) {
                    array_push($results, $book);
                }
            }
        }

        return $results;


    }

} 