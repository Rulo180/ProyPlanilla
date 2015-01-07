<h1><b>Lista de Cursos: <?php echo $nombre_escuela; ?></b></h1>
<table>
    <tr>
        <th>ID</th>
        <th>Año - División</th>

        <th>Acciones</th>
    </tr>


    <?php foreach ($cursos as $curso): ?>
    <tr>
        <td><?php echo $curso['Curso']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($curso['Curso']['año_curso'].'° - '. $curso['Curso']['division_curso'].'°', array('controller' => 'alumnos', 'action' => 'index', $curso['Curso']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link('Cierres', array('controller' => 'cierres', 'action'=>'index',$curso['Curso']['id'])); ?> - 
            <?php echo $this->Html->link('Editar', array('action'=>'edit',$curso['Curso']['id'])); ?>
            <?php echo $this->Form->postLink('Borrar', array('action'=>'delete',$curso['Curso']['id']), array('confirm' => 'Esta seguro?')); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($curso); ?>
</table>
<?php echo $this->Html->link('Agregar curso', array('action'=>'add', $id_escuela));?> 
<?php echo $this->Html->link('Volver', array('controller' => 'escuelas', 'action'=>'index'));?>
<?php 