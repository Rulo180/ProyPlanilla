<h1><b>Notas de <?php echo $nombre_alumno; ?>:</b></h1>
<table>
    <tr>
        <th>ID</th>
        <th>Alumno</th>
        <th>Valor</th>
        <th>Tipo Nota</th>
    </tr>

    <?php foreach ($notas as $nota): ?>
    <tr>
        <td><?php echo $nota['Nota']['id']; ?></td>
        <td>
            <?php echo $nota['Nota']['alumno_id']; ?>
        </td>
        <td><?php echo $nota['Nota']['valor_nota']; ?></td>
        <td><?php echo $nota['Nota']['tipo_nota_id']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($nota); ?>
</table>
