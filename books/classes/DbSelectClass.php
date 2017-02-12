<?php
require_once 'DbConnectClass.php';

class DbSelect extends DbConnect{
    // get number of records in table
    public function getQuantity($tableName){
        $stmt = $this->dbConn->prepare(
        "SELECT * FROM $tableName
        WHERE is_deleted = 0");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return count($result);
	}
	// retrieve all undeleted from table authors as associative array
	public function getAuthors($start, $limit){
        $stmt = $this->dbConn->prepare(
        "SELECT * FROM authors
        WHERE is_deleted = 0
        ORDER BY id DESC
        LIMIT $start, $limit" );
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
	}
	
	// retrieve all undeleted from table genre as associative array
	public function getGenres($start, $limit){
        $stmt = $this->dbConn->prepare(
        "SELECT * FROM genres
        WHERE is_deleted = 0
        ORDER BY id DESC
        LIMIT $start, $limit" );
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
	}
	
	// retrieve all undeleted from table books as associative array
	public function getBooks($start, $limit, $orderBy, $order){
        $stmt = $this->dbConn->prepare("
        SELECT * FROM books
        WHERE is_deleted = 0
        ORDER BY $orderBy $order
        LIMIT $start, $limit" );
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
	}
	// retrieve book information by Id
	public function getBookById($bookId){
        $stmt = $this->dbConn->prepare(
        "SELECT id, genre_id, author_id, title, year_published FROM books WHERE id = :id" );
        $stmt->bindValue(':id', $bookId);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
	}
	// retrieve genre information as associative array
	public function getGenreById($genreId){
        $stmt = $this->dbConn->prepare("SELECT category FROM genres WHERE id = :id" );
        $stmt->bindValue(':id', $genreId);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
	}
	// get genre ID by genre name
	public function getGenreId($genre){
		$stmt = $this->dbConn->prepare("SELECT id FROM genres WHERE category = :category");
		$stmt->bindValue(':category', $genre);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $result[0]['id'];
	}
	
	// retrieve author information as associative array
	public function getAuthorById($authorId){
        $stmt = $this->dbConn->prepare("SELECT name FROM authors WHERE id = :id" );
        $stmt->bindValue(':id', $authorId);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
	}

	// get author ID by author name
	public function getAuthorId($author){
		$stmt = $this->dbConn->prepare("SELECT id FROM authors WHERE name = :name");
		$stmt->bindValue(':name', $author);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $result[0]['id'];
	}
}
?>