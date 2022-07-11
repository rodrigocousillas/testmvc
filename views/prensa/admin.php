<div class="container">
    <h1>Administrador de SCP</h1>
    <?php 
        if($resultado) {
            $mensaje = mostrarNotificacion( intval( $resultado) );
            if($mensaje) { ?>
                <p class="alert alert-primary"><?php echo s($mensaje); ?></p>
    <?php  
            } 
        }
    ?>

    <h2>Notas de Prensa</h2>

    <a href="crear" class="btn btn-success">Nueva nota de prensa</a>
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tema</th>
                    <th>Título</th>
                    <th>Bajada</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach( $prensa as $press ): ?>
                <tr>
                    <td><?php echo $press->id; ?></td>
                    <td><?php echo $press->empresaId; ?></td>
                    <td><?php echo $press->titulo; ?></td>
                    <td><?php echo $press->bajada; ?></td>
                    <td><img src="/prensa/<?php echo $press->imagen;?>" width="25%" ></td>
                    <td>
                        <form method="POST" class="w-100" action="eliminar">
                            <input type="hidden" name="id" value="<?php echo $press->id; ?>">
                            <input type="hidden" name="tipo" value="press">
                            <input type="submit" class="btn btn-danger" value="Eliminar">
                        </form>
                        <a href="actualizar?id=<?php echo $press->id; ?>">Modificar</a>
                    </td>
                </tr>
            <?php endforeach; ?>    
            </tbody>
        </table>
    </div>        
</div>    