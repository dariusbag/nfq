<!DOCTYPE html>
<html>
<head>
<title>NFQ knyga</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-sm-3">
</div>
<div class="col-sm-6">
	<p><a href="index.php" class="btn btn-default btn-block" role="button" >Atgal į sąrašą</a></p>
	<table class="table table-hover table-striped table-bordered">
		<tr>
			<th colspan="2" class="jumbotron"><h1><?php echo $bookTitle; ?></h1></th>
		</tr>
		<tr>
			<th>Savybės pavadinimas</th>
			<th>Savybė</th>
		</tr>
		<tr>
			<td>Knygos identifikacinis numeris</td>
			<td><?php echo $bookId; ?></td>
		</tr>
        <tr>
        <td>Žanras</td>
			<td><?php echo $genre; ?></td>
		</tr>
		<tr>
			<td>Autorius</td>
			<td><?php echo $author; ?></td>
		</tr>
			<td>Leidybos metai</td>
			<td><?php echo $yearPublished; ?></td>
		</tr>
	</table>
</div>
<div class="col-sm-3">
</div>
	
</body>
</html>
