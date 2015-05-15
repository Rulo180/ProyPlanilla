<h1><b>Lista de Alumnos</b></h1>

<table>
    <tr>
        <th>ID</th>
        <th>Apellido/Nombre</th>
        <th>Acciones</th>
    </tr>
    
    <?php foreach($alumnos as $alumno): ?>
        <tr>
            <td><?php echo $alumno['Alumno']['id']; ?></td>
            <td><?php echo $alumno['Alumno']['Nombre_Completo']; ?></td>
            
            <td>
                <?php echo $this->Html->link('Notas', array( 'action'=>'verNotas', $alumno['Alumno']['id'])); ?>
                <?php echo $this->Html->link('Editar', array('action'=>'edit',$alumno['Alumno']['id'])); ?>
                <?php echo $this->Form->postLink('Borrar', array('action'=>'delete',$alumno['Alumno']['id']), array('confirm' => 'Esta seguro?')); ?>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php unset($alumno); ?>
</table>
<?php echo $this->Html->link('Agregar alumno', array('action'=>'add', $id_curso));
      //echo $this->Html->link('Volver', array('controller' => 'cursos', 'action'=>'index', ));?>