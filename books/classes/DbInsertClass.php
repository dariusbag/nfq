<?php
require_once 'DbConnectClass.php';

class DbInsert extends DbConnect{
	public function insertBook($title, $year, $author, $genre){
		$stmt = $this->dbConn->prepare(
			"INSERT INTO books (title, year_published, author_id, genre_id)
			VALUES (:title, :year, :author, :genre)");
		$stmt->bindValue(':title', $title);
		$stmt->bindValue(':year', $year);
		$stmt->bindValue(':author', $author);
		$stmt->bindValue(':genre', $genre);
		$stmt->execute();
	}
	
	public function insertGenre($genre){
		$stmt = $this->dbConn->prepare("INSERT INTO genres (category) VALUES (:category)");
		$stmt->bindValue(':category', $genre);
		$stmt->execute();
	}
	
	public function insertAuthor($author){
		$stmt = $this->dbConn->prepare("INSERT INTO authors (name) VALUES (:name)");
		$stmt->bindValue(':name', $author);
		$stmt->execute();
	}
}
?>