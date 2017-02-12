<?php
require_once 'classes/DbSelectClass.php';
$dbSelect = new DbSelect;

// mySQL start position 
$startFrom = 0;
// records to show per page
$limit = 10;


if(!isset($_GET['orderBy'])){
    $orderBy = 'id';
}else{
    $orderBy = $_GET['orderBy'];
}

// sorting order
if(isset($_GET['sort'])){
    $sort = $_GET['sort'];
}else{
    $sort = 'DESC';
}

// set current page
if(!isset($_GET['page'])){
    $currentPage = 1;
}else{
    $currentPage = $_GET['page'];
}

// get number of records
$booksQuantity = $dbSelect->getQuantity('books');

// calculate number of pages
$numberOfPages = ceil($booksQuantity / $limit);

// calculate the record to start from
$startFrom = ($currentPage - 1) * $limit;

// get books list from database
$booksList = $dbSelect->getBooks($startFrom, $limit, $orderBy, $sort);

require_once 'template_index.php';
?>
