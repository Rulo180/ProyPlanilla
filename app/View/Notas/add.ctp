<?php
echo $this->Form->create('Nota'); ?>

<fieldset>
<legend>Registrar Notas:</legend>
    <table id="mytable">
        <th></th>
        <th>Alumno</th>
        <th>Nota</th>
        <th>Tipo</th>
        <th>Cierre</th>
        <tr id="nota0"> 
            <td><?php    echo $this->Form->button('&nbsp;-&nbsp;',array('type'=>'button','title'=>'Borrar nota')); ?></td>
            <td><?php    echo $this->Form->select('alumno_id', $alumnos, array('label' => 'Alumno:'));?></td>
            <td><?php    echo $this->Form->input('valor_nota', array('label' => ''));?></td>
            <td><?php    echo $this->Form->select('tipo_nota_id', $tipos,array('label' => 'Tipo'));?></td>
            <td><?php    echo $this->Form->input('cierre_id', array('options' => array($id_cierre => $id_cierre), 'default' => $id_cierre));?></td>
        </tr>
        <tr id="trAdd"><td> <?php echo $this->Form->button('+',array('type'=>'button','title'=>'Agregar nota','onclick'=>'agregarNota()')); ?> </td><td></td><td></td><td></td><td></td></tr>
    </table>
</fieldset> 
<?php echo $this->Form->end('Guardar');

/*
 * Codigo copiado de un ejemplo. Falta importar el jQuery
 */
   echo $this->Html->script(array('jquery-1.11.2'));
   echo $this->Html->script(array("funciones"))?>