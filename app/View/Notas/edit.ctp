<?php
    echo $this->Form->create('Escuela', array('action' => 'edit'));
?>
<fieldset>
    <legend>Editar Escuela</legend>
            <?php    echo $this->Form->label('Alumno:');?>
            <?php    echo $this->Form->select('alumno_id', $alumnos, array('label' => 'Alumno:'));?>
            <?php    echo $this->Form->input('valor_nota', array('label' => 'Nota:'));?>
            <?php    echo $this->Form->label('Tipo Nota:');?>
            <?php    echo $this->Form->select('tipo_nota_id', $tipos, array('label' => 'Tipo:'));?>
            <?php    echo $this->Form->input('cierre_id', array('options' => array($id_cierre => $id_cierre), 'default' => $id_cierre));?>
</fieldset>
<?php
    echo $this->Form->end('Guardar');
?>