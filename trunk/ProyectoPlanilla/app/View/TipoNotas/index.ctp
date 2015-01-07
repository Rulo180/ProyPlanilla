<h1><b>Lista de Tipos:</b></h1>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre Tipo</th>
        <th>Descripcion</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($tipos as $tipo): ?>
    <tr>
        <td><?php echo $tipo['TipoNota']['id']; ?></td>
        <td>
            <?php echo $tipo['TipoNota']['nombre_tipo_nota']; ?>
        </td>
        <td><?php echo $tipo['TipoNota']['descripcion_tipo_nota']; ?></td>
        <td>
            <?php echo $this->Html->link('Editar', array('action'=>'edit',$tipo['TipoNota']['id'])); ?>
            <?php echo $this->Form->postLink('Borrar', array('action'=>'delete',$tipo['TipoNota']['id']), array('confirm' => 'Esta seguro?')); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($nota); ?>
</table>
<?php echo $this->Html->link('Agregar tipos', array('action'=>'add'));?>