<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8">
	</head>
	<body>
		<h1>Sequência</h1>
		<form action="129.php" 
		      method="GET">
			<label for="p_numero">Selecione o valor inicial:</label>
			<input type="number" name="p_numero" id="p_numero">
			<br>
            <label for="u_numero">Selecione o valor final:</label>
            <input type="number" name="u_numero" id="u_numero">
			<br>
			<label for="mostrar">Mostrar:</label> <br>
			<input type="radio" name="mostrar" id="exb_t" value="todos">
			<label for="mostrar">Todos</label> <br> 
			<input type="radio" name="mostrar" id="exb_p" value="exb_p"> 
			<label for="mostrar">Apenas pares</label> <br>
			<input type="radio" name="mostrar" id="exb_i" value="exb_i"> 
			<label for="mostrar">Apenas ímpares</label> <br>
			<input type="submit" value="Mostrar a sequência">
			
		</form>
	</body>
</html>