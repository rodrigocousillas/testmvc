
<div class="container">
        <h1>Registrar Empresas</h1>
        <hr />
        

        <a href="admin" class="btn btn-primary">Volver</a>

        <?php foreach($errores as $error): ?>
        <div class="alert alert-danger">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>


        <form class="formulario" method="POST" action="crear" enctype="multipart/form-data">
        <?php include __DIR__ . '/formulario.php'; ?>

            <input type="submit" value="Registrar Empresa" class="btn btn-warning">
        </form>

        
        
        </div>

