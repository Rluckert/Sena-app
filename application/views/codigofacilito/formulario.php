<?= form_open('cursos/recibirdatos');
   $nombre = array('name' => 'nameCurso',
  'placeholder' => 'Escribe tu nombre:');

  $videos = array('name' => 'videosNumber',
  'placeholder' => 'Cantidad videos del curso');

  echo form_label('Nombre :', 'name');
  echo form_input($nombre);
  echo "<br><br>";
  echo form_label('Vídeos :', 'vídeos');
  echo form_input($videos);
  $buton = array('type' => 'submit', 'value'=> 'Submit');
  echo form_submit($buton);
  echo form_close();


?>
  
 
 
 
  

</body>
</html>



