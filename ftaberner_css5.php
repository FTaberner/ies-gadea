<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellido"];
    $correo = $_POST["correo"];
    $fechaNacimiento = $_POST["cumple"];
    $formacion = $_POST["formacion"];
    $deportesSelect = $_POST["afi1"];
    $deportesCheckbox = isset($_POST["afi2"]) ? $_POST["afi2"] : [];
    $cvPdf = $_FILES["pdf"]["name"];
    $foto = $_FILES["foto"]["name"];
    $observaciones = $_POST["observar"];

    echo "<h2>Datos del formulario:</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Apellidos: $apellidos</p>";
    echo "<p>Correo Electrónico: $correo</p>";
    echo "<p>Fecha de Nacimiento: $fechaNacimiento</p>";
    echo "<p>Formación Actual: $formacion</p>";
    echo "<p>Deportes (select): $deportesSelect</p>";
    echo "<p>Deportes (checkbox): " . implode(", ", $deportesCheckbox) . "</p>";
    echo "<p>Curriculum Vitae (PDF): $cvPdf</p>";
    echo "<p>Foto: $foto</p>";
    echo "<p>Observaciones: $observaciones</p>";
}
?>
