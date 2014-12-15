<?php echo $this->Form->create('Escuela');?>

<fieldset>
    <legend>Registrar Escuela:</legend>
    
    <?php
        echo $this->Form->input('nombre_escuela', array('label' => 'Nombre:'));
        echo $this->Form->input('nro_escuela', array('label' => 'Nro°:'));
        echo $this->Form->input('telefono_escuela', array('label' => 'Teléfono:'));
    ?>
</fieldset>

<?php echo $this->Form->end('Guardar'); ?>

