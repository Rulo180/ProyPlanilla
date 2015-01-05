<h1><b>Lista de Cierres:</b></h1>
<table>
    <tr>
        <th>ID</th>
        <th>Trimestre</th>
        <th>Fecha</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($cierres as $cierre): ?>
    <tr>
        <td><?php echo $cierre['Cierre']['id_cierre']; ?></td>
        <td>
            <?php echo $cierre['Cierre']['trimestre']; ?>
        </td>
        <td><?php echo $cierre['Cierre']['fecha_cierre']; ?></td>
        <td>
            <?php echo $this->Html->link('Notas', array('controller' => 'notas', 'action'=>'index', $cierre['Cierre']['id_cierre'], 'c'));?>
            <?php echo $this->Html->link('Editar', array('action'=>'edit',$cierre['Cierre']['id_cierre'])); ?>
            <?php echo $this->Form->postLink('Borrar', array('action'=>'delete',$cierre['Cierre']['id_cierre']), array('confirm' => 'Esta seguro?')); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($cierre); ?>
</table>
<?php echo $this->Html->link('Agregar cierre', array('action'=>'add', $id_curso));?> 
<?php echo $this->Html->link('Volver', array('controller' => 'escuelas', 'action'=>'index'));?>