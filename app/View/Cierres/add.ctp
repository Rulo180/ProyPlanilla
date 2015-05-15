<?php
echo $this->Form->create('Cierre'); ?>

<fieldset>
    <legend>Registrar Cierre:</legend>
    
    <?php 
        echo $this->Form->input('trimestre', array('label' => 'Trimestre:', 'options' => array(1 => '1ero', 2 => '2do', 3 => '3ero')));
        echo $this->Form->input('fecha_cierre', array('dateFormat' => 'DMY', 'minYear' => date('Y') - 1, 'maxYear' => date('Y') + 1,'label' => 'Fecha:'));
        echo $this->Form->input('curso_id', array('options' => array($id_curso => $id_curso), 'default' => $id_curso,'label' => 'Escuela:', 'type' => 'hidden'));
    ?>
</fieldset>

<?php echo $this->Form->end('Guardar');