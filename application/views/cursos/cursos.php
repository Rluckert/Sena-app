<?php  
if ($cursos) {

foreach ($cursos->result() as $curso) {
	
?>  
<ul>
	<a href="<?= $curso->idCursos ?>"><li><?= $curso->nombreCurso ?></li></a>
</ul>
	
<?php
}
}else{
	echo "<p>Error en la aplicación</p>";
}
?>
</body>
</html>