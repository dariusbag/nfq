<!DOCTYPE html>
<html>
<head>
<title>NFQ sąrašas</title>
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
    
<ul class="pagination">
    <?php
    for($i = 1; $i < ($numberOfPages +1); $i++){
        if($i == $currentPage){ ?>
            <li class="active"><a><?php
                echo $i; ?></a></li>
        <?php }else{ ?>
        <li><a href="index.php?page=<?php
            echo $i; ?>&orderBy=<?php
            echo$orderBy; ?>&sort=<?php
            echo $sort; ?>"><?php
            echo $i; ?></a></li>
        <?php }
    } ?>
</ul>

	<table class="table table-hover table-condensed table-striped table-bordered">
		<tr>
			<th><a href="index.php?page=<?php
                echo 1; ?>&orderBy=<?php
                echo 'id'; ?>&sort=<?php
                echo ($sort == 'ASC') ? 'DESC' : 'ASC'; ?>">ID</a></th>
			<th><a href="index.php?page=<?php
                echo 1; ?>&orderBy=<?php
                echo 'title'; ?>&sort=<?php
                echo ($sort == 'ASC') ? 'DESC' : 'ASC'; ?>">Pavadinimas</a></th>
			<th><a href="index.php?page=<?php
                echo 1; ?>&orderBy=<?php
                echo 'year_published'; ?>&sort=<?php
                echo ($sort == 'ASC') ? 'DESC' : 'ASC'; ?>">Leidimo metai</a></th>
		</tr>
	<!-- get books list -->
	<?php for($i = 0; $i < count($booksList); $i++){ ?>
		<tr>
            <td><?php
                echo $booksList[$i]['id']; ?></td>
            <td><a href="product.php?id=<?php
                echo $booksList[$i]['id']; ?>"><?php
                echo $booksList[$i]['title']; ?></a></td>
            <td><?php
                echo $booksList[$i]['year_published']; ?></td>
        </tr>
	<?php } ?>
	</table>
</div>
<div class="col-sm-3">
</div>
</body>
</html>
