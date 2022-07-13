<?php
    $seccion = "headerLight";
?>
<div class="container contacto">
    <div class="row">
        <div class="col-12 col-md-8">
            <h2>Por cualquier consulta no dude en enviarnos un correo electrónico, llamarnos o enviarnos un mensaje via web.</h2>
        </div>
    </div>
    <div class="row mb-50">
        <div class="col-12 col-md-4">
            <div class="marca">
                email
            </div>
            <h4>contacto@scp.com.ar</h4>
        </div>
        <div class="col-12 col-md-4">
            <div class="marca">
                teléfono
            </div>
            <h4>(+5411) 2152-6000</h4>
        </div>
        <div class="col-12 col-md-4">

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php
                if($mensaje) {
                    echo "<p class='alert alert-primary'> '. $mensaje  .' </p>";
                }
            ?>
        </div>
        <div class="col-12">    
        <div class="marca">
                Mensaje
            </div>
        </div>
    </div>
    <form action="/contacto" method="POST" novalidate>
    <div class="row formulario">
        <div class="col-12 col-md-8">
            <div class="row">
                <div class="form-group col-12 col-md-6">
                    <label for="form_name">Elije tu región* </label>
                    <select class="form-control" name="contacto[region]" id="region" required="required" data-error="Nombre es requerido.">
                        <option>Seleccione una opción</option>
                        <option>Argentina</option>
                        <option>Uruguay</option>
                    </select>
                    <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="form_lastname">Nombre</label>
                        <input id="form_lastname" placeholder="Nombre" type="text" name="contacto[name]" class="form-control" required="required" data-error="Apellido es requerido.">
                        <div class="help-block with-errors"></div>
                    </div> 
                    <div class="form-group col-12 col-md-6">
                        <label for="form_lastname">Apellido</label>
                        <input id="form_lastname" placeholder="Apellido" type="text" name="contacto[lastname]" class="form-control" required="required" data-error="Apellido es requerido.">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="form_email">* Email</label>
                        <input id="form_email" placeholder="correo@ejemplo.com" type="email" name="contacto[email]" class="form-control" required="required" data-error="Un email válido es requerido.">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-12 col-md-6">
                            <label for="form_phone">País</label>
                            <input id="form_pais" placeholder="País" type="pais" name="contacto[pais]" class="form-control" >
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="form_lastname">Compañia</label>
                            <input id="form_empresa" placeholder="Compañia" type="text" name="contacto[empresa]" class="form-control" >
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="form_phone">Ciudad</label>
                            <input id="form_ciudad" placeholder="Ciudad" type="ciudad" name="contacto[ciudad]" class="form-control" >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="form_message">Mensaje</label>
                                <textarea id="form_message" placeholder="Escribe tu mensaje aquí..." name="contacto[message]" class="form-control"  rows="6" required="required" data-error="Por favor, deje un mensaje."></textarea>
                                <div class="help-block with-errors"></div>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6Lde0zAaAAAAAEsCc7oRQhyfOrHc7Pa5D9306o-p" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                <input class="form-control hidden" data-recaptcha="true" required data-error="Por favor complete el  Captcha"> 
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6" style="text-align: right">
                            <br>
                            * Campos requeridos
                            <br><br>
                            <input type="submit" class="btn btn-prensa" value="Enviar mensaje">
                        </div>
                    </div>    
                    </form>
                </div>
            </div>      
    </div>
</div>