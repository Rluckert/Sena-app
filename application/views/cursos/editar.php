<?php
$attributes = array('class' => 'form-horizontal');
echo form_open('cursos/actualizar/'.$id, $attributes);

  $nombre = array('name' => 'nameCurso', 'class' => 'form-control',
  'placeholder' => 'Escribe tu nombre:',
   'value' => $curso->result()[0]->nombreCurso);
   // 

  $videos = array('name' => 'videosNumber', 'class' => 'form-control',
  'placeholder' => 'Cantidad videos del curso',
   'value' => $curso->result()[0]->videosCurso);

?>
   <div class="form-group">
    <?php 
     echo form_label('Nombre :', 'name'); 
     echo form_input($nombre);
    ?>
  </div>

  <div class="form-group">
    <?php 
     echo form_label('Número de vídeos:', 'videos'); 
     echo form_input($videos);
    ?>
  </div>
  <center><button type="submit" class="btn btn-primary">Actualizar datos</button></center>

<?= form_close();?>
  
 
 
 
  

</body>
</html>