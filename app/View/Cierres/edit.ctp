<?php
    echo $this->Form->create('Cierre', array('action' => 'edit'));
?>
<fieldset>
    <legend>Editar Cierre</legend>
        <?php 
            echo $this->Form->input('trimestre', array('label' => 'Trimestre:', 'options' => array(1 => '1ero', 2 => '2do', 3 => '3ero')));
            echo $this->Form->input('fecha_cierre', array('dateFormat' => 'DMY', 'minYear' => date('Y') - 1, 'maxYear' => date('Y') + 1,'label' => 'Fecha:'));
            echo $this->Form->input('curso_id', array('label' => 'Escuela:', 'type' => 'hidden'));
            echo $this->Form->input('id', array('type' => 'hidden'));
        ?>
</fieldset>
<?php
    echo $this->Form->end('Guardar');
?>