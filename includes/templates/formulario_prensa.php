<fieldset>
    <legend>Informacion general</legend>
   
    <label class="form-label" for="empresaId">Empresa</label>
    <select class="form-control" name="prensa[empresaId]" id="empresaId">
        <option value="">Seleccione la empresa</option>
        <?php foreach( $empresas as $empresa) { ?>
            <?php echo $prensa->empresaId === $empresa->id ? 'selected' : '' ?>
            <option <?php echo $prensa->empresaId === $empresa->id ? 'selected' : '' ?> value="<?php echo s($empresa->id) ?>"> <?php echo s($empresa->sigla) ?> </option>
        <?php } ?>
    </select>    
    
    <label for="titulo" class="form-label">Titulo</label>
    <input class="form-control" name="prensa[titulo]" type="text" id="titulo" value="<?php echo s( $prensa->titulo) ; ?>">
    
    <label for="bajada" class="form-label">Bajada</label>
    <input class="form-control" name="prensa[bajada]" type="text" id="bajada" value="<?php echo s( $prensa->bajada); ?>">
    
    <label for="texto" class="form-label">Texto</label>
    <textarea id="texto" name="prensa[texto]" class="form-control"><?php echo s($prensa->texto); ?></textarea>

    <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" accept="image/jpeg, image/png" name="prensa[imagen]">

    <?php if($prensa->imagen) { ?>
        <img src="../../prensa/<?php echo $prensa->imagen ?>" class="imagen-small">
    <?php } ?>
</fieldset>