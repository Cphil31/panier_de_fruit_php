<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulaire</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<div class="ui grid">
		<div class="four wide column"></div>
		<div class="eight wide column">
			<form class="ui form">
				<div class="field">
					<label>Nom</label>
					<input type="text" name="nom" placeholder="nom">
				</div>
				<div class="field">
					<label>Prix</label>
					<input type="text" name="prix" placeholder="Prix">
				</div>
				<div class="field">
					<label>Stock</label>
					<input type="text" name="stock" placeholder="stock">
				</div>

				<form action="/products/form" method="post">
				<button class="ui button" type="submit">Submit</button>
				</form>
				
			</form>
		</div>
		<div class="four wide column"></div>
	</div>
</body>
</html>