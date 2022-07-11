
<div class="container">
        <h1>Actualizar Empresas</h1>
        <hr />
        

        <a href="admin" class="btn btn-primary">Volver</a>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>


        <form class="formulario" method="POST" enctype="multipart/form-data">
            
            <?php include 'formulario.php'; ?>

            <input type="submit" value="Actualizar empresa" class="boton boton-verde">
        </form>
        
        </div>
