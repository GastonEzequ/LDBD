<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['user_role'])) {
    header('Location: login.php');
    exit();
}

// Almacena el rol del usuario
$user_role = $_SESSION['user_role'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formularios según permisos</title>
</head>
<body>
    <h1>Formularios</h1>

    <?php if ($user_role == 'admin'): ?>
        <h2>Formulario de Administración</h2>
        <form action="admin_process.php" method="post">
            <label for="admin_input">Entrada Admin:</label>
            <input type="text" id="admin_input" name="admin_input" required>
            <input type="submit" value="Enviar">
        </form>
    <?php endif; ?>

    <?php if ($user_role == 'editor' || $user_role == 'admin'): ?>
        <h2>Formulario de Edición</h2>
        <form action="edit_process.php" method="post">
            <label for="edit_input">Entrada Edición:</label>
            <input type="text" id="edit_input" name="edit_input" required>
            <input type="submit" value="Enviar">
        </form>
    <?php endif; ?>

    <h2>Formulario General</h2>
    <form action="general_process.php" method="post">
        <label for="general_input">Entrada General:</label>
        <input type="text" id="general_input" name="general_input" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
