<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="fromulario.css">
    <script type="text/javascript" src="code.jquery.com_jquery-3.7.1.min.js"></script>
</head>
<body>
    <ul class="navbar">
        <li><b><a href="Bienvenida.html"><span style="color: darkviolet">Bienvenida</span></a></b></li>
        <li><b><a href="Sabores.html"><span style="color: blue">Sabores</span></a></b></li>
        <li><b><a href="promociones.html"><span style="color: darkviolet">Promociones</span></a></b></li>
        <li><b><a href="ubicacion.html"><span style="color: blue">Ubicación</span></a></b></li>
        <li><b><a href="formulario.php"><span style="color: darkviolet">Formulario</span></a></b></li>
    </ul>
   
    <h1>Formulario de Pedidos</h1>
    
    <form action="registrar.php" method="post"
    class="form-register" onsubmit="javascript:return Validar(this);">
        <h2 class="form-titulo"> Datos del cliente</h2>
        <div class="contenedor-inputs">
            <input type="text" name="nombre" id="nombre" class="input-48" placeholder="Nombre" onblur="javascript:Validar();" >
            <input type="text" name="apellidos" id="apellidos" class="input-48" placeholder="Apellidos" onblur="javascript:Validar();" >
            <input type="email" name="correo" id="correo" class="input-100" placeholder="Correo" onblur="javascript:Validar();" >
            <input type="text" name="direccion" id="direccion" class="input-100" placeholder="Dirección" onblur="javascript:Validar();">
            <input type="number" name="telefono"  class="input-100"  placeholder="Telefono" >
            <input type="button" value="Recibir código" class="btn-Recibir" onclick="mostrarAlerta()">
            <div id="alert"></div>
                    
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <input type="password" name="codigo" id="codigo" class="input-70" placeholder="Código" onblur="javascript:Validar();">
            <button type="button" onclick="mostrarcodigo()">ver</button>
            
            <div class="Genero">
                <h4>Pago</h4>
                <p><input type="radio" name="pago" value="Efectivo" /> Efectivo</p>
                <p><input type="radio" name="pago" value="Tarjeta" /> Tarjeta</p>
            </div>
            <div class="Envase">
                <h4>Envase de Helado</h4>
                <select name="envase" id="envase" class="input-100">
                  <option value="Cono">Cono</option>
                  <option value="Barquillos">Barquillos</option>
                  <option value="Paletas">Paletas</option>
                  <option value="Estrellas">Estrellas</option>
                  <option value="Vasos">Vasos</option>
                </select>
              </div>
              <div class="seccion">
                <h4>Elija el sabor de
                    su preferencia</h4> 
                <div class="combo-container">
                    <label>
                        <input type="checkbox" name="sabores" value="Fresa" class="input-24" /> Fresa
                    </label>
                    <label>
                        <input type="checkbox" name="sabores" value="Yogurt" class="input-24"/> Yogurt
                    </label>
                    <div class="combo-container">
                    <label>
                        <input type="checkbox" name="sabores" value="Chocolate" class="input-24"/> Chocolate
                    </label>
                    <label>
                        <input type="checkbox" name="sabores" value="Maracuya" class="input-24"/> Maracuya
                    </label>
                    </div>
                </div>
            </div>
            
             
            <input type="submit" value="Realizar Pedido" class="btn-enviar"  >
            <p class="form__link">¿Ya tienes una cuenta? <a href=""> Ingresa aqui</a></p>
            <div id="alert">HOLA</div>
        
    </form>
    
    <script type="text/javascript">
        function Validador(correo){
            var tester =/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-]+)\.)+([a-zA-Z0-9]{2,4})+$/;
            return tester.test(correo);
        }
        
        function Validar(){
            var nombre = document.getElementById('nombre').value;
            var apellidos= document.getElementById('apellidos').value;
            var correo = document.getElementById('correo').value;
            var usuario = document.getElementById('usuario').value;
            var contraseña = document.getElementById('contraseña').value;
            var telefono= document.getElementById('telefono').value;
            


            if(nombre==""){
                $('#alert').html('Debes ingresar un nombre').slideDown(500);
                $('#nombre').focus();
                return false;
            }
            else{
                $('#alert').html('').slideDown(300); 
            }

            if(apellidos==""){
                $('#alert').html('Debe ingresar su apellido').slideDown(500);
                $('#apellidos').focus();
                return false;
            }
            else{
                $('#alert').html('').slideDown(300); 
            }


            if(correo==""){
                $('#alert').html('Debes ingresar tu correo').slideDown(500);
                $('#correo').focus();
                return false;
            }
            else{
                $('#alert').html('').slideDown(300); 
            }

            if(Validador(correo)==false){
                $('#alert').html('Ingresa un correo valido').slideDown(500);
                $('#correo').focus();
                return false;
            }
            else{
                $('#alert').html('').slideDown(300); 
            }


            if(Direccion==""){
                $('#alert').html('Debes ingresar tu direccion').slideDown(500);
                $('#usuario').focus();
                return false;
            }
            else{
                $('#alert').html('').slideDown(300); 
            }


            if(Codigo==""){
                $('#alert').html('Codigo requerido').slideDown(500);
                $('#contraseña').focus();
                return false;
            }
            else{
                $('#alert').html('').slideDown(300); 
            }


            if(telefono==""){
                $('#alert').html('Telefono requerido').slideDown(500);
                $('#telefono').focus();
                return false;
            }
            else{
                $('#alert').html('').slideDown(300); 
            }

        }
        function mostrarAlerta() {
            var correo = document.getElementById('correo').value;
            if (correo !== "") {
                $('#alert').html('Codigo enviado a '+correo).slideDown(500);
            } else {
                document.getElementById('alert').innerHTML = 'Ingresa un correo válido antes de recibir el código.';
            }
        }
        function mostrarcodigo() {
    var codigoInput = document.getElementById('codigo');
    if (codigoInput.type === 'password') {
        codigoInput.type = 'text';
    } else {
        codigoInput.type = 'password';
    }
}
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conn->error;
}
$conn->close(){
    echo '<br><a href="registrar.php"><button>Volver al Formulario</button></a>';
}
        
    </script>
</body>
</html>

