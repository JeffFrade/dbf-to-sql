<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<title>DBF to SQL</title>
		<style type="text/css">
			main {
				margin-top: 30px;
			}
		</style>
	</head>
	<body>
		<header>
		<nav class="navbar navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">DBF to SQL</a>
			</div>
			</nav>
		</header>

		<main>
			<div class="container">
			<h1 class="text-center">Convert DBF to SQL</h1>
			<hr/>
			<form method="POST" action="pages/sqlfile.php" enctype="multipart/form-data">
				<div class="form-group">
					<input type="file" id="dbf" name="dbf" required="" accept=".dbf">
				</div>

				<br/>

				<div class="form-group">
					<button type="submit" id="convert" name="convert" class="btn btn-primary"><i class="fa fa-cogs"></i>&nbsp; Convert</button>
				</div>
			</form>
			</div>
		</main>

		<footer>
			<nav class="navbar fixed-bottom navbar-dark bg-dark">
  				<a class="navbar-brand" href="#">&nbsp;</a>
			</nav>
		</footer>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>
