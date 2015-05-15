<?php
    echo $this->Form->create('Curso', array('action' => 'edit'));
?>
<fieldset>
    <legend>Editar Curso</legend>
        <?php
            echo $this->Form->input('año_curso', array('label' => 'Año:'));
            echo $this->Form->input('division_curso', array('label' => 'División:'));
            echo $this->Form->input('id', array('type' => 'hidden'));
            echo $this->Form->input('escuela_id', array('type' => 'hidden'));
        ?>
</fieldset>
<?php
    echo $this->Form->end('Guardar');
?>