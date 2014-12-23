<?php
    echo $this->Form->create('Alumno', array('action' => 'edit'));
?>
<fieldset>
    <legend>Editar Alumno</legend>
        <?php
           echo $this->Form->input('nombre_alumno', array('label' => 'Nombre:'));
            echo $this->Form->input('apellido_alumno', array('label' => 'Apellido:'));
            echo $this->Form->input('curso_id', array('type' => 'hidden'));
            echo $this->Form->input('id_alumno', array('type' => 'hidden'));
        ?>
</fieldset>
<?php
    echo $this->Form->end('Guardar');
?>