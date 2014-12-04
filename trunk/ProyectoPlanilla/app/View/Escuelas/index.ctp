<h1>Lista de Escuelas</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Número</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($escuelas as $escuela): ?>
    <tr>
        <td><?php echo $escuela['Escuela']['id_escuela']; ?></td>
        <td>
            <?php echo $this->Html->link($escuela['Escuela']['nombre_escuela'],
array('controller' => 'escuelas', 'action' => 'view', $escuela['Escuela']['id_escuela'])); ?>
        </td>
        <td><?php echo $escuela['Escuela']['nro_escuela']; ?></td>
        <td><?php echo $this->Html->link('Editar', array('action'=>'edit')); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($escuela); ?>
</table>
<?php echo $this->Html->link('Agregar Escuela', array('action'=>'add')); ?>



