<?= form_open("cursos/actualizar/".$id);
   $nombre = array('name' => 'nameCurso',
  'placeholder' => 'Escribe tu nombre:',
   'value' => $curso->result()[0]->nombreCurso);
   // 

  $videos = array('name' => 'videosNumber',
  'placeholder' => 'Cantidad videos del curso',
   'value' => $curso->result()[0]->videosCurso);
  

  echo form_label('Nombre :', 'name');
  echo form_input($nombre);
  echo "<br><br>";
  echo form_label('Vídeos :', 'vídeos');
  echo form_input($videos);
  $buton = array('type' => 'submit', 'value'=> 'Actualizar');
  echo form_submit($buton);
  
  echo form_close();

  print_r($curso->result());

 


?>
  
 
 
 
  

</body>
</html>