    
<?php  

echo "hola "; echo $_GET['nombre']; echo " "; echo $_GET['apellido'];
echo " tu numero favorito es "; echo $_GET['numero'];

?>

<br><br>

<form action="respuesta2.php" method="post">

<label for="cedula"></label>
cedula  
<input type="number" name="cedula">
<br>

<label for="nacimiento"></label>
fecha de nacimiento
<input type="date" name="nacimiento">
<br>

<label for="email"></label>
tu gmail
<input type="email" name="email">
<br>

<input type="submit" value="continuar" />


</form>

