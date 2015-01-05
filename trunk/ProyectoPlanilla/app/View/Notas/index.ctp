<h1><b>Lista de Notas:</b></h1>
<table>
    <tr>
        <th>ID</th>
        <th>Alumno</th>
        <th>Valor</th>
        <th>Tipo Nota</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($notas as $nota): ?>
    <tr>
        <td><?php echo $nota['Nota']['id_nota']; ?></td>
        <td>
            <?php echo $nota['Nota']['alumno_id']; ?>
        </td>
        <td><?php echo $nota['Nota']['valor_nota']; ?></td>
        <td><?php echo $nota['Nota']['tipo_nota_id']; ?></td>
        <td>    
            <?php echo $this->Html->link('Editar', array('action'=>'edit',$nota['Nota']['id_nota'])); ?>
            <?php echo $this->Form->postLink('Borrar', array('action'=>'delete',$nota['Nota']['id_nota']), array('confirm' => 'Esta seguro?')); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($nota); ?>
</table>
<?php echo $this->Html->link('Agregar notas', array('action'=>'add', $id_cierre));?> 
<?php //echo $this->Html->link('Volver', array('controller' => 'cierres', 'action'=>'index'));?>