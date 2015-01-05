<?php
echo $this->Form->create('Alumno'); ?>

<fieldset>
    <legend>Registrar Alumno:</legend>
    
    <?php 
        echo $this->Form->input('nombre_alumno', array('label' => 'Nombre:'));
        echo $this->Form->input('apellido_alumno', array('label' => 'Apellido:'));
        echo $this->Form->input('curso_id', array('options' => array($id_curso => $id_curso), 'default' => $id_curso,'label' => 'Curso:', 'type' => 'hidden'));
    ?>
</fieldset>

<?php echo $this->Form->end('Guardar');