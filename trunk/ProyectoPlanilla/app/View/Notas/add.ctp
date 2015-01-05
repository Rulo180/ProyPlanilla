<?php
echo $this->Form->create('Nota'); ?>

<fieldset>
<legend>Registrar Notas:</legend>
    <table>
        <tr> 
            <td><?php    echo $this->Form->input('alumno_id', array('label' => 'Alumno:'));?></td>
            <td><?php    echo $this->Form->input('valor_nota', array('label' => 'Nota:'));?></td>
            <td><?php    echo $this->Form->input('tipo_nota_id', array('options' => $tipos,'label' => 'Tipo'));?></td>
            <td><?php    echo $this->Form->input('cierre_id', array('options' => array($id_cierre => $id_cierre), 'default' => $id_cierre,'label' => 'Cierre:'));?></td>
        </tr>
    </table>
</fieldset> 

<?php echo $this->Form->end('Guardar');