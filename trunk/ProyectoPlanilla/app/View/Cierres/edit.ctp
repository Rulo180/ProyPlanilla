<?php
    echo $this->Form->create('Cierre', array('action' => 'edit'));
?>
<fieldset>
    <legend>Editar Cierre</legend>
        <?php 
            echo $this->Form->input('trimestre', array('label' => 'Trimestre:', 'options' => array(1 => '1ero', 2 => '2do', 3 => '3ero')));
            echo $this->Form->input('fecha_cierre', array('label' => 'Fecha:', 'type' => 'date'));
            echo $this->Form->input('escuela_id', array('options' => array($id_escuela => $id_escuela), 'default' => $id_escuela,'label' => 'Escuela:', 'type' => 'hidden'));
            echo $this->Form->input('id_cierre', array('type' => 'hidden'));
        ?>
</fieldset>
<?php
    echo $this->Form->end('Guardar');
?>