<?php echo $this->Form->create('TipoNota');?>

<fieldset>
    <legend>Registrar Tipo de Nota:</legend>
    
    <?php
        echo $this->Form->input('nombre_tipo_nota', array('label' => 'Nombre:'));
        echo $this->Form->input('descripcion_tipo_nota', array('label' => 'Descripción:'));
    ?>
</fieldset>

<?php echo $this->Form->end('Guardar'); ?>