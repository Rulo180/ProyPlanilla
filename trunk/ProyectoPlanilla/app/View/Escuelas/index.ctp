<h1><b>Lista de Escuelas</b></h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Número</th>
        <th>Teléfono</th>
        <th>Acciones</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($escuelas as $escuela): ?>
    <tr>
        <td><?php echo $escuela['Escuela']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($escuela['Escuela']['nombre_escuela'],
array('controller' => 'cursos', 'action' => 'index', $escuela['Escuela']['id'])); ?>
        </td>
        <td><?php echo $escuela['Escuela']['nro_escuela']; ?></td>
        <td><?php echo $escuela['Escuela']['telefono_escuela']; ?></td>
        <td>
            <?php echo $this->Html->link('Editar', array('action'=>'edit',$escuela['Escuela']['id'])); ?> - 
            <?php echo $this->Form->postLink('Borrar', array('action'=>'delete',$escuela['Escuela']['id']), array('confirm' => 'Esta seguro?')); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($escuela); ?>
</table>
<?php echo $this->Html->link('Agregar Escuela', array('action'=>'add')); ?>



