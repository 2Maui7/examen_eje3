<?php
if (isset($_GET['nombre'])) {
    $nombre = htmlspecialchars($_GET['nombre']); 
    setcookie('usuario', $nombre, time() + 3600, "/"); 
} else {
    $nombre = 'Usuario no definido';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h2 class="text-primary"><?php echo $nombre; ?> está configurado.</h2>
        </div>
    </div>
</body>
</html>
