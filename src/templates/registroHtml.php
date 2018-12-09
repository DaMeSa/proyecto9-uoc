<?php   if (isset ($contexto['mensaje'])) {
            echo $contexto['mensaje'];
        }
        
?>


<div id="registerBox">
    <table>
        <form method="post" action="http://localhost/registrar" id="formulario">
            <tr>
                <td><label class="etiqueta" >DNI</label></td>
                <td><input type="text" name="dni" id="user"/></td>           
            <tr>
            <tr>
                <td><label class="etiqueta">Contraseña</label></td>
                <td><input type="password" name="password" id="pass"/></td>
            </tr>
            <tr>
                <td><label class="etiquta">Email</label></td>
                <td><input type="text" name="email" id="email"/></td>
            </tr>
            <tr>
                <td><input type="submit" class="boton" id="enviar" value="Entrar"/></td>
                <td><input type="reset" class="boton" value="Borrar"/><input type="hidden" value="<?php echo $_SERVER['REQUEST_URI'];?>" name="uri"/>  </td>
            </tr>

        </form>
    </table>
</div>


