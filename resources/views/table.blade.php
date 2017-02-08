<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Table</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.css">
<body>
	
	<div class="ui grid">
		<div class="five wide column"></div>
		<div class="five wide column">  	
			<table class="ui celled table">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Price</th>
					<th>Stock</th>
					<th>Ajouter/Suprimmer</th>

				</tr>
				@foreach($fruit as $key)
				<tr>
					<td>{{$key->id}}</td>
					<td>{{$key->name}}</td>
					<td>{{$key->price}}</td>
					<td>{{$key->stock}}</td>
					<td>
						
						<form action="/products/add/{{$key->id}}" method="post">
							{{csrf_field()}}
							<button class="ui button">+</button>
						</form>
						<form action="/products/down/{{$key->id}}" method="post">
							{{csrf_field()}}
							<button class="ui button">-</button>
						</form>
					</td>
					
				</tr>
				@endforeach

			</table>
		</div>
		<div class="four wide column"></div>
	</div>

	

</body>
</html>