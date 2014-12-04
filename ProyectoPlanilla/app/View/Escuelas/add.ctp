<?php echo $this->Form->create('Escuela');?>

<fieldset>
    <legend>Registrar nueva escuela:</legend>
    
    <?php
        echo $this->Form->input('nombre');
        echo $this->Form->input('numero');
    ?>
</fieldset>

<?php echo $this->Form->end('Agregar escuela'); ?>

