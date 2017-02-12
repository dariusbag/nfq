<?php
require_once 'classes/DbSelectClass.php';
$dbSelect = new DbSelect;

// getting book id by GET method
$bookId = $_GET['id'];

// getting book information by book id
$book = $dbSelect->getBookById($bookId);
    $genreId = $book[0]['genre_id'];
    $authorId = $book[0]['author_id'];
    $bookTitle = $book[0]['title'];
    $yearPublished = $book[0]['year_published'];

// getting book genre by genre_id
$genre = $dbSelect->getGenreById($genreId)[0]['category'];

// getting book author by genre_id
$author = $dbSelect->getAuthorById($authorId)[0]['name'];



require_once 'template_product.php';
?>