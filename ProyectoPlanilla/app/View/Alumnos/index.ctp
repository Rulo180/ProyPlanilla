<h1><b>Lista de Alumnos</b></h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Acciones</th>
    </tr>
    
    <?php foreach($alumnos as $alumno): ?>
        <tr>
            <td><?php echo $alumno['Alumno']['id_alumno']; ?></td>
            <td><?php echo $alumno['Alumno']['nombre_alumno']; ?></td>
            <td><?php echo $alumno['Alumno']['apellido_alumno']; ?></td>
            <td>
                <?php echo $this->Html->link('Notas', array('controller' => 'Notas', 'action'=>'index', $alumno['Alumno']['id_alumno'], 'a')); ?>
                <?php echo $this->Html->link('Editar', array('action'=>'edit',$alumno['Alumno']['id_alumno'])); ?>
                <?php echo $this->Form->postLink('Borrar', array('action'=>'delete',$alumno['Alumno']['id_alumno']), array('confirm' => 'Esta seguro?')); ?>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php unset($alumno); ?>
</table>
<?php echo $this->Html->link('Agregar alumno', array('action'=>'add', $id_curso));
      //echo $this->Html->link('Volver', array('controller' => 'cursos', 'action'=>'index', ));?>