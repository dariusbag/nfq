<!DOCTYPE html>
<html>
<head>
<title>NFQ įvedimas</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="col-sm-2 container">
		<form method="POST" action="" autocomplete="off">
			<div class="form-group">
				<label>Pavadinimas: </label>
				<input class="form-control" type="text" name="title" value=""/>
				<label>Išleidimo metai: </label>
				<input class="form-control" type="text" name="year" value=""/>
				<label>Autorius: </label>
				<input class="form-control" type="text" name="author" value=""/>
				<label>Žanras: </label>
				<input class="form-control" type="text" name="genre" value=""/>
			</div>
			<input type="submit" class="btn btn-default btn-block" name="enter_answer" value="Pateikti" />
		</form>
	</div>
	<!-- display books list -->
	<div class="col-sm-4">
		<table class="table table-hover table-condensed table-striped table-bordered">
			<tr>
				<th colspan="4">Knygų sąrašas <strong>(<?php echo $booksQuantity; ?>)</strong></th>
			</tr>
			<tr>
				<th>Knygos ID </th>
				<th>Knygos pavadinimas</th>
				<th>Autoriaus ID</th>
				<th>Žanro ID</th>
			</tr>
			<?php for($i = 0; $i < count($booksList); $i++){
				echo
					'<tr>
						<td>'. $booksList[$i]['id'] .'</td>
						<td>'. $booksList[$i]['title'] .'</td>
						<td>'. $booksList[$i]['author_id'] .'</td>
						<td>'. $booksList[$i]['genre_id'] .'</td>
					</tr>';
				} ?>
		</table>
	</div>
	<div class="col-sm-3">
	<!--  display authors list -->
		<table class="table table-hover table-condensed table-striped table-bordered">
			<tr>
				<th colspan="2">Autorių sąrašas <strong>(<?php echo $authorsQuantity; ?>)</strong></th>
			</tr>
			<tr>
				<th>Autoriaus ID</th>
				<th>Autorius</th>
			</tr>
			<?php for($i = 0; $i < count($authorsList); $i++){
				echo
					'<tr>
						<td>'. $authorsList[$i]['id'] .'</td>
						<td>'. $authorsList[$i]['name'] .'</td>
					</tr>';
				} ?>
		</table>
	</div>
	<div class="col-sm-3">	
	<!-- display genres list -->
		<table class="table table-hover table-condensed table-striped table-bordered">
			<tr>
				<th colspan="2">Žanrų sąrašas <strong>(<?php echo $genresQuantity; ?>)</strong></th>
			</tr>
			<tr>
				<th>Žanro ID</th>
				<th>Žanras</th>
			</tr>
			<?php for($i = 0; $i < count($genresList); $i++){
				echo
					'<tr>
						<td>'. $genresList[$i]['id'] .'</td>
						<td>'. $genresList[$i]['category'] .'</td>
					</tr>';
				} ?>
		</table>
	</div>
</body>
</html>
