<div class="container">
<?php 
        if($resultado) {
            $mensaje = mostrarNotificacion( intval( $resultado) );
            if($mensaje) { ?>
                <p class="alert alert-primary"><?php echo s($mensaje); ?></p>
    <?php  
            } 
        }
    ?>
<h2>Empresas</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Siglas</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach( $empresas as $empresa ): ?>
            <tr>
                <td><?php echo $empresa->id; ?></td>
                <td><?php echo $empresa->sigla; ?></td>
                <td><?php echo $empresa->nombre; ?></td>
                <td><?php echo $empresa->descripcion; ?></td>
                
                <td>
                    <form method="POST" class="w-100" action="eliminar">
                        <input type="hidden" name="id" value="<?php echo $empresa->id; ?>">
                        <input type="hidden" name="tipo" value="empresa">
                        <input type="submit" class="btn btn-danger" value="Eliminar">
                    </form>
                    <a href="actualizar?id=<?php echo $empresa->id; ?>">Modificar</a>
                </td>
            </tr>
        <?php endforeach; ?>    
        </tbody>

    </table>
</div>    