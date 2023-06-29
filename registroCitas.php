
<?php
  session_start();

  #$nombreUsuario = isset($_SESSION['nombreUsuario']) ? $_SESSION['nombreUsuario'] : '';

  

  include "templates/header.php";

  include_once "model/database.php";
  $varuser = $_SESSION['username1'];
  $consulta = $db->query("SELECT * FROM clientes WHERE usuario = '$varuser' ");
  $citas = $consulta->fetch(PDO::FETCH_OBJ);   
  
  


?>

<?php //mensajes 
            if(isset($_GET["mensaje"])and $_GET ["mensaje"] === "bienvenido"){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>¡Bienvenido!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            <?php
            }
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/citas.css">
  <title>Agendamiento de Citas Médicas</title>
  
<body>
  <!--<div class="container-cerrar">
    <a class="cerrar" href="">Cerrar sesión</a>
  </div>-->
  <h1>Agendamiento de Citas Médicas</h1>
  <form action="validarRegistroCitas.php" method="POST" onsubmit="return validateForm()">
    <label for="nombre">Usuario:</label>
    <!--modifico el name usuario con user-->
    <input type="text" id="nombre" name="usuario" required value="<?php echo isset($_SESSION['username1']) ? $_SESSION['username1'] : ''; ?>">

    <!--<label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required>-->

    <label for="fecha">Fecha de la cita:</label>
    <input type="date" id="fecha" name="fecha" required>

    <label for="hora">Hora de la cita:</label>
    <select id="hora" name="hora" required>
      <option value="">Seleccione una hora</option>
      <option value="07:00">07:00</option>
      <option value="08:00">08:00</option>
      <option value="09:00">09:00</option>
      <option value="10:00">10:00</option>
      <option value="11:00">11:00</option>
      <option value="12:00">12:00</option>
      <option value="13:00">13:00</option>
      <option value="14:00">14:00</option>
      <option value="15:00">15:00</option>
      <option value="16:00">16:00</option>
      <option value="17:00">17:00</option>
      <option value="18:00">18:00</option>
      <option value="19:00">19:00</option>
      <!-- Agrega más opciones de hora aquí -->
    </select>

    <label for="profesional">Profesional:</label>
    <select id="profesional" name="profesional" required>
      <option value="">Seleccione un profesional</option>
      <option value="Dr. Juan Pérez">Dr. Juan Pérez</option>
      <option value="Dra. María García">Dra. María García</option>
      <option value="Dra. Ana López">Dra. Ana López</option>
      <option value="Dra. Rosa López">Dra. Rosa López</option>
      <!-- Agrega más opciones de profesionales aquí -->
    </select>

    <label for="especialidad">Especialidad:</label>
    <select id="especialidad" name="especialidad" required>
      <option value="">Seleccione una especialidad</option>
      <option value="Pediatria">Pediatría</option>
      <option value="Cardiologia">Cardiología</option>
      <option value="Ginecologia">Ginecología</option>
      <option value="Neurologia">Neurología</option>
      <option value="Odontologia">Odontología</option>
      <option value="Oftalmologia">Oftalmología</option>
      <option value="Urologia">Urología</option>
      <option value="Traumatologia">Traumatología</option>
      <option value="Otorrinolaringologia">Otorrinolaringología</option>
      <option value="Medicinageneral">Medicina general</option>
      <!-- Agrega más opciones de especialidades aquí -->
    </select>

    <section>
      <label for="correo">correo</label>
      <input type="text" name="correo" value=" <?php echo $citas->email; ?>">
    </section>

    <input type="submit" value="Agendar cita">
  </form>

  

  <div class="container mt-5 "></div>

  <?php   
    
  #$usuario = $_POST['']


  ?>

  
</body>
</html>

<?php
    #include "templates/footer.php"
?>