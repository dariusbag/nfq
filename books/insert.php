<?php
// $title = '';
// $year = 0;
// $author = '';
// $genre = '';
// $authorID = '';
// $genreID = '';
$startFrom = 0;
$limit = 10;

$booksQuantity = 0;
$genresQuantity = 0;
$authorsQuantity = 0;

// preview block
require_once 'classes/DbSelectClass.php';
$dbSelect = new DbSelect;
	$booksList = $dbSelect->getBooks($startFrom, $limit, 'id', 'DESC');
	$authorsList = $dbSelect->getAuthors($startFrom, $limit, 'id', 'DESC');
	$genresList = $dbSelect->getGenres($startFrom, $limit, 'id', 'DESC');
    
    $booksQuantity = $dbSelect->getQuantity('books');
    $authorsQuantity = $dbSelect->getQuantity('authors');
    $genresQuantity = $dbSelect->getQuantity('genres');
    

// insertion block
require_once 'classes/DbInsertClass.php';
$dbInsert = new DbInsert;

	// checking if form filled completely
	if((strlen($_POST['title']) > 0)&&
		(strlen($_POST['year']) > 0)&&
		(strlen($_POST['author']) > 0)&&
		(strlen($_POST['genre'])) > 0){
		// if yes, assigning values to variables
			$title = $_POST['title'];
			$year = $_POST['year'];
			$author = $_POST['author'];
			$genre = $_POST['genre'];
			
			// if author is not in database, inserting new author
			if(strlen($dbSelect->getAuthorId($author)) < 1){
				$dbInsert->insertAuthor($author);
				}
			
			// if genre is not in database, inserting new genre
			if(strlen($dbSelect->getGenreId($genre)) < 1){
				$dbInsert->insertGenre($genre);
				}
			
			// getting authors's and genre's ID's from database
			$authorID = $dbSelect->getAuthorId($author);
			$genreID = $dbSelect->getGenreId($genre);
			
			// inserting information about book to database
			$dbInsert->insertBook($title, $year, $authorID, $genreID);
		}
			
require_once 'template_insert.php';
?>
