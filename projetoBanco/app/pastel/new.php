<?php
    include '../../classes/session/Session.php';
    Session::validaSession(true);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Pastel</title>
	<meta charset="UTF-8" />
    <form method="POST" action="action/save.php">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>




<div class="container py-4">
        <h1>Pedido de Pastel</h1>
		<div class="form-group">
			<label for="sabor">Sabor</label>
			<select class="form-control" required name="sabor">
				<option value="Presunto_e_Queijo">Presunto e Queijo</option>
				<option value="Carne">Carne</option>
                <option value="Frango">Frago</option>
                <option value="Misto">Misto</option>
			</select>

<br>
<br>
            <div class="row">
			<div class="col">
            Seu Nome<input type="text" name="nome" required class="form-control" placeholder="nome....">
				</div>	
				<div class="col">
				Setor<input type="text" name="setor" required class="form-control" placeholder="Setor....">
				</div>			
		</div>	



		<br>


		<div class="form-group">
				<label for="obs">Forma de Pagamento: </label>
				<textarea class="form-control" name="obs" raws="3"></textarea>
		</div>

</div>


		<br>

		<button type="submit" class="btn btn-primary">Cadastrar</button>


	</div>

</body>
</html>