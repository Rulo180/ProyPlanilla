<?php
echo $this->Form->create('Curso'); ?>

<fieldset>
    <legend>Registrar Curso:</legend>
    
    <?php 
        echo $this->Form->input('año_curso', array('label' => 'Año:'));
        echo $this->Form->input('division_curso', array('label' => 'División:'));
        echo $this->Form->input('escuela_id', array('options' => array($id_escuela => $id_escuela), 'default' => $id_escuela,'label' => 'Escuela:', 'type' => 'hidden'));
    ?>
</fieldset>

<?php echo $this->Form->end('Guardar');