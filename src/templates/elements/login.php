<?php
if (isset($contexto['user'])) { 
 ?>
    <div class="loginBox">
        <span>Hola <?php echo $contexto['user']->getUsuario();?>  pulsa </span>
        <a href ="http://localhost/logout">aquí para cerrar sesión</a>
    </div>

<?php
} else {
    if(isset($contexto['errorLogin'])){
        ?><span class="errorMessage"<?php echo $contexto['errorLogin'];?></span><?php
    }

?> 
<div class="loginBox">
    <table>
        <form method="post" action="http://localhost/login" id="formulario">
            <tr>
                <td><label class="etiqueta" >DNI</label></td>
                <td><input type="text" name="dni" id="dni"/></td>
            </tr>    
            <tr>
                <td><label class="etiqueta">Contraseña</label></td>
                <td><input type="password" name="password" id="pass"/></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" class="boton1" id="enviar" value="Entrar"/>
                    <input type="reset" class="boton" value="Borrar"/>
                </td>
            </tr>            
            <input type="hidden" value="<?php echo $_SERVER['REQUEST_URI'];?>" name="uri"/>   
        </form>
    </table>
        <span>Aún no te has registrado? , pulsa </span>    
    <a href="http://localhost/registro">aqui!</a>
    </div>
<?php    
}
?>
