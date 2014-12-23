<h1>Lista de Cursos</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Año</th>
        <th>División</th>
        <th>Escuela</th>
        <th>Acciones</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($cursos as $curso): ?>
    <tr>
        <td><?php echo $curso['Curso']['id_curso']; ?></td>
        <td>
            <?php echo $this->Html->link($curso['Curso']['año_curso'],
array('controller' => 'alumnos', 'action' => 'index', $curso['Curso']['id_curso'])); ?>
        </td>
        <td><?php echo $curso['Curso']['division_curso']; ?></td>
        <td><?php echo $curso['Curso']['escuela_id']; ?></td>
        <td><?php echo $this->Html->link('Editar', array('action'=>'edit',$curso['Curso']['id_curso'])); ?>
        <?php echo $this->Form->postLink('Borrar', array('action'=>'delete',$curso['Curso']['id_curso']), array('confirm' => 'Esta seguro?')); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($curso); ?>
</table>
<?php echo $this->Html->link('Agregar curso', array('action'=>'add', $id_escuela)); ?>