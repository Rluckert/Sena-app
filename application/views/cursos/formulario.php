<?php
$attributes = array('class' => 'form-horizontal');
echo form_open('cursos/recibirdatos', $attributes);
?>
   <div class="form-group">
    <label for="Name">Nombre curso:</label>
    <input type="text" class="form-control" name="nameCurso">
  </div>
  <div class="form-group">
    <label for="videosNumber">Número de videos</label>
   <input type="text" class="form-control" id="pwd" name="videosNumber">
  </div>
  <button type="submit" class="btn btn-primary">Enviar datos</button>

<?= form_close();?>





  
 
 
 
  

</body>
</html>



