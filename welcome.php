<?php
session_start();

if (!isset($_SESSION['id_Usuario'])) {
    header("Location: index.html");
    exit();
}

$nombreCompleto = $_SESSION['Nombre'] . ' ' . $_SESSION['Apellido'];
$correoElectronico = $_SESSION['correoElectronico'];
?>

<!DOCTYPE html>
<html lang="es">
<body>
    <div class="contenedorGeneral">
        <div>
            <!-- Formulario y script para cerrar sesión -->
            <form id="logoutForm" action="Registrar/logout.php" method="post">
                <button class="neon-button" type="submit">Cerrar Sesión</button>
            </form>
        </div>
    </div>
</body>
</html>