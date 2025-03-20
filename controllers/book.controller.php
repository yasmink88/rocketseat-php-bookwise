<?php
    
    $id = $_REQUEST['id'];
    
    $filter_books = array_filter( $books, fn($book) => $book['id'] == $id );

    $book = array_pop($filter_books);

    require './views/book.view.php';
?>