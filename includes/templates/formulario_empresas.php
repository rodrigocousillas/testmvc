<fieldset>
    <legend>Información de la Empresa</legend>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="empresas[nombre]" value="<?php echo s( $empresas->nombre ); ?>">

    <label for="sigla">Siglas:</label>
    <input type="text" id="sigla" name="empresas[sigla]" value="<?php echo s( $empresas->sigla ); ?>">

</fieldset>

<fieldset>
    <legend>Información Extra</legend>

    <label for="descripcion">Descripción:</label>
    <input type="text" id="descripcion" name="empresas[descripcion]" value="<?php echo s( $empresas->descripcion ); ?>">
</fieldset>
