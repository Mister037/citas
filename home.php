<?php
    include "templates/header.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sistema Médico - Página de Inicio</title>
  <style>
   body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;

  }
  
  #welcome-message {
    font-size: 24px;
    margin-top: 40px;
    text-align: center;
  }
  
  #menu {
    background-color: #f4f4f4;
    padding: 20px;
  }
  
  #menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
  }
  
  #menu ul li {
    margin: 0 10px;
  }
  
  #menu ul li a {
    color: #333;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s;
  }
  
  #menu ul li a:hover {
    background-color: #ddd;
  }
  
  #content {
    padding: 20px;
    margin-top: 30px;
    text-align: center;
   
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin: 10px;
    margin-bottom: 20px;
    /*background-color: #333;*/
    background-color: #f4f4f4;;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  

  </style>
</head>
<body>
  <div id="welcome-message">
    <h2>Bienvenido</h2>
  </div>
  <div id="content">
    <h3>Historial de Citas</h3>
    <table>
      <thead>
        <tr>
          <th>usuarioID</th>
          <th>fecha</th>
          <th>hora</th>
          <th>profesional</th>
          <th>especialidad</th>
          <th>correo</th>
        </tr>
      </thead>
      <tbody>
        <?php
          //conexión a la base de datos
          include_once "model/database.php";

          // Consulta para obtener los datos del historial de citas
          $consulta = $db->query("SELECT * FROM citas");

          // Recorrer los resultados y generar las filas de la tabla
          while ($cita = $consulta->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $cita['usuarioID'] . "</td>";
            echo "<td>" . $cita['fecha'] . "</td>";
            echo "<td>" . $cita['hora'] . "</td>";
            echo "<td>" . $cita['profesional'] . "</td>";
            echo "<td>" . $cita['especialidad'] . "</td>";
            echo "<td>" . $cita['correo'] . "</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>

  <?php
    include "templates/footer.php";
  ?>
</body>
</html>
