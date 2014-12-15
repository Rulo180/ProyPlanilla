<?php
echo $this->Form->create('Curso'); ?>

<fieldset>
    <legend>Registrar Curso:</legend>
    
    <?php 
        echo $this->Form->input('año_curso', array('label' => 'Año:'));
        echo $this->Form->input('division_curso', array('label' => 'División:'));
    ?>
</fieldset>

<?php echo $this->Form->end('Guardar');